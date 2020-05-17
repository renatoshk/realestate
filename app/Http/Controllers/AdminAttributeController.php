<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attributes;
use App\Attributes_group;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AttributeRequest;
class AdminAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $attributes = Attributes::all();
        return view('admin.attribute.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $attributes = Attributes::all();
        $attribute_groups = Attributes_group::pluck('name', 'id')->all();
        return view('admin.attribute.create', compact('attributes', 'attribute_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeRequest $request)
    {
        // 
        $attribute_create = Attributes::create($request->all());
        Session::flash('flash_message', 'The Attribute  has been created!');
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
        $attribute = Attributes::findOrFail($id);
        $attribute_groups = Attributes_group::pluck('name', 'id')->all();
        return view('admin.attribute.edit', compact('attribute', 'attribute_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AttributeRequest $request, $id)
    {
        //
        $input = $request->all();
        $editAttribute = Attributes::findOrFail($id);
        $editAttribute->update($input);
        Session::flash('flash_message', 'The Attribute  has been updated!');
        return redirect()->back();  
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
        Attributes::findOrFail($id)->delete();
        Session::flash('flash_message', 'The Attribute  has been deleted!');
        return redirect()->back();
    }
}
