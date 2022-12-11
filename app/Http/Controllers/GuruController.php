<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    # Index Data
    public function index()
    {
        $guru = Guru::all();
        return view('guru.guru', compact('guru'));
    }
    # Form Page
    public function tambahguru()
    {
        return view('guru.tambahguru');
    }
    # Form Action
    public function insertguru(Request $request)
    {
        Guru::insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'notelp' => $request->notelp
        ]);
        return redirect()->route('guru')->with('success', 'Data Berhasil Di Tambahkan');
    }
    # Delete 
    public function deleteguru($id)
    {
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('guru')->with('success', 'Data Berhasil Di Hapus');
    }
    # Edit Page
    public function editguru($id)
    {
        $data = Guru::find($id);
        return view('guru.editguru', compact('data'));
    }
    # Edit Action
    public function updateguru(Request $request, $id)
    {
        $data = Guru::find($id);
        $data->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'notelp' => $request->notelp
        ]);
        return redirect()->route('guru')->with('success', 'Data Berhasil Di Edit');
    }
    # Info 
    public function infoguru($id)
    {
        $guru = Guru::find($id);
        $siswa = Siswa::where('id_guru', $id)->get();
        return view('guru.infoguru', compact('guru','siswa'));
    }
}
