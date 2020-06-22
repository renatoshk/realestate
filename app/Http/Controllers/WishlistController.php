<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\WishRequest;
use App\Wishlist;
use Illuminate\Support\Facades\Session;
use App\Property;
class WishlistController extends Controller
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
          if($user->role_id == 1){
             $clients = Wishlist::all();
             return view('admin.clients.index', compact('clients'));
          }
          else {
            return redirect()->back();
          }  
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WishRequest $request)
    {
        //
        $data = $request->all();
       if($data){
            Wishlist::create([
              'property_id'=>$data['property_id'],
              'name'=>$data['name'],
              'email'=>$data['email'],
              'phone_number'=>$data['phone_number'],
              'message'=>$data['message']

            ]);
           Session::flash('flash_message', 'Your Message has been sent successfully!');
           return redirect()->back(); 
       }
       else {

          Session::flash('flash_message', 'Your Message has not been sent successfully!');
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
        $user = Auth::user();
        if($user){
            if($user->role_id == 1){
                Wishlist::findOrFail($id)->delete();
                Session::flash('flash_message', 'Message has been deleted!');
                return redirect()->back();
            }
            else {
                return redirect()->back();
            }
        }
        else {
            return redirect('/');
        }
    }
}
