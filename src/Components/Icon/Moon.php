<?php

namespace Lianmaymesi\Wireblade\Components\Icon;

use Illuminate\View\Component;

class Moon extends Component
{
    public $strokeWidth;

    public function __construct($strokeWidth = 2)
    {
        $this->strokeWidth = $strokeWidth;
    }

    public function render()
    {
        return view('wireblade::components.icons.moon');
    }
}
