<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

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

    public function roles(){
        return $this->belongsToMany(Role::class,'role_users');
    }


    public function hasAccess(array $permissions){

        foreach($this->roles as $role){
            if($role->hasAccess($permissions)){
                return true;
            }
        }

        return false;

    }
    public function inRole($roleSlug)
    {
        return $this->roles()->where('slug',$roleSlug)->count()==1;
    }
<<<<<<< HEAD

    public function posts()
    {
        return $this->hasMany(NewsEvent::class, 'user_id');
    }

    public function postss()
    {
        return $this->hasMany(NewsEvent1::class, 'user_id');
    }
    
=======
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
}
