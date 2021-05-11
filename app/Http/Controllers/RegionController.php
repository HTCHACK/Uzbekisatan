<?php

namespace App\Http\Controllers;

use App\Country;
use App\Region;
use App\District;
use Illuminate\Http\Request;
use App\Hotel;
use App\Http\Requests\RegionRequest;

class RegionController extends Controller
{

    public function index()
    {

        return view('admin.region.index', [
            'regions'=>Region::where('lang', $this->getLang())->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.region.create', ['countries' => Country::where('lang', $this->getLang())->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        if ($request->file('img')) {
            $image = $request->file('img');
            if ($image->isValid()) {
                $imageName = time() . '.' . request()->img->getClientOriginalExtension();
                $input['img'] = $imageName;
                request()->img->move(public_path('storage'), $imageName);
            }
        }

        Region::create($input);

        return redirect()->route('regions.index')->with('success', 'Region Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('region.show', [
            'region' => Region::findorFail($id),
            'countries' => Country::all(),
            'districts' => District::where('region_id', $id)->orderBy('created_at', 'DESC')->paginate(6),
            'hotels' => Hotel::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.region.edit', ['region' => Region::findorFail($id), 'countries' => Country::all(),]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {



        $input = $request->all();

        if ($request->file('img')) {
            $image = $request->file('img');
            if ($image->isValid()) {
                $imageName = time() . '.' . request()->img->getClientOriginalExtension();
                $input['img'] = $imageName;
                request()->img->move(public_path('storage'), $imageName);
            }
        }

        Region::findorFail($region->id)->update($input);

        return redirect()->route('regions.index')->with('updated', 'Region Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        Region::findorFail($region->id)
            ->delete();

        return redirect()->route('regions.index')->with('deleted', 'Region Successfully Deleted');
    }

    public function RegionPage()
    {
        return view('region.index', [
            'regions' => Region::where('lang', $this->getLang())->paginate(6),
            'districts' => District::where('lang', $this->getLang())->where('region_id')->get(),
        ]);
    }

    public function map($id)
    {

        return view('region.map', [
            'region' => Region::findorFail($id),
            'countries' => Country::all(),
            'districts' => District::where('lang', $this->getLang())->where('region_id', $id)->orderBy('created_at', 'DESC')->get(),
        ]);
    }

    private function getLang()
    {
        if (!isset($_COOKIE['language'])) {
            return 'en';
        }
        if (isset($_COOKIE['language'])) {
            return $_COOKIE['language'];
        }
    }
}
