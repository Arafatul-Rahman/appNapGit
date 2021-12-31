<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BaseModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    //$type = 1 means Admin Control And 2 means Provider Control
    public static function providerBoot($type=0)
    {
        if(Auth::guard('provider')->check()) {
            $authId = Auth::guard('provider')->id();
            self::bootAction($authId);
        }
    }

    public static function userBoot($type=0)
    {
        if(Auth::guard('web')->check()) {
            $authId = Auth::guard('web')->id();
            self::bootAction($authId);
        }
    }

    public static function studentBoot($type=0)
    {
        if(Auth::check()) {
            $authId = Auth::id();
            self::bootAction($authId);
        }
    }

    public static function bootAction($authId)
    {
        parent::boot();

        static::creating(function($model) use ($authId)
        {
            $model->created_by = $authId;
            $model->valid = 1;
        });

        static::updating(function($model) use ($authId)
        {
            $model->updated_by = $authId;
        });

        static::deleting(function($model) use ($authId)
        {
            $model->deleted_by = $authId;
            $model->valid = 0;
            $model->update();
        });
    }
}
