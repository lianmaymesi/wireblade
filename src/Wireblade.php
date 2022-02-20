<?php

namespace Lianmaymesi\Wireblade;

class Wireblade
{

    public static function css()
    {
        return '<style>' . file_get_contents(__DIR__ . './../public/assets/css/wireblade.css') . '</style>';
    }
}
