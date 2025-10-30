<?php

use App\Livewire\Admin\Imagen\ImagenTodoLivewire;

use App\Livewire\Admin\Slider\SliderTodoLivewire;
use App\Livewire\Admin\Slider\SliderCrearLivewire;
use App\Livewire\Admin\Slider\SliderEditarLivewire;

use Illuminate\Support\Facades\Route;

Route::get('/imagen', ImagenTodoLivewire::class)->name('imagen.vista.todo');

Route::get('/slider', SliderTodoLivewire::class)->name('slider.vista.todo');
Route::get('/slider/crear', SliderCrearLivewire::class)->name('slider.vista.crear');
Route::get('/slider/editar/{id}', SliderEditarLivewire::class)->name('slider.vista.editar');
