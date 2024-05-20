<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
class Social extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'provider_user_id', 'provider',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
