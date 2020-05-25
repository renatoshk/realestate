<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    // 
     protected $fillable =['property_name','property_description', 'status'];
     
     public function user(){
     	return $this->belongsTo('App\User', 'user_id');
     }
    
     public function property_attributes(){
        return $this->hasMany('App\Propertyattributes');     
     }

      public function attribute(){
        return $this->hasMany('App\Attributes');     
     }

     public function attribute_groups(){
        return $this->hasMany('App\Attributes_group');     
     }

     public function photos(){
     	 return $this->hasMany('App\Property_images');
     }
}   
