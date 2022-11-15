<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Program Sederhana</title>
</head>
<body>
    <form method="POST">
        <p>Kelas Junior Web Developer 3 VSGA Online Gelombang Ke - 3 Tahun 2022</p>
        <p>Nama : <b>Asep Saepudin</b></p>

        <p> Jumlah Bintang = <input type="text" name="bintang"> <br>
        <input type="submit" name="kirim" value="Kirim">
        </p>
    </form>
</body>
</html>





<!-- Start PHP -->
<?php
    if (isset($_POST['kirim'])) {
        $bintang = $_POST['bintang'];

        for ($a=0; $a <= $bintang ; $a++) { 
            for ($b=0; $b < $a ; $b++) { 
                echo "*";
            }
            echo "<br>";
        }
        
    }
?>
<!-- End PHP -->