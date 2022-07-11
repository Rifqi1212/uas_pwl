<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function index()
    {
        $settings = DB::table('settings')->get();
        return view('setting.index', compact('settings'));
    }

    public function tambah()
    {
        return view('setting.create');
    }

    public function simpan(Request $request)
    {
        $data = $request->validate([
            'nama_kategori' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ]);

        $tambah = DB::table('settings')->insert($data);

        if($tambah){
            $request->session()->flash('success', 'sukses menambah data');
            return redirect('/setting');
        }
        
    }

    public function hapus($set_id)
    {
        DB::table('settings')->where('id', $set_id)->delete();
        return redirect('/setting');
    }
}