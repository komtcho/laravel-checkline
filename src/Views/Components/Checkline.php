<?php

namespace Komtcho\Laravel\Checkline\Views\Components;

use Illuminate\View\Component;

class Checkline extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        return view('komtcho-checkline::components.checkline');
    }
}
