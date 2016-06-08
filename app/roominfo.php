<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roominfo extends Model
{
    protected $table = "roominfo";
    protected $primaryKey = "Room_id";
    protected $fillable = ['Room_Name','Price','Capacity','Available'];
}
