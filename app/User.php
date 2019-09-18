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

    public function saveUser($data)
    {
        //$this->user_id = auth()->user()->id;
        $this->name = $data['name'];
        $this->role = $data['role'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->password = $data['password'];
        $this->save();
        return 1;
    }
}
