<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\VerifyEmail;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','department','image','approved'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendEmailVerificationNotification()
{
    $this->notify(new VerifyEmail); // Use the default email verification notification
}
public function isAdmin()
{
    // Implement your logic to check if the user is an admin
    // For example, you can check if the user has a specific role or permission
    return $this->role === 'admin'; // Adjust the condition based on your role implementation
}

public function hasRole($role)
{
    // Implement your logic to check if the user has the given role
    // For example, you can check if the user's role matches the given role
    return $this->role === $role; // Adjust the condition based on your role implementation
}



public function posts()
{
    return $this->hasMany(Post::class);
}

public function comments()
{
    return $this->hasMany(Comment::class);
}



}