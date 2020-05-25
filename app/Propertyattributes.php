<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propertyattributes extends Model
{
    //
        protected $fillable = ['property_id', 'attribute_group_id', 'attribute_id', 'attribute_value'];

        public function properties(){
        	return $this->belongsTo('App\Property', 'property_id');
        }
        public function attribute_group(){
        	return $this->belongsTo('App\Attributes_group', 'attribute_group_id');
        }
        public function attribute(){
        	return $this->belongsTo('App\Attributes', 'attribute_id');
        }

}
