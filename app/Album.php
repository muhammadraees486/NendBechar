<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable=[
'Collection_Id','Singer_Id','Album_Name','Total_Track','Release_Date','Album_Image',
    ];
}
