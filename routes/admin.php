<?php

use App\Livewire\Admin\Slider\SliderTodoLivewire;

use Illuminate\Support\Facades\Route;

Route::get('/slider', SliderTodoLivewire::class)->name('slider.vista.todo');
