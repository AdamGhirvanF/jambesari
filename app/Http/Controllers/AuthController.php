<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        /**
         * Display login
         */
        public function indexLogin()
        {
            return view('admin.login');
        }
    
        /**
         * Checking credentials
         */
        public function checkLogin(Request $request)
        {
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                return redirect('admin/warga');
            } else {            
                return redirect()->back();
            }    
        }
    
        public function logout(){
            Auth::logout();
            return redirect('/login');
        }
}
