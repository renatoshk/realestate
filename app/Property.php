<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //  
    use Sluggable;
    use SluggableScopeHelpers; 
    protected $fillable =['property_name','property_description', 'status','price', 'location', 'slug'];
    public function sluggable(){
        return [
            'slug' => [
                'source' => 'property_name',
                'onUpdate' => false,
                'separator' => '-',
                'method' => null,
                'maxLength' => null,
                'maxLengthKeepWords' => true,
                'unique' => true,
                'uniqueSuffix' => null,
                'includeTrashed' => false,
                'reserved' => null,
                
            ]
        ];
    }
     public function user(){
     	return $this->belongsTo('App\User', 'user_id');
     }
    
     public function property_attributes(){
        return $this->hasMany('App\Propertyattributes');     
     }

      public function attribute(){
        return $this->hasMany('App\Attributes');     
     }

     public function attribute_group(){
        return $this->belongsTo('App\Attributes_group');     
     }

     public function photos(){
     	 return $this->hasMany('App\Property_images');
     }
}   
