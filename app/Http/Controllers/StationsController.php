<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;
use App\Route;
use App\Fuels;

class StationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::orderBy('name', 'asc')->paginate(3);
        return view('stations', compact('stations'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $station = Station::create([
                'name'      => $request['name'],     
            ]);
        
        $station_route = Route::create([
                
                'route_id'       =>  $route->id
            ]);
        
            
        return redirect()->route('get_all_stations')->withSuccess('New Station Info Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $station           = Station::find($id);
        
        return view('stations.show', compact('station'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $station = Station::findOrFail($id);
       return view('stations.edit', compact('station'));
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
        $station = Station::findOrFail($id);
        $station->name      = $request['name'];            
                
        $station->save();

        
        Station::find($id)->route()->update(array(
           // 
            
        ));
                       

        return redirect()->route('get_all_stations')->withSuccess('Station update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $station = Station::find($id);
        $station->delete();
        return redirect('stations')->withSuccess('Route deleted successfully');
    }
}
