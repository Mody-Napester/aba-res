<?php

namespace App\Models;

use App\Traits\GeneralHelperTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webpatser\Uuid\Uuid;

class Media extends Model
{
    use HasFactory, SoftDeletes, GeneralHelperTrait;

    public $table = 'media';

    protected $fillable = [
        'uuid',
        'media_type_lookup_id',
        'file_name',
        'is_active',
        'updated_by',
        'created_by',
        'deleted_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

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
     *  Change Route Key Name
     */
    public function getRouteKeyName()
    {
        return 'uuid';
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
     *  Get all resource rows
     */
    public static function getAll()
    {
        return self::all();
    }

    public static function getOneBy($parameters = [])
    {
        $model = new self();
        $result = $model->getFromModelByParameters($model, $parameters);
        return $result->first();
    }

    /**
     *  Get all resource
     */
    public static function getAllBy($parameters = [])
    {
        $model = new self();
        $result = $model->getFromModelByParameters($model, $parameters);
        return $result->get();
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
     *  Relationship with lookups (media_type)
     */
    public function media_type()
    {
        return $this->belongsTo(Lookup::class, 'media_type_lookup_id', 'id');
    }
}
