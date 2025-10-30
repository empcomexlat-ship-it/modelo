<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;

class PaginaController extends Controller
{
    public function show($slug)
    {
        $pagina = Pagina::where('slug', $slug)->where('estado', true)->firstOrFail();

        return view('web.pagina', compact('pagina'));
    }
}
