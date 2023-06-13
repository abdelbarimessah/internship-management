<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = 'user';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'establishment',
        'city',
        'speciality',
        'cin',
        'gender',
        'phone_number',
        'study_year',
        'role',
        'remember_token',
    ];

    // Define any relationships here
    // For example, if a user has many posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Implementing the Authenticatable methods
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    // Add any other methods, accessors, or mutators as needed
}
