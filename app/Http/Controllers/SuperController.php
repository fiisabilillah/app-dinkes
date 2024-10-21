<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperController extends Controller
{
    public function SuperDashboard()
    {
        return view('super.index');
    }

    public function SuperLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'info'
        );

        return redirect('/super/login')->with($notification);
    }

    public function SuperLogin()
    {
        return view('super.super_login');
    }
}
