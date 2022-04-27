<?php

namespace Lianmaymesi\Wireblade\Components\Form;

use Illuminate\View\Component;

class Trix extends Component
{
    public $label;

    public $mandatory;

    public $initialValue;

    public $error;

    public function __construct($label = '', $mandatory = '', $initialValue = '', $error = '')
    {
        $this->label = $label;

        $this->mandatory = $mandatory;

        $this->initialValue = $initialValue;

        $this->error = $error;
    }

    public function render()
    {
        return view('wireblade::components.form.trix');
    }
}
