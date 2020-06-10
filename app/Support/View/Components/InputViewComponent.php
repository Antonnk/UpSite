<?php


namespace Support\View\Components;


use Illuminate\View\Component;
use Illuminate\View\View;

class InputViewComponent extends Component
{
    public $label;

    public $name;

    public function __construct(string $name, string $label)
    {
        $this->label = $label;
        $this->name = $name;
    }

    public function render(): View
    {
        return view('components.input');
    }
}
