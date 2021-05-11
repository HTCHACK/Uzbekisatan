<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.index',['galleries'=>Gallery::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create',['galleries'=>Gallery::all()]);
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

        if ($request->file('img'))
            $image = $request->file('img');
            if ($image->isValid()) {
                $imageName = time() . '.' . request()->img->getClientOriginalExtension();
                $input['img'] = $imageName;
                request()->img->move(public_path('storage'), $imageName);
            }

        Gallery::create($input);

        return redirect()->route('galleries.index')->with('success', 'Gallery Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.gallery.edit',['gallery'=>Gallery::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {


        $input = $request->all();

        if ($request->file('img'))
            $image = $request->file('img');
            if ($image->isValid()) {
                $imageName = time() . '.' . request()->img->getClientOriginalExtension();
                $input['img'] = $imageName;
                request()->img->move(public_path('storage'), $imageName);
            }


        Gallery::findorFail($gallery->id)->update($input);

        return redirect()->route('galleries.index')->with('updated', 'Gallery Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        Gallery::findorFail($gallery->id)->delete();
        return back();
    }

    public function GalleryPage(){
        return view('gallery.index',[
            'galleries'=>Gallery::paginate(6)
        ]);
    }
}
