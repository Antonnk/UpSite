<?php

namespace Support\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class InputViewComponent extends Component
{
    public $name;

    public $label;

    public function __construct(string $name, string $label)
    {
        $this->name = $name;
        $this->label = $label;
    }

    public function render(): View
    {
        return view('components.input');
    }
}
