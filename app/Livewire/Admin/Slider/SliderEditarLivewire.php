<?php

namespace App\Livewire\Admin\Slider;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Slider;

#[Layout('layouts.admin.layout-admin')]
class SliderEditarLivewire extends Component
{
    public function render()
    {
        return view('livewire.admin.slider.slider-editar-livewire');
    }
}
