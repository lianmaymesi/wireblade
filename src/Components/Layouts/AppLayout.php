<?php

namespace Lianmaymesi\Wireblade\Components\Layouts;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('wireblade::components.layouts.app');
    }
}
