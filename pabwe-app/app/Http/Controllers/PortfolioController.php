<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



use App\Models\Portfolio;


class PortfolioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'isi',
            'gambar' => 'required|image|mimes:jpeg, png, jpg|max:2048',
        ]);

        $namaGambar = time().'.'.$request->gambar->extension();

        $request->gambar->move(public_path('portfolioImage'), $namaGambar);

        $portfolio = new Portfolio;

        $portfolio->judul = $request->judul;
        $portfolio->isi = $request->isi;
        $portfolio->gambar = $namaGambar;

        $portfolio->save();

        return redirect('/#portofolio');


    }

}
