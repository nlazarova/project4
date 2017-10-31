<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routetype;

class RoutetypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routetypes = Routetype::orderBy('routetype', 'asc')->paginate(3);

        return view('routetypes', compact('routetypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('routetypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create new routetype
        $routetype = new Routetype;
        $routetype->routetype = $request->input('routetype');
        $routetype->maxspeed = $request->input('maxspeed');
        $routetype->save();
        $url = $request->input('url');
        
        return redirect($url)->withSuccess('Routetype created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $routetype = Routetype::find($id);
        return view('routetypes.show', compact('routetype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routetype = Routetype::find($id);
        return view('routetypes.edit', compact('routetype'));
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
        //Update routetype
        $routetype = Routetype::find($id);
        $routetype->routetype = $request->input('routetype');
        $routetype->maxspeed = $request->input('maxspeed');
        $routetype->save();
        $url = $request->input('url');
        return redirect($url)->withSuccess('Routetype updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $routetype = Routetype::find($id);
        $routetype->delete();
        return redirect('routetypes')->withSuccess('Routetype deleted successfully');
    }
}
