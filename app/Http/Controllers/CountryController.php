<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Country;
use Illuminate\Http\Request;
use App\Region;


class CountryController extends Controller
{

    public function index()
    {

        return view('admin.country.index',[
            'countries'=>Country::where('lang', $this->getLang())->paginate(6),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param  CountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Country::create($request->all());

        return redirect()->route('countries.index')->with('success', 'Cuntry Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.country.edit',['country' => Country::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {


        Country::findorFail($country->id)
        ->update($request->all());

        return redirect()->route('countries.index')->with('updated', 'Cuntry Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        Country::findorFail($country->id)
        ->delete();

        return redirect()->route('countries.index')->with('deleted', 'Cuntry Successfully Deleted');
    }


    public function MapPage(){
        return view('country.map',[
        'countries'=>Country::where('lang', $this->getLang())->get(),
        'regions'=>Region::where('lang', $this->getLang())->get(),
        ]);

    }

    private function getLang()
    {
        if (!isset($_COOKIE['language'])) {
            return 'uz';
        }
        if (isset($_COOKIE['language'])) {
            return $_COOKIE['language'];
        }
    }
}

