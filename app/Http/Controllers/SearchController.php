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
use App\Http\Requests\SearchRequest;
use Spatie\QueryBuilder\QueryBuilder;
use App\Search;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SearchRequest $request)
    { 
        //
        $data = $request->all();

        if($data){
            $prices = explode(' - ', $data['price-range']);
            $conditions = [];

            foreach ($data as $key => $value) {
                if (!is_null($value)) {
                    if ($key == 'price-range') {
                        $conditions[] = ['price','>', (float) $prices[0]];
                        $conditions[] = ['price','<', (float) $prices[1]];
                    }else{
                        $conditions[] = [$key,'=', $value];
                    }
                }
            }
        $result = Property::where($conditions)->get();
        return view('property', compact('result'));
        }
        else {
        return redirect()->back();

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
    public function store(SearchRequest $request)
    {
        //
        // $data = $request->all();
        // $location = $data['location'];
        // $prps = Property::query()->where('location', 'LIKE', "%$location%")->get();
        // dd($prps);
        // $prps = QueryBuilder::for(Property::class)->allowedFilters(['location'])->get();
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
