<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username', 'password',
    ];

    // Use this method to customize authentication by username
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    // Use this method to retrieve the user by their username instead of email
    public function findForPassport($username)
    {
        return $this->where('username', $username)->first();
    }
}