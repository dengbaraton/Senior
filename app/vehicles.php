<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicles extends Model
{
    protected $primaryKey="vehicle_id";
    public $timestamps = false;

    public function Vehicle()
    {
        return $this->hasMany(client_requests ::class,"vehicle_id","vehicle_id");
    }

    protected $fillable = [
        'model',
    ];
}
