<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
	protected $fillable =['property_id'];
    //
   public function user(){
   	  return $this->belongsTo('App/User', 'user_id');
   }   

   public function property(){
   	return $this->belongsTo('App/Property', 'property_id');
   }
 
}
