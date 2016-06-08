<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
     protected $table = "feedback";
    protected $primaryKey = "P";
    protected $fillable = ['Hotel_Name','User_Name','Comment'];
}
