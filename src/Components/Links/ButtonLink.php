<?php

namespace Lianmaymesi\Wireblade\Components\Links;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function render()
    {
        return view('wireblade::components.links.button-link');
    }
}
