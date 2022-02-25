<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class Profile extends Component
{
    public $name;

    public $logout;

    public $image;

    public function __construct($name, $logout, $image)
    {
        $this->name = $name;

        $this->logout = $logout;

        $this->image = $image;
    }

    public function render()
    {
        return view('wireblade::components.partials.profile');
    }
}
