<?php

namespace Lianmaymesi\Wireblade\Components\Links;

use Illuminate\View\Component;

class AnchorLink extends Component
{
    public $color;

    public $link;

    public function __construct($color, $link)
    {
        $this->color = $color;

        $this->link = $link;
    }

    public function render()
    {
        return view('wireblade::components.links.anchor-link');
    }
}
