<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attributes_group extends Model
{
    //
    protected $fillable =['name'];

    public function property_attribute(){
         return $this->hasMany('App\Propertyattributes');
    }
    public function attributes(){
         return $this->hasMany('App\Attributes');
    }
    
}
