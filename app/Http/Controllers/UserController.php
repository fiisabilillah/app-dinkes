<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserDashboard()
    {
        return view('user.index');
    }

    public function UserLogin()
    {
        return view('frontend.login');
    } // End Method
    public function UserRegister()
    {
        return view('auth.register');
    } // End Method

    public function UserProfile()
    {

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('user.user_profile_view', compact('profileData'));
    } // End Method

    public function UserProfileStore(Request $request)
    {

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->email = $request->email;
        $data->username = $request->username;
        $data->nama = $request->nama;
        $data->nik = $request->nik;
        $data->nip = $request->nip;
        $data->tempat = $request->tempat;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->jk = $request->jk;
        $data->kabupaten = $request->kabupaten;
        $data->phone = $request->phone;
        $data->alamat = $request->alamat;
        $data->jns_fungsional = $request->jns_fungsional;
        $data->jns_pengangkatan_jabfung = $request->jns_pengangkatan_jabfung;
        $data->angka_kredit_terakhir = $request->angka_kredit_terakhir;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method

    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'info'
        );

        return redirect('/login')->with($notification);
    } // End Method

    public function UserChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('user.user_change_password', compact('profileData'));
    } // End Method

    public function UserPasswordUpdate(Request $request)
    {

        /// Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        /// Update The new Password
        User::whereId(auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    } // End Method
}
