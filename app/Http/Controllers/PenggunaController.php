<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = DB::table('users')->get();
        return view('back.page.index', compact('pengguna'));
    }
    public function tambah()
    {
    return view('back.page.tambah');
    }
    public function simpan(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data['password'] = bcrypt($data['password']);
        $tambah = DB::table('users')->insert($data);
    
        if ($tambah) {
        return redirect('/pengguna');
        }
    }
    public function ubah($user_id)
    {
    $pengguna = DB::table('users')->find($user_id);
    return view('back.page.edit', compact('pengguna'));
    }
    public function ubahsimpan(Request $request, $user_id)
{
// untuk validasi data kiriman
$data = $request->validate([
'name' => 'required',
'email' => 'required|email',
]);
// cek jika password dilakukan pengubahan
if ($request['password']) {
$data['password'] = bcrypt($request['password']);
DB::table('users')->where('id', $user_id)->update($data);
return redirect('/pengguna');
} else {
DB::table('users')->where('id', $user_id)->update($data);
return redirect('/pengguna');
}
}
    public function hapus($user_id)
    {
    DB::table('users')->where('id', $user_id)->delete();
    return redirect('/pengguna');
    }
 }