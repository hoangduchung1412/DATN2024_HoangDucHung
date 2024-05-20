<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    // them localScope
    public function scopeSearch($query) {
        if($key = request()->key) {
            $query = $query->where('name', 'like', '%'.$key.'%');
        }
        return $query;
    }
}
