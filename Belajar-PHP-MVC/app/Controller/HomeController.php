<?php

namespace Yusril\Belajar\PHP\MVC\Controller;

use Yusril\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index(): void 
    {
        $model = [
            "title" => "Home",
            "content" => "saya diberi tugas oleh mas rahadyan tentang MVC"
        ];

        require __DIR__. "/../View/Home/index.php";
        // View::render('Home/index', $model);
    }

    function hello(): void 
    {
        echo "Ini Hello";
    }

    function world(): void 
    {
        echo "Ini World";
    }

    function about(): void 
    {
        echo "Author: Moh. Yusril Maqoshidana";
    }
}