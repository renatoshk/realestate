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
use App\Http\Requests\EditPropertyRequest;

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
        if($user){
        $properties = Property::where('user_id', $user->id)->get();
        $row = [];
        $data = []; 
        foreach ($properties as $property) {
            $attrs = $property->property_attributes;
            $groupName = Attributes_group::where('id', $attrs[0]['attribute_group_id'])->get();
            $row['id'] = $property->id;
            $row['property_name'] = $property->property_name;
            $row['slug'] = $property->slug;
            $row['property_description'] = $property->property_description;
            $row['status'] = $property->status;
            $row['type'] = $groupName[0]['name'];
            $row['price'] = $property->price;
            $row['location'] = $property->location;
            $data[] = $row; 
            $row = [];
        }  
            //shfaqja e attributeve perkatese ne frontend 
            return view('show', compact('data'));
        }
        else {
            return redirect('/');
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
       if($user){ 

        // insert into properties table
        $property = $user->properties()->create([
            'status' => $data['status'],
            'property_type' => $data['property_type'],
            'property_name' => $data['property_name'],
            'property_description' => $data['property_description'],
            'price' => $data['price'],
            'location' => $data['location']
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
        unset($data['price']);
        unset($data['location']);
 
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
        $user = Auth::user();
       if($user){
 
        if($user->role_id == 1){
            $property = Property::findOrFail($id);
            $attrs_prop = $property->property_attributes;
            $attributes_set = Attributes_group::where('id', $attrs_prop[0]['attribute_group_id'])->first()->name;
            $attrs = Attributes::where('attribute_id',$attrs_prop[0]['attribute_group_id'])->get();
           
            $photos = $property->photos;
        return view('editproperty', compact('property', 'attributes_set', 'attrs', 'photos'));
        }
        else {
            $property = Property::where('user_id', $user->id)->findOrFail($id);
            $attrs_prop = $property->property_attributes;
            $attributes_set = Attributes_group::where('id', $attrs_prop[0]['attribute_group_id'])->first()->name;
            $attrs = Attributes::where('attribute_id',$attrs_prop[0]['attribute_group_id'])->get();
           
            $photos = $property->photos;
            return view('editproperty', compact('property', 'attributes_set', 'attrs', 'photos'));  
        }
       } 
       else {
        return redirect()->back();
       }
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPropertyRequest $request, $id)
    {
        //
        $user = Auth::user();
        $data = $request->all();
        if($user){
            //edit into properties table
        $property = $user->properties()->whereId($id)->first()->update($data);
        unset($data['_token']);
        unset($data['status']);
        unset($data['property_name']);
        unset($data['property_description']);
        unset($data['photos']);
        unset($data['files']);
        unset($data['_method']);
        unset($data['price']);
        unset($data['location']);

         $i = 0; $attrId;
        foreach ($data as $key=>$value) {
             if ($i % 2 == 0) {
                $attrId = $value;
            }else{

                 Propertyattributes::where('property_id', $id)->where('attribute_id', $attrId)->update(['attribute_value' => $value]);
            }
             $i++;
        }

        Session::flash('flash_message', 'Your Property has been updated!');
        return redirect()->back();
        }

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
        $prop = Property::findOrFail($id);
        foreach ($prop->photos as $photo) {
         
        unlink(public_path() . '/photos/' . $photo->image);
        }
        $prop->delete();
        Session::flash('flash_message', 'The Property has been deleted!');
        return redirect()->back();
    }
} 
