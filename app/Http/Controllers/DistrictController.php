<?php

namespace App\Http\Controllers;

use App\Region;
use App\Hotel;
use App\Tourist;
use App\District;
use Illuminate\Http\Request;
use App\Http\Requests\DistrictRequest;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.district.index', [
            'districts'=>District::where('lang', $this->getLang())->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.district.create', [
            'regions' => Region::where('lang', $this->getLang())->get(),
        ]);
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

        District::create($input);

        return redirect()->route('districts.index')->with('success', 'District Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('district.show', [
            'district' => District::findorFail($id),
            'hotels' => Hotel::where('district_id', $id)->orderBy('created_at', 'DESC')->get(),
            'tourists' => Tourist::where('district_id', $id)->orderBy('created_at', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(
            'admin.district.edit',
            [
                'district' => District::findorFail($id),
                'regions' => Region::all(),
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
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
        District::findorFail($district->id)->update($input);


        return redirect()->route('districts.index')->with('updated', 'District Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        District::findorFail($district->id)->delete();
        return redirect()->route('districts.index')->with('deleted', 'District Successfully Deleted');
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
