<?php

namespace App\Http\Controllers;
use App\Attributes_group;
use Illuminate\Http\Request;
use App\Http\Requests\AttributeSetRequest;
use Illuminate\Support\Facades\Session;
class AdminAttributeSetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $attribute_sets = Attributes_group::all();
        return view('admin.attribute_set.index', compact('attribute_sets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $attribute_sets = Attributes_group::all();
        return view('admin.attribute_set.create', compact('attribute_sets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeSetRequest $request)
    {
        //
        Attributes_group::create($request->all());     
        Session::flash('flash_message', 'The Attribute Set has been created!');
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
        $attribute_set = Attributes_group::findOrFail($id);
        return view('admin.attribute_set.edit', compact('attribute_set'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AttributeSetRequest $request, $id)
    {
        //
        $editAttributeSet = Attributes_group::findOrFail($id);
        $editAttributeSet->update($request->all());
        Session::flash('flash_message', 'The Attribute Set has been updated!');
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
        Attributes_group::findOrFail($id)->delete();
        Session::flash('flash_message', 'The Attribute Set has been deleted!');
        return redirect()->back();
    }
}
