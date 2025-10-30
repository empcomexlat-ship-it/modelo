<?php

namespace App\Livewire\Admin\Imagen;

use App\Models\Imagen;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

#[Layout('layouts.admin.layout-admin')]
class ImagenTodoLivewire extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $imagenes_inicial = [], $imagenes_final = [];
    public $modal = false;
    public $imagenId, $url, $titulo, $descripcion, $imagen_edit;

    protected $rules = [
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'imagen_edit' => 'nullable|image|max:2048',
    ];

    protected $validationAttributes = [
        'titulo' => 'título',
        'descripcion' => 'descripción',
        'imagen_edit' => 'imagen',
    ];

    protected $messages = [
        'titulo.required' => 'El :attribute es requerido.',
        'descripcion.required' => 'La :attribute es requerida.',
        'imagen_edit.image' => 'Debe ser tipo imagen.',
        'imagen_edit.max' => 'La :attribute no debe superar 2 MB.',
    ];

    public function updatedImagenesInicial($imagenes_inicial)
    {
        foreach ($imagenes_inicial as $imagen) {
            $this->imagenes_final[] = $imagen;
        }
    }

    public function eliminarImagenTemporal($index)
    {
        array_splice($this->imagenes_final, $index, 1);
    }

    public function eliminarImagenEditTemporal()
    {
        $this->imagen_edit = null;
    }

    public function guardar()
    {
        if (empty($this->imagenes_final)) {
            $this->addError('imagenes_final', 'Debe seleccionar al menos una imagen.');
            return;
        }

        foreach ($this->imagenes_final as $imagen) {
            // Guardar en storage/app/public/images
            $ruta = $imagen->store('images', 'public');

            // URL pública
            $url = Storage::url($ruta);

            Imagen::create([
                'titulo' => null,
                'descripcion' => null,
                'path' => $ruta,
                'url' => $url,
            ]);
        }

        $this->reset(['imagenes_inicial', 'imagenes_final', 'titulo', 'descripcion']);
        $this->dispatch('alertaLivewire', "Imágenes subidas correctamente.");
    }

    public function seleccionarImagen($id)
    {
        $imagen = Imagen::findOrFail($id);
        $this->imagenId = $imagen->id;
        $this->titulo = $imagen->titulo;
        $this->descripcion = $imagen->descripcion;
        $this->url = $imagen->url;
        $this->modal = true;
    }

    public function editarFormulario()
    {
        $this->validate();

        $imagen = Imagen::findOrFail($this->imagenId);
        $imagen->titulo = $this->titulo;
        $imagen->descripcion = $this->descripcion;

        if ($this->imagen_edit) {
            // Eliminar imagen anterior si existe
            if ($imagen->path && Storage::disk('public')->exists($imagen->path)) {
                Storage::disk('public')->delete($imagen->path);
            }

            // Subir la nueva imagen
            $ruta = $this->imagen_edit->store('images', 'public');
            $url = Storage::url($ruta);

            $imagen->path = $ruta;
            $imagen->url = $url;
        }

        $imagen->save();

        $this->reset();
        $this->dispatch('alertaLivewire', "Imagen actualizada correctamente.");
    }

    #[On('eliminarImagen')]
    public function eliminarImagen($imagenId)
    {
        $imagen = Imagen::find($imagenId);

        if ($imagen) {
            // Eliminar del disco
            if ($imagen->path && Storage::disk('public')->exists($imagen->path)) {
                Storage::disk('public')->delete($imagen->path);
            }

            $imagen->delete();
            $this->dispatch('alertaLivewire', "Imagen eliminada correctamente.");
        }
    }

    public function updatingPaginacion()
    {
        $this->resetPage();
    }

    public function render()
    {
        $imagenes = Imagen::orderBy('created_at', 'desc')->paginate(30);

        return view('livewire.admin.imagen.imagen-todo-livewire', [
            'imagenes' => $imagenes,
        ]);
    }
}
