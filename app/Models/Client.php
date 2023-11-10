<?php

namespace App\Models;

class Client extends Model
{

    public $routesPrefix = 'clients';

    protected $fillable = [
        "name",
        "email",
        "phone_number"
    ];


}
