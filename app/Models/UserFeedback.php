<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFeedback extends Model
{
    protected $table = 'user_feedback';
    protected $fillable = ['id', 'feedback_title', 'feedback_details', 'valid'];

    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }
}
