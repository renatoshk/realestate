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
use App\Http\Requests\AddRequest;
class AddPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $properties = Property::where('user_id', $user->id)->get();
        $row = [];
        $data = [];

        foreach ($properties as $property) {
            $attrs = $property->property_attributes;
            $groupName = Attributes_group::where('id', $attrs[0]['attribute_group_id'])->get();

            $row['id'] = $property->id;
            $row['property_name'] = $property->property_name;
            $row['property_description'] = $property->property_description;
            $row['status'] = $property->status;
            $row['type'] = $groupName[0]['name'];

            $data[] = $row;
            $row = [];
        }

        if($user){
            return view('show', compact('data'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        $attributes_set = Attributes_group::pluck('name', 'id')->all();
        if($user){
             return view('new', compact('attributes_set'));
        }
         else {
              Session::flash('flash_message', 'You need to register/login to add Property');
              return redirect('/register'); 
         } 
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    { 
        //
        $user = Auth::user();
        $data = $request->all();

        // insert into properties table
        $property = $user->properties()->create([
            'status' => $data['status'],
            'property_type' => $data['property_type'],
            'property_name' => $data['property_name'],
            'property_description' => $data['property_description']
        ]);

        // save image data
        if($request->hasFile('photos')){
            $files = $request->file('photos');
            foreach($files as $file){
                $filename = time(). $file->getClientOriginalName();
                $file->move('photos', $filename);
                Property_images::create([
                    'property_id' => $property->id,
                    'image' => $filename
                ]);  
            }
        }

        unset($data['_token']);
        unset($data['status']);
        unset($data['property_type']);
        unset($data['property_name']);
        unset($data['property_description']);
        unset($data['photos']);

        $i = 0; $attrId;
        foreach ($data as $key => $value) {
            if ($i % 2 == 0) {
                $attrId = $value;
            }else{
                Propertyattributes::create([
                    'property_id'           =>  $property->id,
                    'attribute_group_id'    =>  $request->property_type,
                    'attribute_id'          =>  $attrId,
                    'attribute_value'       =>  $value
                ]);
            }
            $i++;
        }

        Session::flash('flash_message', 'Your Property has been created!');
        return redirect()->back();
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
