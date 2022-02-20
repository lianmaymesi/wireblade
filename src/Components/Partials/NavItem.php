<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class NavItem extends Component
{
    public $dropdown;

    public function __construct($dropdown = '')
    {
        $this->dropdown = $dropdown;
    }

    public function render()
    {
        return view('wireblade::components.partials.nav-item');
    }
}
