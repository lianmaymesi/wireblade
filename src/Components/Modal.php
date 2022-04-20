<?php

namespace Lianmaymesi\Wireblade\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('wireblade::components.modal');
    }
}
