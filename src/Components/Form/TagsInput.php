<?php

namespace Lianmaymesi\Wireblade\Components\Form;

use Illuminate\View\Component;

class TagsInput extends Component
{
    public $mandatory;

    public $toolTip;

    public $toolTipPosition;

    public $error;

    public $label;

    public $name;

    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $value = '', $mandatory = '', $toolTip = '', $toolTipPosition = 'ttop', $error = '')
    {
        $this->label = $label;

        $this->name = $name;

        $this->value = $value;

        $this->mandatory = $mandatory;

        $this->toolTip = $toolTip;

        $this->toolTipPosition = $toolTipPosition;

        $this->error = $error;
    }

    public function render()
    {
        return view('wireblade::components.form.tags-input');
    }
}
