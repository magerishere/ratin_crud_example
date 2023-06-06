<?php

namespace App\View\Components\Back;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInput extends Component
{

    /**
     * Create a new component instance.
     */

    public function __construct(public string $inputId, public string $inputName, public string $inputType = 'text', public string $inputValue = '', public string $labelText = '', public int $size = 12, public int $sizeLg = 6)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.back.text-input');
    }
}
