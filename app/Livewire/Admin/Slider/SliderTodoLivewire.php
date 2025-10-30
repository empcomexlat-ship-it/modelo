<?php

namespace App\Livewire\Admin\Slider;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Slider;

#[Layout('layouts.admin.layout-admin')]
class SliderTodoLivewire extends Component
{
    public function render()
    {
        $sliders = Slider::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.slider.slider-todo-livewire', [
            'sliders' => $sliders,
        ]);
    }
}
