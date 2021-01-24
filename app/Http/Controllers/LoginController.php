<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function login() {
        return view('users.login');
    }

    public function login_post() {
        if (empty($_POST['name']) || empty($_POST['password']))
            return redirect('/login')->with('error', 'Fill the things');

        $name = $_POST['name'];
        $password = $_POST['password'];

        $user = DB::table('users')->select('id')->where('name', $name)->where('password', $password)->get()->first();

        if ($user == NULL)
            return redirect('/login')->with('error', 'Invalid user');

        session()->put('id', $user->id);
        session()->put('name', $name);
        return redirect('/')->with('success', 'You logged in!');
    }

    public function register() {
        return view('users.register');
    }

    public function register_post() {
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password_2']))
            return redirect('/register')->with('error', 'Fill the things');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_2 = $_POST['password_2'];

        if ($password != $password_2)
            return redirect('/register')->with('error', 'Passwords dont match');

        $user = DB::table('users')->where('name', $name)->orWhere('email', $email)->get()->first();
        
        if ($user != NULL) {
            if ($user->name != NULL)
                return redirect('/register')->with('error', 'Username already taken');

            if ($user->email != NULL)
                return redirect('/register')->with('error', 'Email already in use');
        }

        $id = DB::table('users')->insertGetId([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
        
        session()->put('id', $id);
        session()->put('name', $name);
        return redirect('/')->with('success', 'You registered!');
    }

    public function logout() {
        session()->forget(['id', 'name']);
        session()->flush();
        
        return redirect('/')->with('success', 'You have logged out');
    }
}
