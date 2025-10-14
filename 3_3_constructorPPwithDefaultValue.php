<?php

// Pada PHP 8.0, bisa juga menambahkan default value didalam constructor paramnya:
class Product {
    public function __construct(public string $id,
                                public string $name,
                                public int $price = 0,
                                public int $quantity = 0,
                                private bool $expensive = false) {
                                    
    }
}

// Jadi saat bikin objectnya:
$product = new Product(id:"1", name:"Mie Ayam", price:15000); // Ini akan otomatis dipromote menjadi sebuah property
// Coba kita var_dump
var_dump($product);
// Jadi saat di-var_dump, hasilnya bisa kita lihat,
// object product itu punya:
// property id, name, price, quantity, dan expensive (private)

// Saat echo object productnya, sudah ada auto-complete dari propertynya:
echo "" . PHP_EOL;
echo $product->id . PHP_EOL;
echo $product->name . PHP_EOL;
echo $product->price . PHP_EOL;
echo $product->quantity . PHP_EOL;

?>