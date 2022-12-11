<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    # Index Data
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.kelas', compact('kelas'));
    }
    # Form Page
    public function tambahkelas()
    {
        return view('kelas.tambahkelas');
    }
    # Form Action
    public function insertkelas(Request $request)
    {
        Kelas::insert([
            'kelas' => $request->kelas
        ]);
        return redirect()->route('kelas')->with('success', 'Data Berhasil Di Tambahkan');
    }
    # Delete 
    public function deletekelas($id)
    {
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->route('kelas')->with('success', 'Data Berhasil Di Hapus');
    }
    # Edit Page
    public function editkelas($id)
    {
        $data = Kelas::find($id);
        return view('kelas.editkelas', compact('data'));
    }
    # Edit Action
    public function updatekelas(Request $request, $id)
    {
        $data = kelas::find($id);
        $data->update([
            'kelas' => $request->kelas
        ]);
        return redirect()->route('kelas')->with('success', 'Data Berhasil Di Edit');
    }
    # Info 
    public function infokelas($id)
    {
        $kelas = Kelas::find($id);
        $siswa = Siswa::where('id_kelas', $id)->get();
        return view('kelas.infokelas', compact('kelas','siswa'));
    }
}
