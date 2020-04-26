<?php

namespace App;

//use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable , HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
    
    //scopes
    
    public function scopeName($query, $name){
        
        if($name)
        return $query-> where ('name','LIKE',"%$name%");
        
    }
    public function scopeEmail($query, $email){
        
        if($email)
        return $query-> where ('email','LIKE',"%$email%");
        
    }
    
   
    
}
