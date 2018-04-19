<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    protected $connection = 'pbn_mail';
    
    protected $table = 'mail_in';
    
    public $primaryKey = 'id';
    
    public $incrimenting = true;
}
