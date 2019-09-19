<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','department_id','phone'];

   protected $table = 'users'; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function updateUser($data)
    {   
        $user = $this->find($data['id']);
        $user->name = $data['name'];
        $user->department_id = $data['department_id'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->save();
        return 1;
    }

    

    public function departments(){
        return $this->hasOne('App\Departments','id','department_id');            
    }
}
