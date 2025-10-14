<?php

// 1.1. Named Argument with Default Value
// Pada contoh dibawah ini, terdapat default value pada $middleName
function sayHello(?string $firstName = null, ?string $middleName = "", ?string $lastName = null): void {
    echo "Hello, nama saya $firstName $middleName $lastName" . PHP_EOL;
}
// (Supaya tidak Error: setiap parameter diberi "null")

// Jika pada PHP Versi 7 (PHP 7.0), contoh parameter dibawah namanya pada param 1 adalah nama belakang sedangkan param 2 adalah nama depannya:
sayHello("Zelda", "Belly"); 
// Maka outputnya adalah "Zelda Belly" alias kebalik, harus sesuai urutan parameter.
// Jika tidak diberi nullable, maka hasilnya error, dan param 2 "Belly" dibaca sebagai $middleName.
// Pada PHP 7.0, hal ini memang lebih kaku, tapi berbeda dengan dibawah ini.

// Pada PHP versi 8 (PHP 8.0), cukup memanggil parameter yg sesuai dari method, seperti ini:
sayHello(lastName:"Zelda", firstName:"Belly");
// Output: "Belly Zelda"
// Pada PHP 8.0 tanpa diset nullable pun pada method, seharusnya ini tidak error.

?>