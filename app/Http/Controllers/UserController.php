<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function home() {
        if (!session()->has('id'))
            return redirect('/login');
        
        $user = DB::table('users')->where('id', session()->get('id'))->get()->first();
        
        if ($user)
            return view('users.home')->with('user', $user);

        //dd($user);
        return 'error';
    }
}
