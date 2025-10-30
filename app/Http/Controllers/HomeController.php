<?php

namespace App\Http\Controllers;

use App\Models\BloqueDos;
use App\Models\BloqueUno;
use App\Models\Candidato;
use App\Models\Noticia;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $candidato = Candidato::first();

        $sliders = $this->getWebSlidersPrincipal(1);

        $noticias = $this->getNoticias();

        $imagenes = $this->getImagenes();

        $bloque_uno = $this->getWebBloqueUno(1);
        $bloque_dos = $this->getWebBloqueDos(1);
        //dd($bloque_uno);

        return view('web.home', compact('candidato', 'sliders', 'noticias', 'imagenes', 'bloque_uno', 'bloque_dos'));
    }

    public function getWebSlidersPrincipal($id)
    {
        $sliders = Slider::where('id', $id)
            ->where('activo', true)
            ->first();
        if ($sliders) {
            $sliders->imagenes = json_decode($sliders->imagenes, true);
        } else {
            $sliders = null;
        }

        return $sliders;
    }

    public function getWebBloqueUno($id)
    {
        $bloque = BloqueUno::find($id);

        return $bloque;
    }

    public function getWebBloqueDos($id)
    {
        $bloque = BloqueDos::find($id);

        return $bloque;
    }

    public function getNoticias()
    {
        $consulta_id = 1;

        $titulo = 'Noticias';

        $data = Noticia::where('estado', true)->latest()->take(6)->get();

        return [
            'id' => $consulta_id,
            'titulo' => $titulo,
            'posts' => $data,
        ];
    }

    public function getImagenes()
    {
        $consulta_id = 1;

        $titulo = 'Imagenes';

        $data = [
            [
                'id' => 1,
                'titulo' => 'Empresario',
                'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
            ],
            [
                'id' => 2,
                'titulo' => 'Escritor',
                'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
            ],
            [
                'id' => 3,
                'titulo' => 'Líder',
                'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
            ],
        ];

        return [
            'id' => $consulta_id,
            'titulo' => $titulo,
            'imagenes' => $data,
        ];
    }
}
