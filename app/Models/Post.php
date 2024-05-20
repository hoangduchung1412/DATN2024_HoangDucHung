<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content',
        'description',
        'image',
        'status',
        'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function cat() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    // them localScope
    public function scopeSearch($query) {
        if($key = request()->key) {
            $query = $query->where('title', 'like', '%'.$key.'%');
        }
        return $query;
    }
}
