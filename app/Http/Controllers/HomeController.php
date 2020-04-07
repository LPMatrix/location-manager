<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locations;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function add()
    {
        return view('addlocation');
    }

    public function view()
    {
        $locations = DB::table('locations')->orderBy('id', 'DESC')->get();
        return view('viewlocation')->with('locations', $locations);
    }

    public function add_location(Request $request)
    {
        $location = Locations::create($request->all());
        return redirect('add-location')->withSuccess('You have successfully added a location');
    }
}
