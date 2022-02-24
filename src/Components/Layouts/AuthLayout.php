<?php

namespace Lianmaymesi\Wireblade\Components\Layouts;

use Illuminate\View\Component;

class AuthLayout extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('wireblade::components.layouts.auth');
    }
}
