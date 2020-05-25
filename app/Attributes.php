<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    //
     protected $fillable =['attribute_id','attr_code', 'type', 'label'];
     
     public function attribute_group (){
     	return $this->belongsTo('App\Attributes_group', 'attribute_id');
     }
      public function property_attributes(){
        return $this->hasMany('App\Propertyattributes');     
     }

     public function property(){
    	return $this->belongsTo('App\Property');
    }
}
