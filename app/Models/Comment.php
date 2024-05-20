<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'post_id',
        'comment',
    ];

    public function user() {
        return $this->hasOne(Account::class, 'id', 'user_id');
    }

    public function post() {
        return $this->hasOne(post::class, 'id', 'post_id');
    }
    public function scopeSearch($query) {
        if($key = request()->key) {
            $query = $query->where('title', 'like', '%'.$key.'%');
        }
        return $query;
    }
}
