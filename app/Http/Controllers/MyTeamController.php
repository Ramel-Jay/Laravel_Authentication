<?php

namespace App\Http\Controllers;
use App\Models\Roles;
use App\Models\Myteam;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MyTeamController extends Controller
{
    public function index(){
        $roles = Roles::all();
        $myteam = Myteam::all();
        $users = User::all();
        //dd($roles);
        return view('myteam', compact('roles', 'myteam', 'users'));
    }

    public function store(Request $request){
        // $role = Roles::findOrFail($request->role_id);
        // $role = User::findOrFail($request->user_id);
        Myteam::create([
            'role_id'               => $request->role_id,
            'user_id'               => $request->user_id,
            'first_name'            => $request->first_name,
            'last_name'             => $request->last_name,
            'ign'                   => $request->ign,
            'igid'                  => $request->igid,
            'game'                  => $request->game,
        ]);

        return redirect('myteam')->with('message', 'na send na boss');
    }
}
