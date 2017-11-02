<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityRoute;
use App\City;
use App\Route;

class CityRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $connections = CityRoute::orderBy('city_id_from', 'asc')->paginate(3);CityRoute::all();
       $connections = CityRoute::orderBy('route_id', 'asc')->paginate(5);
       //return CityRoute::all();
       // dd($connections);
//        return view('citiesroutes', compact('citiesroutes'));
        //return view('citiesroutes')->with('connections', $connections);
       return view('citiesroutes', compact('connections'));
//        return view('citiesroutes', compact(['city_id_from', 'city_id_to', 'route_id']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::pluck('name', 'id')->toArray();
        $routes = Route::pluck('name', 'id')->toArray();
        return view('citiesroutes.create', compact('cities', 'routes', $cities, $routes));
        
        return view('citiesroutes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Create new connection
        $connection = new CityRoute;
        $connection->city_id_from = $request->input('city_id_from');
        $connection->city_id_to = $request->input('city_id_to');
        $connection->route_id = $request->input('route_id');
        $connection->save();
        $url = $request->input('url');
        
        return redirect($url)->withSuccess('Connection created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($route_id)
    {
         $connection = CityRoute::find($route_id);
//         dd();
         $city = City::all();
         $city_from = City::find($city_id_from);
//         dd($route_id);
         $city_to = City::find($city_id_to);
       // $route = Route::pluck('name', 'id')->toArray();
         //dd($connection);
        //return view('citiesroutes.show', compact('connection'));
         return view('citiesroutes.show')->with(compact('connection', 'city_from', 'city_to'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $connection = CityRoute::find($route_id);
$cities = City::pluck('name', 'id')->toArray();
        $routes = Route::pluck('name', 'id')->toArray();
        return view('citiesroutes.edit', compact('cities', 'routes', $cities, $routes));
        return view('citiesroutes.edit', compact('citiesroute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $route_id)
    {
        
//Update connection
        $connection = CityRoute::find($route_id);
        $connection->city_id_from = $request->input('city_id_from');
        $connection->city_id_to = $request->input('city_id_to');
        $connection->route_id = $request->input('route_id');
        $connection->save();
        $url = $request->input('url');
        return redirect($url)->withSuccess('Connection updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($route_id)
    {
         $connection = CityRoute::find($route_id);
        $connection->delete();
        return redirect('citiesroutes')->withSuccess('Connection deleted successfully');
    }
}
