<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fuel;

class FuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuels = Fuel::orderBy('name', 'asc')->paginate(3);

        return view('fuels', compact('fuels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fuels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create new fuel
        $fuel = new Fuel;
        $fuel->name = $request->input('name');
        $fuel->save();
        $url = $request->input('url');
        
        return redirect($url)->withSuccess('Fuel created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fuel = Fuel::find($id);
        return view('fuels.show', compact('fuel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fuel = Fuel::find($id);
        return view('fuels.edit', compact('fuel'));
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
        //Update fuel
        $fuel = Fuel::find($id);
        $fuel->name = $request->input('name');
        $fuel->save();
        $url = $request->input('url');
        return redirect($url)->withSuccess('Fuel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fuel = Fuel::find($id);
        $fuel->delete();
        return redirect('fuels')->withSuccess('Fuel deleted successfully');
    }
}
