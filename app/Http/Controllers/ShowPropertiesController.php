<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Attributes_group;
use Illuminate\Support\Facades\Session;
use App\Property_images;
use App\Propertyattributes;
// deprecated
use App\Attributes;
use App\Property;

class ShowPropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $properties = Property::all();
        $row = [];
        $data = []; 
         foreach ($properties as $property) {
            $attrs = $property->property_attributes;
            $groupName = Attributes_group::where('id', $attrs[0]['attribute_group_id'])->get();
            $attr_names = Attributes::where('attribute_id', $groupName[0]['id'])->get();

            $row['id'] = $property->id;
            $row['property_name'] = $property->property_name;
            $row['property_description'] = $property->property_description;
            $row['status'] = $property->status;
            $row['type'] = $groupName[0]['name'];
            $row['price'] = $property->price;
            $row['location'] = $property->location;
            $row['image'] = $property->photos[0]['image'];
            $data[] = $row; 
            $row = [];
         }
        return view('index', compact('data', 'attr_names'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    } 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $property = Property::findOrFail($id);
        $prop_attr = $property->property_attributes;
        $attr_set = Attributes_group::where('id',  $prop_attr[0]['attribute_group_id'])->get();
        $attrs = Attributes::where('attribute_id',$prop_attr[0]['attribute_group_id'])->get();
        $photos = $property->photos;
        return view('property_details', compact('property', 'attr_set', 'photos', 'attrs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
