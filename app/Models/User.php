<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) \Webpatser\Uuid\Uuid::generate(config('vars.uuid_version'));
        });
    }

    /**
     *  Create new resource
     */
    public static function store($inputs)
    {
        return self::create($inputs);
    }

    /**
     *  Update existing resource
     */
    public static function edit($inputs, $resource)
    {
        return self::where('id', $resource)->update($inputs);
    }

    /**
     *  Delete existing resource
     */
    public static function remove($resource)
    {
        return self::where('id', $resource)->delete();
    }

    /**
     *  Get a specific resource
     */
    public static function getBy($by, $resource)
    {
        return self::where($by, $resource)->first();
    }

    /**
     *  Relationship with users
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     *  Relationship with users
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     *  Relationship with users
     */
    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    /**
     *  Relationship with groups
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'user_group','group_id', 'user_id')->withTimestamps();
    }

    /**
     *  Get Permissions
     */
    public function get_permissions($user)
    {
        $permissions = [];

        if($user->groups && $user->groups()->count() > 0){
            foreach ($user->groups as $group){
                foreach ($group->actions as $group_action){

                    $screen = Screen::getBy('id', $group_action->pivot->screen_id);
                    $action = Action::getBy('id', $group_action->pivot->action_id);
                    $permissions[] = $action->name . '.' . $screen->name;

                }
            }
        }

        return $permissions;
    }

    /**
     *  Has Permission
     */
    public static function has_permission($permission)
    {
        $has_access = false;
        $user = auth()->user();
        if(in_array($permission, $user->get_permissions($user)) || in_array($user->id, config('vars.authorized_users'))){
            $has_access = true;
        }
        return $has_access;
    }

}
