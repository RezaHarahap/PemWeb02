<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$gender = $_POST['gender'];
$skill = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

echo "NIM: $nim";
echo "<br> Nama: $nama";
echo "<br> Program Studi: $prodi";
echo "<br> Skill Programming:";
foreach($skill as $skil){
    echo $skil . ", ";    
}
echo "<br> Tempat Domisili; $domisili"; 
echo "<br> Email: $email";