<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProviderUser_Provider extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'providers';
    protected $fillable = ['id', 'name', 'email', 'phone', 'password', 'address', 'image', 'created_by', 'updated_by', 'deleted_by', 'status', 'valid'];

    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }
    public static function boot()
    {
        parent::providerBoot();
    }
}
