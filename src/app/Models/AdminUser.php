<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminUser extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'admin_users';

    protected $fillable = [
        'name',
        'password'
    ];

    public function wedding()
    {
        // Profileモデルのデータを引っ張てくる
        return $this->hasOne('Wedding');
    }
}
