<?php

class Product {
    // Jika pada PHP versi 7 (PHP 7.0):
    // Harus declare variable seperti pada Matkul Pemrograman Web (khususnya angkatan Millenial) menggunakan Prinsip OOP.
    // Declare variable, ditampung ke dalam constructor params, lalu dipanggil menggunakan '$this -> deklarasi = nama variabel didalam Param'.
    public string $id;
    public string $name;
    public int $price;
    public int $quantity;

    public function __construct(string $id, string $name, int $price, int $quantity) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

// Lanjut ke 3_2_ (alias bagian 3.2. constructor property promotion)
?>