<?php

namespace Yusril\Belajar\PHP\MVC\Controller;

class ProductController 
{
    function categories(string $productId, string $categoryId): void{
        echo "Product $productId, Cattegory $categoryId";
    }
}