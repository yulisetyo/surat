<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    protected $connection = 'mysql';
    
    protected $table = 'user_data';
    
    public $primaryKey = 'uId';
    
    public $incrimenting = true;
}
