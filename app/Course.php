<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "hotel_name";
    protected $primaryKey = "hotel_id";
    protected $fillable = ['name','Location','facility','Policy','Image','contact'];
}
