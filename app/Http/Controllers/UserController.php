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
        // Inisialisasi pesan kesalahan umum untuk field yang kosong
        $generalWarning = null;

        // Lakukan validasi untuk memastikan field wajib diisi, atau diberi strip (-) jika tidak ada data
        $messages = [];

        if (empty($request->nik)) {
            $messages['nik'] = 'NIK wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->nip)) {
            $messages['nip'] = 'NIP wajib diisi, atau isi dengan strip (-) jika tidak memiliki NIP.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->tempat)) {
            $messages['tempat'] = 'Tempat lahir wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->tgl_lahir)) {
            $messages['tgl_lahir'] = 'Tanggal lahir wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->jk)) {
            $messages['jk'] = 'Jenis kelamin wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->kabupaten)) {
            $messages['kabupaten'] = 'Kabupaten wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->phone)) {
            $messages['phone'] = 'Nomor telepon wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->alamat)) {
            $messages['alamat'] = 'Alamat wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->jns_fungsional)) {
            $messages['jns_fungsional'] = 'Jenis fungsional wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->jns_pengangkatan_jabfung)) {
            $messages['jns_pengangkatan_jabfung'] = 'Jenis pengangkatan jabfung wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->jenjang_jabfung)) {
            $messages['jenjang_jabfung'] = 'Jenjang jabfung wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        if (empty($request->angka_kredit_terakhir)) {
            $messages['angka_kredit_terakhir'] = 'Angka kredit terakhir wajib diisi.';
            $generalWarning = 'Harap isi data yang kosong atau masukkan strip (-) jika tidak memiliki data tersebut.';
        }

        // Validasi ukuran foto sebelum diproses (maksimum 2 MB)
        if ($request->file('photo') && $request->file('photo')->getSize() > 2097152) {
            $messages['photo'] = 'Ukuran foto maksimal adalah 2MB.';
            return redirect()->back()->withErrors($messages)->withInput();
        }

        // Simpan data yang diisi, walaupun ada beberapa yang belum lengkap
        $id = Auth::user()->id;
        $data = User::find($id);

        // Hanya update data yang diisi (gunakan null coalescing operator untuk menjaga data yang belum diisi)
        $data->email = $request->email ?? $data->email;
        $data->username = $request->username ?? $data->username;  // Nullable untuk username
        $data->nama = $request->nama ?? $data->nama;
        $data->nik = $request->nik ?? $data->nik;
        $data->nip = $request->nip ?? $data->nip;
        $data->tempat = $request->tempat ?? $data->tempat;
        $data->tgl_lahir = $request->tgl_lahir ?? $data->tgl_lahir;
        $data->jk = $request->jk ?? $data->jk;
        $data->kabupaten = $request->kabupaten ?? $data->kabupaten;
        $data->phone = $request->phone ?? $data->phone;
        $data->alamat = $request->alamat ?? $data->alamat;
        $data->jns_fungsional = $request->jns_fungsional ?? $data->jns_fungsional;
        $data->jns_pengangkatan_jabfung = $request->jns_pengangkatan_jabfung ?? $data->jns_pengangkatan_jabfung;
        $data->jenjang_jabfung = $request->jenjang_jabfung ?? $data->jenjang_jabfung;
        $data->angka_kredit_terakhir = $request->angka_kredit_terakhir ?? $data->angka_kredit_terakhir;

        // Proses file foto jika ada
        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data->photo = $filename;
        }

        $data->save();

        // Jika ada field yang kosong, tampilkan notifikasi di bagian atas
        if ($generalWarning) {
            $messages['general'] = $generalWarning;
            return redirect()->back()->withErrors($messages)->withInput();
        }

        // Jika semua field yang diperlukan sudah diisi, tampilkan notifikasi sukses
        $notification = array(
            'message' => 'Profil berhasil diperbarui.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }









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
