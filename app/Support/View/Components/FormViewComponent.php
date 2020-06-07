<?php

namespace Support\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class FormViewComponent extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View
    {
        return view('components.form');
    }
}
