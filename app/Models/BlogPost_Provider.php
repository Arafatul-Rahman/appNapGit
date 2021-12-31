<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost_Provider extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'blog_posts';
    protected $fillable = ['id', 'category_id', 'blog_title', 'blog_details', 'blog_image', 'created_by', 'updated_by', 'deleted_by', 'valid'];

    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }
    public static function boot()
    {
        parent::providerBoot();
    }
}
