<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReg extends Model
{
    protected $table = 'client_reg';
    protected $primaryKey ='id';
    protected $fillable= [
        "childs_name",
        "last_name_child",
        "child_birthday",
        "message",
        "client_last_name",
        "client_first_name",	
        "client_patronymic",
        "email",
        "dop_contact",
    ];
}
