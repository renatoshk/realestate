<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_fee extends Model
{
    //
    protected $fillable = ['role_id','price'];

    public function role(){
    	return $this->belongsTo('App\Role');
    }
}
