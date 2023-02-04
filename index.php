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

    

// kode untuk menampilkan informasi PHP
    // phpinfo();
    ?>

</body>
</html>