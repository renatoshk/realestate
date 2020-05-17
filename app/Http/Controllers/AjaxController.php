<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Attributes;
use Illuminate\Support\Facades\Session;
class AjaxController extends Controller {

	public function post(Request $request){
		$attrId = (int) $request->attr_group_id;

		// query ne db per te marre attributet e ketij attr group
       	$attributes =  Attributes::where('attribute_id', $attrId)->get();

       	$html = '';
       	// $attr->type;
       	foreach ($attributes as $attr) {
       		$html .= '<div class="prop_attr"> <div class="form-group"><label for="'.$attr->label.'">'.$attr->label.'</label><input class="form-control" name="'.$attr->attr_code.'" type="'.$attr->type.'" id="'.$attr->attr_code.'"></div></div>';
       	}
		$response = array(
			'status' => 'success',
			'content' => $html 
		); 
		return response()->json($response); 
   }
}