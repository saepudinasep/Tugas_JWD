<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Tipe Data dan Kontrol Program</title>
</head>
<body>
    <!-- Start PHP -->
    <?php
        echo "<p>Kelas Junior Web Developer 3 VSGA Online Gelombang Ke - 3 Tahun 2022</p>";
        echo "<p>Nama : <b>Asep Saepudin</b></p>";
        echo "====================CETAK BILANGAN GANJIL GENAP 1-100====================";
        echo "<br>";
        for ($bil=1; $bil <= 100 ; $bil++) { 
            if ($bil % 2 == 1) {
                echo $bil." adalah Bilangan Ganjil. <br>";
            }else {
                echo $bil." adalah Bilangan Genap. <br>";
            }
        }
    ?>
    <!-- End PHP -->
</body>
</html>