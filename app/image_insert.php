<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class image_insert extends Model
{
    protected $table = "image";
    protected $primaryKey = "ImageId";
    protected $fillable = ['ImageFile'];
}
