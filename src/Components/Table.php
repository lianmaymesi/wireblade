<?php

namespace Lianmaymesi\Wireblade\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public function __construct()
    {
        # code...
    }

    public function render()
    {
        return view('wireblade::components.table');
    }
}
