<?php

namespace App\Http\Controllers;
use App\Models\Roles;
use App\Models\Myteam;

use Illuminate\Http\Request;

class MyTeamController extends Controller
{
    public function index(){
        $roles = Roles::all();
        $myteam = Myteam::all();
        //dd($roles);
        return view('myteam', compact('roles', 'myteam'));
    }

    public function store(Request $request){
        $role = Roles::findOrFail($request->role_id);
        $role->myteam()->create([
            'first_name'            => $request->first_name,
            'last_name'             => $request->last_name,
            'ign'                   => $request->ign,
            'igid'                  => $request->igid,
            'game'                  => $request->game,
        ]);

        return redirect('myteam')->with('message', 'na send na boss');
    }
}
