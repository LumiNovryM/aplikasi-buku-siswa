<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    # Index Data
    public function index()
    {
        $pel = Pelanggaran::all();
        return view('pelanggaran.pelanggaran', compact('pel'));
    }
    # Form Page
    public function tambahpelanggaran()
    {
        $cat = Category::all();
        return view('pelanggaran.tambahpelanggaran', compact('cat'));
    }
    # Form Action
    public function insertpelanggaran(Request $request)
    {
        Pelanggaran::insert([
            'nama_pelanggaran' => $request->nama_pelanggaran,
            'tindak_lanjut' => $request->tindak_lanjut,
            'id_category' => $request->id_category
        ]);
        return redirect()->route('pelanggaran')->with('success', 'Data Berhasil Di Tambahkan');
    }
    # Delete 
    public function deletepelanggaran($id)
    {
        $data = Pelanggaran::find($id);
        $data->delete();
        return redirect()->route('pelanggaran')->with('success', 'Data Berhasil Di Hapus');
    }
    # Edit Page
    public function editpelanggaran($id)
    {
        $data = Pelanggaran::find($id);
        $cat = Category::all();
        return view('pelanggaran.editpelanggaran', compact('data','cat'));
    }
    # Edit Action
    public function updatepelanggaran(Request $request, $id)
    {
        $data = Pelanggaran::find($id);
        $data->update([
            'nama_pelanggaran' => $request->nama_pelanggaran,
            'tindak_lanjut' => $request->tindak_lanjut,
            'id_category' => $request->id_category
        ]);
        return redirect()->route('pelanggaran')->with('success', 'Data Berhasil Di Edit');
    }
}
