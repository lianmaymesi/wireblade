<?php

namespace Lianmaymesi\Wireblade\Components\Form;

use Illuminate\View\Component;

class Trix extends Component
{
    public $error;

    public $label;

    public $mandatory;

    public function __construct($error = '', $label = '', $mandatory = '')
    {
        $this->error = $error;

        $this->label = $label;

        $this->mandatory = $mandatory;
    }

    public function render()
    {
        return view('wireblade::components.form.trix');
    }
}
