<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webpatser\Uuid\Uuid;

class Media extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'medias';

    protected $fillable = [
        'uuid',
        'media_type_lookup_id',
        'file_name',
        'updated_by',
        'created_by',
        'deleted_by',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string)Uuid::generate(config('vars.uuid_version'));
        });
    }


    // Change Route Key Name
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    // Get One Resource By
    public static function getOneBy($field, $value)
    {
        return self::where($field, $value)->first();
    }

    // Get All Resource By
    public static function getAllBy($field, $value)
    {
        return self::where($field, $value)->get();
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
}
