<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{

    protected $fillable = [
        'email', 'Taiwan', 'image','place_name','content'
    ]; 
}
