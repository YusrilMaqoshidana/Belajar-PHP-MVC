<?php

namespace Yusril\Belajar\PHP\MVC\Controller;

class View {
    public static function render(string $view, $model) 
    {
        require __DIR__ . '/../View/' . $view . '.php';
    }
}