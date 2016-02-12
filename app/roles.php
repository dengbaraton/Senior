<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model

{

    protected $primaryKey="role_id";

    public function  Users()
    {
        return $this->hasMany(users::class,"role_id","role_id");
    }

    protected $fillable = [
        'description',
    ];

}
