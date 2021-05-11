<?php

namespace App\Http\Controllers;

use App\Region;
use App\District;
use App\Tourist;
use Illuminate\Http\Request;

class TouristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('admin.tourist.index', [
            'tourists' => Tourist::where('lang',$this->getLang())->orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tourist.create', [
            'tourists' => Tourist::all(),
            'regions' => Region::all(),
            'districts' => District::all(),
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
        Tourist::create($input);

        return redirect()->route('tourists.index')->with('success', 'Hotel Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tourist  $tourist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('tourist.show',['tourist'=>Tourist::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tourist  $tourist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.tourist.edit', [
            'tourist' => Tourist::findorFail($id),
            'regions' => Region::all(),
            'districts' => District::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tourist  $tourist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tourist $tourist)
    {

        $update = Tourist::findorFail($tourist->id);

        $input = $request->all();
        if ($update['img'] == '') {
            if ($request->file('img')) {
                $image = $request->file('img');
                if ($image->isValid()) {
                    $imageName = time() . '.' . request()->img->getClientOriginalExtension();
                    $input['img'] = $imageName;
                    request()->img->move(public_path('storage'), $imageName);
                }
            }
        } else {
            $input['img'] = $update['img'];
        }

        $update->update($input);

        return redirect()->route('tourists.index')->with('updated', 'Hotel Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tourist  $tourist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tourist $tourist)
    {
        Tourist::findorFail($tourist->id)
            ->delete();

        return redirect()->route('tourists.index')->with('deleted', 'Hotel Successfully Deleted');
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
