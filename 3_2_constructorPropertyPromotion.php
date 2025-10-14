<?php

// Pada PHP versi 8 (PHP 8.0), deklarasi variabel dapat dilakukan langsung pada Constructor itu sendiri
// Cukup menambahkan visibility (public, private) didalamnya
class Product {
    public function __construct(public string $id,
                                public string $name,
                                public int $price,
                                public int $quantity,
                                private bool $expensive) {
                                    
    }
}

// Lanjut ke 3_3_ (alias bagian 3.3. constructor property promotion with default value)
?>