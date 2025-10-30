<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::where('estado', true)->latest()->paginate(6);
        return view('web.noticias.index', compact('noticias'));
    }

    public function show($slug)
    {
        $post = Noticia::where('slug', $slug)->where('estado', true)->firstOrFail();

        $otrosPosts = Noticia::where('estado', true)->latest()
            ->paginate(5);

        return view('web.noticias.show', compact('post', 'otrosPosts'));
    }
}
