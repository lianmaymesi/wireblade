<?php

namespace Lianmaymesi\Wireblade\Components;

use Illuminate\View\Component;

class Tooltip extends Component
{
    public $position;

    public function __construct($position = 'ttop')
    {
        $this->position = $position;
    }

    public function render()
    {
        return view('wireblade::components.tooltip');
    }
}
