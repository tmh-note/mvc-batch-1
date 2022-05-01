<?php

namespace Controllers;

use Models\Product;

class ProductController
{
    private $product;

    public function __construct()
    {
        $this->product = new Product;
    }

    public function index()
    {
        $search = $_GET['search'] ?? '';

        if($search) {
            $products = $this->product->query("select * from products where `name` like '%$search%'")->get();
        } else {
            $products = $this->product->query('select * from products')->get();
        }

        return view("products.index", [
            'products' => $products
        ]);
    }

    public function show()
    {
        $id = $_GET['id'];
        $product = $this->product->query("select * from products where id='$id'")->first();

        if(! $product) {
            return view("errors.page_not_found");
        }

        return view("products.show", [
            'product' => $product
        ]);
    }

    public function create()
    {
        return view("products.create");
    }

    public function store()
    {
        $name = $_POST['name'];
        $price = $_POST['price'];

        $result = $this->product
        ->query("INSERT INTO `products` (`name`, `price`) VALUES ('$name', '$price')")
        ->result();

        if(! $result) {
            return redirect('/products/create');
        }

        return redirect('/products/list');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $product = $this->product->query("select * from products where id='$id'")->first();

        if(! $product) {
            return view("errors.page_not_found");
        }

        return view("products.edit", [
            'product' => $product
        ]);
    }

    public function update()
    {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        
        $result = $this->product
        ->query("UPDATE products SET `name`='$name', `price`='$price' where `id`='$id'")
        ->result();

        if(! $result) {
            return redirect('/products/edit?id=' . $id);
        }

        return redirect('/products/list');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $result = $this->product->query("DELETE FROM products WHERE `id`='$id'")->result();

        if(! $result) {
            // show error message
        }

        return redirect('/products/list');
    }
}