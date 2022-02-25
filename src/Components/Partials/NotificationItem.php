<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class NotificationItem extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('wireblade::components.partials.notification-item');
    }
}
