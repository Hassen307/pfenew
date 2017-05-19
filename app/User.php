<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Notifications\ResetPassword as ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    
    
     public function sendPasswordResetNotification($token)
    {
        // Your your own implementation.
        $this->notify(new ResetPasswordNotification($token));
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'role_id', 'name', 'email', 'password','email_token','verified',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles()
{
     return $this->hasOne('App\Role', 'id', 'role_id');
}
 public function permissions(){
 return $this->hasManyThrough('App\Permission', 'App\Role');
}

public function verified()
{
    
    $this->verified = 1;
    $this->email_token = null;
    $this->save();
  
}
}