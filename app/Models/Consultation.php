<?php

namespace App\Models;

use App\Traits\GeneralHelperTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use HasFactory, GeneralHelperTrait;

//    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'name',
        'email',
        'phone',
        'country',
        'speciality',
        'degree',
        'details',
        'file',
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
}
