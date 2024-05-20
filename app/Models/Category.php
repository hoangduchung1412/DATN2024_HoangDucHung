<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['name'];

    //Join 1-n
    public function posts() {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
    // them localScope
    public function scopeSearch($query) {
        if($key = request()->key) {
            $query = $query->where('name', 'like', '%'.$key.'%');
        }
        return $query;
    }
}
