<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Downfile extends Model
{

    public $table = 'downfiles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

}
