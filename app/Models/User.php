<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

  use Notifiable;

  protected $table = 'users';
  public $timestamps = true;

  protected $fillable = [
    'full_name', 'email', 'password', 'role', 'phone'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

  public function userRole() {
    return $this->belongsTo('App\Models\UserRole', 'role');
  }

}