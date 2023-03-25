<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form method="POST">
        Nama : <input type="text" name="nama" value="" size="50" style="margin :30px"><br>
        
        Nilai UTS:<input type="text" name="uts" value="" size="50" style="margin :20px"><br>
        
        Nilai UAS:<input type="text" name="uas" value="" size="50" style="margin :20px"><br>
        
        Nilai Tugas:<input type="text" name="tugas" value="" size="50" style="margin :10px"><br>
       
       <button name="proses">simpan</button>
    </form>
    </div>

<?php
$nama = $_POST["nama"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];
$tugas = $_POST["tugas"];
$tombol = $_POST["proses"];

$ket = ($nilai_akhir>=55)? "gagal" : "lulus";  

$nilai_akhir =(30/100 * $uts) + (35/100 * $uas) + (35/100 * $tugas);


if ($nilai_akhir>= 85 && $nilai_akhir <= 100) $grade ='A';
else if ($nilai_akhir>= 70 && $nilai_akhir <= 84) $grade ='b';
else if ($nilai_akhir>= 56 && $nilai_akhir <= 69) $grade ='C';
else if ($nilai_akhir>= 31 && $nilai_akhir <= 55) $grade ='D';
else if ($nilai_akhir>= 0 && $nilai_akhir <= 35) $grade ='E';
else $grade = '';
switch ($grade) {
    case 'A' : $predikat = 'sangat baik'; break;
    case 'B' : $predikat = 'baik'; break;
    case 'C' : $predikat = 'cukup'; break;
    case 'D' : $predikat = 'kurang baik'; break;
    case 'E' : $predikat = 'tidak baik'; break;

    default ; $predikat = '';

}
if(isset($tombol)){ ?>

<?= $nama ?><br>
<?=$nilai_akhir?><br>
<?= $ket ?><br>
<?= $grade?><br>
<?= $predikat?>
<?php } ?>
</body>
</html>