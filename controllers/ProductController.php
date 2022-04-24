<?php

namespace Controllers;

class ProductController
{
    public function index()
    {
        view("products.index");
    }

    public function show()
    {
        $data = [
            'namex' => 'Book',
            'price' => 1000
        ];

        view("products.show", $data);
    }
}