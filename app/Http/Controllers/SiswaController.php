<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\SiswaPelanggaran;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    # Index Data
    public function index()
    {
        $siswa = Siswa::with(['kelas','jurusan','guru'])->get();
        return view('siswa.siswa', compact('siswa'));
    }
    # Form Page
    public function tambahsiswa()
    {
        # Foreach Select Option
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        $guru = Guru::all();
        return view('siswa.tambahsiswa', compact(['kelas','jurusan','guru']));
    }
    # Form Action
    public function insertsiswa(Request $request)
    {
        Siswa::insert([
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'id_jurusan' => $request->id_jurusan,
            'id_guru' => $request->id_guru,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect()->route('siswa')->with('success', 'Data Berhasil Di Tambahkan');
    }
    # Delete 
    public function deletesiswa($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('success', 'Data Berhasil Di Hapus');
    }
    # Edit Page
    public function editsiswa($id)
    {
        $data = Siswa::find($id);
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        $guru = Guru::all();
        return view('siswa.editsiswa', compact(['data','kelas','jurusan','guru']));
    }
    # Edit Action
    public function updatesiswa(Request $request, $id)
    {
        $data = Siswa::find($id);
        $data->update($request->all());
        return redirect()->route('siswa')->with('success', 'Data Berhasil Di Edit');
    }
    # Info Siswa
    public function infosiswa($id)
    {
        $siswa = Siswa::find($id);
        $data = SiswaPelanggaran::with(['pelanggaran','siswa'])->where('siswa_id', $id)->get();
        return view('siswa.infosiswa',compact('data','siswa'));
    }
}
