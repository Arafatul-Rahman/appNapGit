<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserBasicInfo extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'user_basic_info';
    protected $guarded = array('id', 'created_at', 'created_by','updated_at', 'updated_by', 'deleted_at', 'deleted_by','valid');

    // public static function boot()
    // {
    //     parent::userBoot();
    // }
    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }
}

