<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locations;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Auth;

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
        $number = DB::table('locations')->where('user', Auth::user()->id)->count();
        return view('home')->with('number', $number);
    }

    public function add()
    {
        return view('addlocation');
    }

    public function view()
    {
        $locations = DB::table('locations')->where('user', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('viewlocation')->with('locations', $locations);
    }

    public function add_location(Request $request)
    {
        // dd($request->user);
        $location = Locations::create($request->all());
        return redirect('add-location')->withSuccess('You have successfully added a location');
    }

    public function update(Request $request, $id)
    {
        //
        $locationUpdate  = Locations::findOrFail($id);

        $input = $request->all();
        $locationUpdate->fill($input)->save();

        return redirect()->back()->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        //
        Locations::find($id)->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }

    public function profile(Request $request, $id)
    {
        //
        $profileUpdate  = User::findOrFail($id);

        $input = $request->all();
        $profileUpdate->fill($input)->save();

        return redirect()->back()->with('success', 'Updated successfully');
    }

     public function password(Request $request, $id)
    {
        $oldPassword = auth()->user()->password;
        $password = trim($request->get('password'));
        $new_password = trim($request->get('new_password'));

        if (Hash::check($password, $oldPassword)) {
            DB::table('users')->where('id', $id)->update(['password' =>  Hash::make($new_password)]);
             return redirect()->back()->with('success', 'Updated successfully');
        }else{
             return redirect()->back()->with('error', 'Passwords do not match');
        }

    }
}
