<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class request_status extends Model
{
    protected $primaryKey="request_status_id";

    public function  User()
    {
        return $this->hasMany(client_requests::class,"requests_status_id","requests_status_id");
    }

    protected $fillable = [
        'description',
    ];
}
