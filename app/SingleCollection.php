<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleCollection extends Model
{
    protected $fillable=[
        'Singer_Name','Album_Image','Album_Name','Track_Name','Track_Url','Category',
    ];
}
