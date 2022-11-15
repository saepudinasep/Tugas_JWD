<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Pemrograman Terstruktur</title>
</head>
<body>
    <p>Kelas Junior Web Developer 3 VSGA Online Gelombang Ke - 3 Tahun 2022</p>
    <p>Nama : <b>Asep Saepudin</b></p>

    <!-- Start PHP -->
    <?php
        // operator penjumlahan
        function penjumlahan()
        {
            $bil1 = 9;
            $bil2 = 3;
            $hasil = $bil1 + $bil2;
            echo "Hasil Penjumlahan adalah : ".$hasil;
        }
        // operator pengurangan
        function pengurangan()
        {
            $bil1 = 9;
            $bil2 = 3;
            $hasil = $bil1 - $bil2;
            echo "Hasil Pengurangan adalah : ".$hasil;
        }
        // operator perkalian
        function perkalian()
        {
            $bil1 = 9;
            $bil2 = 3;
            $hasil = $bil1 * $bil2;
            echo "Hasil perkalian adalah : ".$hasil;
        }
        // operator Pembagian
        function Pembagian()
        {
            $bil1 = 9;
            $bil2 = 3;
            $hasil = $bil1 / $bil2;
            echo "Hasil Pembagian adalah : ".$hasil;
        }
        echo "bilangan 1 = 9 <br>";
        echo "bilangan 2 = 3 <br>";
        echo "========================================<br>";
        echo penjumlahan()."<br>";
        echo pengurangan()."<br>";
        echo perkalian()."<br>";
        echo pembagian()."<br>";

    ?>
    <!-- End PHP -->
</body>
</html>