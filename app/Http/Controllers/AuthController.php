<?php

namespace App\Http\Controllers;

use App\Models\Regtable;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class AuthController extends Controller
{
    public function regform()
    {

        return view('regform');
    }
   
    public function savedb(Request $request)
    {
        Regtable::create($request->only('name','email','password'));
    }


    public function loginform()
    {
        return view('loginform');
    }

public function loginhandle(Request $request)
{
    $user = Regtable::where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();

    if ($user) {
        session()->put('user', $user);
        return redirect('/dashboard');
    } else {
        return redirect('/login')->with('error', 'Invalid credentials');
    }
}



   public function dashboard()
{
    if (session()->has('user')) {
        return view('dashboard');
    } else {
        return redirect('/login')->with('error', 'Please login first');
    }
}

}
