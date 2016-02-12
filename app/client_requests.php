<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client_requests extends Model
{
    protected $primaryKey="requests_status_id";


    protected $fillable = [
        'from','to','description',
    ];

}
