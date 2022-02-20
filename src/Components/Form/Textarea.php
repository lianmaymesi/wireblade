<?php

namespace Lianmaymesi\Wireblade\Components\Form;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $error;

    public $label;

    public $mandatory;

    public $toolTip;

    public $helpText;

    public $toolTipPosition;

    public function __construct($error = '', $label = '', $mandatory = '', $toolTip = '', $toolTipPosition = 'ttop')
    {
        $this->error = $error;

        $this->label = $label;

        $this->mandatory = $mandatory;

        $this->toolTip = $toolTip;

        $this->toolTipPosition = $toolTipPosition;
    }

    public function render()
    {
        return view('wireblade::components.form.textarea');
    }
}
