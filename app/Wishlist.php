<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
	protected $fillable =['property_id', 'name', 'email', 'phone_number', 'message'];
    //
  
   public function property(){
   	return $this->belongsTo('App\Property', 'property_id');
   }
 
}
