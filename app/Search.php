<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    //
    protected $fillable = ['property_type', 'property_name','property_description','status','price','location', 'surface','bedroom','kitchen','internet','furnished'];
}
