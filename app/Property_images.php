<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_images extends Model
{
    //
    protected $fillable =['image','property_id'];

    public function property(){
    	return $this->belongsTo('App\Property', 'property_id');
    }
}
