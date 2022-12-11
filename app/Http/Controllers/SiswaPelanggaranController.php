<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use App\Models\Siswa;
use App\Models\SiswaPelanggaran;
use Illuminate\Http\Request;

class SiswaPelanggaranController extends Controller
{
    # Index Data
    public function index()
    {
        $data = SiswaPelanggaran::with(['pelanggaran','siswa'])->get();
        return view('kasus.kasus', compact('data'));
    }
    # Tambah Kasus Page
    public function tambahkasus()
    {
        $siswa = Siswa::all();
        $pelanggaran = Pelanggaran::all();
        return view('kasus.tambahkasus', compact('siswa', 'pelanggaran'));
    }
    # Tambah Kasus Action
    public function insertkasus(Request $request)
    {
        SiswaPelanggaran::insert([
            'siswa_id' => $request->siswa_id,
            'pelanggaran_id' => $request->pelanggaran_id,
        ]);
        return redirect()->route('kasus')->with('success', 'Data Berhasil Di Tambahkan');
    }
    # Delete 
    public function deletepelanggaran($id)
    {
        $data = SiswaPelanggaran::find($id);
        $data->delete();
        return redirect()->route('kasus')->with('success', 'Data Berhasil Di Hapus');
    }
}
