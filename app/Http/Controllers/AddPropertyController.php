<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Attributes_group;
use Illuminate\Support\Facades\Session;
use App\Property_images;
use App\Propertyattributes;
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
        if($user){
          return view('show', compact('properties'));
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
       
        if($request->hasFile('photos')){
           $files = $request->file('photos');
          $property = $user->properties()->create($request->all());
         foreach($files as $file){
                 $filename = time(). $file->getClientOriginalName();
                 $file->move('photos', $filename);
                  Property_images::create([
                          'property_id' => $property->id,
                          'image' => $filename
                 ]);  
        }
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
