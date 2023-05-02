<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh If Else</title>
</head>
<body>
    <?php
        $nilai = 80;
        
        if($nilai >= 60){
            echo "Nilai Anda = $nilai . Selamat, Anda Lulus";
        } else {
            echo "Nilai Anda = $nilai . Sorry, Anda Tidak Lulus";
        }
    ?>
</body>
</html>