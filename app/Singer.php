<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable=[
        'Singer_Name' ,'Singer_Image','Collection_Id',
    ];
}
