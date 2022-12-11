<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Siswa;
use Database\Seeders\JurusanSeeder;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    # Index Data
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.jurusan', compact('jurusan'));
    }
    # Form Page
    public function tambahjurusan()
    {
        return view('jurusan.tambahjurusan');
    }
    # Form Action
    public function insertjurusan(Request $request)
    {
        Jurusan::insert([
            'jurusan' => $request->jurusan
        ]);
        return redirect()->route('jurusan')->with('success', 'Data Berhasil Di Tambahkan');
    }
    # Delete 
    public function deletejurusan($id)
    {
        $data = Jurusan::find($id);
        $data->delete();
        return redirect()->route('jurusan')->with('success', 'Data Berhasil Di Hapus');
    }
    # Edit Page
    public function editjurusan($id)
    {
        $data = Jurusan::find($id);
        return view('jurusan.editjurusan', compact('data'));
    }
    # Edit Action
    public function updatejurusan(Request $request, $id)
    {
        $data = Jurusan::find($id);
        $data->update([
            'jurusan' => $request->jurusan
        ]);
        return redirect()->route('jurusan')->with('success', 'Data Berhasil Di Edit');
    }
    # Info 
    public function infojurusan($id)
    {
        $jurusan = Jurusan::find($id);
        $siswa = Siswa::where('id_jurusan', $id)->get();
        return view('jurusan.infojurusan', compact('jurusan','siswa'));
    }
}
