<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use App\Models\Slider;
use App\Services\WhatsAppService;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function libro()
    {
        $sliders = $this->getLandingSliderLibro(1);

        return view('web.landing.libro', compact('sliders'));
    }

    public function enviarLibro(Request $request, WhatsAppService $whatsapp)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'nullable|regex:/^[0-9]{9}$/',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'El nombre debe contener solo texto válido.',
            'nombre.max' => 'El nombre no puede superar los 255 caracteres.',

            'apellido.required' => 'El campo apellido es obligatorio.',
            'apellido.string' => 'El apellido debe contener solo texto válido.',
            'apellido.max' => 'El apellido no puede superar los 255 caracteres.',

            'email.required' => 'El campo correo es obligatorio.',
            'email.email' => 'Debes ingresar un correo electrónico válido.',

            'telefono.regex' => 'El número de teléfono debe tener exactamente 9 dígitos numéricos.',
        ]);

        $contacto = Mensaje::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'tipo_mensaje_id' => 2,
        ]);

        $telefono = preg_replace('/[^0-9]/', '', $contacto->telefono);
        if (substr($telefono, 0, 2) !== '51') {
            $telefono = '51' . $telefono;
        }

        $response = $whatsapp->sendTemplateLibro($telefono);

        if (isset($response['messages']) && count($response['messages']) > 0) {
            $mensaje = 'Gracias, te hemos enviado el libro a tu WhatsApp 📘.';
        } else {
            $mensaje = 'Te registraste, pero no hemos validado tu WhatsApp. ¡Intente de nuevo!';
            \Log::warning('Error al enviar WhatsApp', ['response' => $response]);
        }

        return back()->with('success', $mensaje);
    }

    public function getLandingSliderLibro($id)
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
}
