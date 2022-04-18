<?php

namespace Lianmaymesi\Wireblade\Components\Layouts;

use Illuminate\View\Component;

class AuthLayout extends Component
{
    public $title;

    public $showGraphics;

    public function __construct($title = '', $showGraphics = '')
    {
        $this->title = $title;

        $this->showGraphics = $showGraphics;
    }

    public function render()
    {
        return view('wireblade::components.layouts.auth');
    }
}
