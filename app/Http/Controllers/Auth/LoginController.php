<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    protected $redirectedTo = RouteServiceProvider::HOME;

    public function login(Request $request)
    {
// Retrieve all input data from the request
$input = $request->all();

// Validate the user input for email and password fields
$this->validate($request, [
    'email' => 'required|email',
    'password' => 'required',
]);

// Attempt to authenticate the user with the provided email and password
if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
    // Check the role of the authenticated user
    if (auth()->user()->role == 'admin') {
        // Redirect to the admin home page if the user is an admin
        return redirect()->route('admin.dashboard');
    } else {
        // Redirect to the regular user home page for non-admin users
        return redirect()->route('user.dashboard');
    }
} 
else {
    // Redirect back to the login page with an error message if authentication fails
    return redirect()->route('login')->with('error', 'Email address and password are wrong.');
}
}
}
