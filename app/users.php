<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{

    protected $primaryKey="user_id";
    public function  Users()
    {
        return $this->hasMany(client_requests::class,"user_id","user_id");
    }
    protected $fillable = [
        'full_name', 'phone_number','email', 'password','latitude','longitude',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}

