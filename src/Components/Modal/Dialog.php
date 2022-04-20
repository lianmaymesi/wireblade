<?php

namespace Lianmaymesi\Wireblade\Components\Modal;

use Illuminate\View\Component;

class Dialog extends Component
{
    public $id;
    public $maxWidth;

    public function __construct($id = '', $maxWidth = '')
    {
        $this->id = $id;

        $this->maxWidth = $maxWidth;
    }

    public function render()
    {
        return view('wireblade::components.modal.dialog');
    }
}
