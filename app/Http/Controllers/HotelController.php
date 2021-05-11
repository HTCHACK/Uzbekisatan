<?php

namespace App\Http\Controllers;

use App\District;
use App\Region;
use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('admin.hotel.index', [
            'hotels'=>Hotel::where('lang', $this->getLang())->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotel.create', [
            'hotels' => Hotel::all(),
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
    public function store(HotelRequest $request)
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
        Hotel::create($input);

        return redirect()->route('hotels.index')->with('success', 'Hotel Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('hotel.show', ['hotel' => Hotel::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.hotel.edit', [
            'hotel' => Hotel::findorFail($id),
            'regions' => Region::all(),
            'districts' => District::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(HotelRequest $request, Hotel $hotel)
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

        Hotel::findorFail($hotel->id)->update($input);

        return redirect()->route('hotels.index')->with('updated', 'Hotel Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        Hotel::findorFail($hotel->id)->delete();
        return redirect()->route('hotels.index')->with('deleted', 'Hotel Successfully Deleted');
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
