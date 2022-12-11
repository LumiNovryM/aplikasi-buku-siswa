<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    # Index Data
    public function index()
    {
        $category = Category::all();
        return view('category.category', compact('category'));
    }
    # Form Page
    public function tambahcategory()
    {
        return view('category.tambahcategory');
    }
    # Form Action
    public function insertcategory(Request $request)
    {
        Category::insert([
            'tingkat_pelanggaran' => $request->tingkat_pelanggaran,
            'poin' => $request->poin
        ]);
        return redirect()->route('category')->with('success', 'Data Berhasil Di Tambahkan');
    }
    # Delete 
    public function deletecategory($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->route('category')->with('success', 'Data Berhasil Di Hapus');
    }
    # Edit Page
    public function editcategory($id)
    {
        $data = Category::find($id);
        return view('category.editcategory', compact('data'));
    }
    # Edit Action
    public function updatecategory(Request $request, $id)
    {
        $data = Category::find($id);
        $data->update([
            'tingkat_pelanggaran' => $request->tingkat_pelanggaran,
            'poin' => $request->poin
        ]);
        return redirect()->route('category')->with('success', 'Data Berhasil Di Edit');
    }
}
