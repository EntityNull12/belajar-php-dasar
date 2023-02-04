<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <?php

// ini adalah komentar

/* 
ini adalah
komentar lebih dari
satu baris
*/ 

// kode untuk menampilkan teks
        echo "Hello world <br>";
    
// kode untuk menjalankan aritmatika
        echo 5*1000;

// variabel pada PHP

    $variabel = "<br>ini variabel <br>";
    $variabel2 = "menulis variabel boleh menggunakan angka, tetapi tidak boleh digunakan di depan nama variabel<br>";
    $variabel_3 = "menulis variabel tidak boleh terpisah, untuk memisahkan nama variabel, boleh menggunakan ('_') <br>";

    echo ("$variabel  $variabel2  $variabel_3") ;

    // variabel juga bisa dimasukan dalam bentuk nilai
    $x = 100;
    $y = 200;
    $jumlah = $x + $y;
    echo "$jumlah";

// menyisipkan kode html ke dalam php
    $variabel4 = "<h2>SELAMAT DATANG</h2>";
    $variabel5 = "PENGUNJUNG";

    echo "$variabel4 <h1>$variabel5</h1>";

// penggunaan fungsi pada php

    // fungsi build in php
    $teks = ucwords("john doe"); // berfungsi untuk mengubah ke huruf kapital di setiap awal kalimat
    echo "<h2>Nama : $teks</h2>";

    echo strtoupper("terima kasih!!!"); // berfungsi untuk mengubah ke huruf kapital di semua kalimat

echo "<br>";
// macam-macam tipe data pada php

    // integer
    $x = 100;
    $y = 200;
    $jumlah = $x + $y;
    echo "$jumlah";

echo "<br>";

    // float
    $x = 10.5;
    $y = 20.3;
    $jumlah = $x + $y;
    echo "$jumlah";

echo "<br>";

        // mengatur desimal yang akan ditampilkan
        $x = 100;
        $y = 3;
        $jumlah = $x / $y;
        echo round($jumlah,4);

echo "<br>";

    // operator aritmatika
        // perjumlahan
        $x = 100;
        $y = 200;
        $jumlah = $x + $y;
        echo "$jumlah";

echo "<br>";

        // pengutangan
        $x = 100;
        $y = 200;
        $jumlah = $x - $y;
        echo "$jumlah";

echo "<br>";

        // perkalian
        $x = 100;
        $y = 200;
        $jumlah = $x * $y;
        echo "$jumlah";

echo "<br>";

        // pembagian
        $x = 100;
        $y = 200;
        $jumlah = $x / $y;
        echo "$jumlah";

echo "<br>";

        // modulus
        $x = 100;
        $y = 200;
        $jumlah = $x % $y;
        echo "$jumlah";

echo "<br>";

        // increament
        $a = 10;
        $a++;
        echo $a;

echo"<br>";

        // decrement
        $a = 10;
        $a--;
        $a--;
        echo $a;

echo "<br>";

// string

    // perbedaan kutip satu ('') dengan kutip dua (" ")
    $kutipsatu = 'kutip satu';
    echo 'menggunakan $kutipsatu'; 
    echo "<br>";
    $kutipdua = "kutip dua";
    echo "menggunakan $kutipdua";
    echo "<br>";

    // concat = menggabungkan dua atau lebih string
        // contoh 1
        $namadepan = "Adittia ";
        $namabelakang = "Dimas";
        $namalengkap = $namadepan . $namabelakang ;
        echo "Nama Lengkap : $namalengkap";
        echo "<br>";
        // contoh 2
        $namalengkap = "Rahmat " . "Arya";
        echo $namalengkap;
        echo "<br>";
        // contoh 3
        echo "Nama Lengkap : " . 'Adi ' . 'Fajar'; 
        echo "<br>";


// kode untuk menampilkan informasi PHP
    // phpinfo();
    ?>

</body>
</html>