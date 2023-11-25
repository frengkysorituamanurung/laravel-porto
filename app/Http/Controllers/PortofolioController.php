<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Portofolio;
use File;

class PortofolioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'judul'=> 'required',
            'subjudul'=> 'required',
            'gambar'=> 'required|image:jpeg,png,jpg|max:2048',
            'content'=> 'required',
            'link'=> 'required',
        ]);
        $namaGambar = time().'.'.$request->gambar->extension();

        $request->gambar->move(public_path('portofolioImage'), $namaGambar);

        $portofolio = new Portofolio;

        $portofolio->judul = $request->judul;
        $portofolio->subjudul = $request->subjudul;
        $portofolio->gambar = $namaGambar;
        $portofolio->content = $request->content;
        $portofolio->link = $request->link;

        $portofolio->save();
        //Alert::success('Success', 'Data Berhasil Ditambahkan');

        return redirect('/#portofolio');
    }

    public function index()
    {
        $portofolio = Portofolio::all();
        return view('index', compact('portofolio'));
    }

    // public function destroy($id)
    // {
    //     $portofolio = Portofolio::find($id);

    //     $path = "portofolioImage/";
    //     File::delete($path, $portofolio->gambar);
    //     $portofolio->delete();

    //     return redirect('/#portofolio');
    // }
}
