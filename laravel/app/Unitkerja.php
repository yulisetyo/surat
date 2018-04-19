<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unitkerja extends Model
{
    protected $connection = 'pbn_ref';
    
    protected $table = 'ref_unit';
    
    public $primaryKey = 'id';
    
    public $incrimenting = true;
}
