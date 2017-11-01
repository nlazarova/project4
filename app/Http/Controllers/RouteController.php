<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Routetype;

class RouteController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $routes = Route::orderBy('name', 'asc')->paginate(3);

        return view('routes', compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $routetypes = Routetype::pluck('routetype', 'id')->toArray();
        return view('routes.create', compact('routetypes', $routetypes));

        return view('routes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //Create new route
        $route = new Route;
        $route->name = $request->input('name');
        $route->length = $request->input('length');        
        $route->routetype_id = $request->input('routetype_id');     
        $route->save();
        $url = $request->input('url');

        return redirect($url)->withSuccess('Route created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $route = Route::find($id);
        return view('routes.show', compact('route'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
       // $route = Route::findOrFail($id);
        $route = Route::find($id);
//        dd($route);
        $routetypes = Routetype::pluck('routetype', 'id')->toArray();
//dd($routetypes);
        return view('routes.edit', compact('routetypes', $routetypes));
        return view('routes.edit', compact('route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //Update route
        
        $route = Route::find($id);
        //dd($route);
        $route->name = $request->input('name');
        $route->length = $request->input('length');
        $route->routetype_id = $request->input('routetype_id');
        $route->save();
        $url = $request->input('url');
        return redirect($url)->withSuccess('Route updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $route = Route::find($id);
        $route->delete();
        return redirect('routes')->withSuccess('Route deleted successfully');
    }

}
