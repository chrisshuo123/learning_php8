<?php

// 1.1. Named Argument
function sayHello(string $firstName, string $middleName, string $lastName): void {
    echo "Hello, nama saya $firstName $middleName $lastName" . PHP_EOL;
}

// Pada PHP versi 7 (PHP 7.0) isinya harus urut dengan parameter, tidak bisa dibalik - balik.
// Contoh Kasus:
sayHello("Owen", "Baguete", "Jelman");
// Output: Hello, nama saya Owen Baguete Jelman
// Itu sudah fiks sesuai urutan parameter dimulai nama depan, tengah, dan belakang.

// Pada PHP versi 8 (PHP 8.0), terdapat fitur namanya Named Argument
// Caranya cukup memanggil parameter dari methodnya:
sayHello(middleName:"Owen", firstName:"Baguete", lastName:"Jelman");
// Output: Hello, nama saya Baguete Owen Jelman

// Salah satu keuntungan menggunakan Named Argument: 
// Ketika kita bikin Default Argument

// Lanjut ke 1_2_ (alias 1.2. Named Argument with Default Value)

?>