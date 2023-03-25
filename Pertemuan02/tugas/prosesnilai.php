<?php
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_uts = $_POST['uts'];
    $_uas = $_POST['uas'];
    $_tugas = $_POST['tugas'];
    $_grade = ($_uts + $_uas + $_tugas) / 3;

        echo '<br>Nama : ' . $_nama;
        echo '<br>Mata Kuliah : ' . $_matkul;
        echo '<br>Nilai UTS : ' . $_uts;
        echo '<br>Nilai UAS : ' . $_uas;
        echo '<br>Nilai Tugas : ' . $_tugas;
        echo "<br>Rata-Rata : " . round(($_uts + $_uas + $_tugas) / 3);
        echo("<br>");
        if ($_grade>=85)
        echo("Grade : <b>A</b>");
        elseif ($_grade>=70)
        echo("Grade : <b>B</b>");
        elseif ($_grade>=56)
        echo("Grade : <b>C</b>");
        elseif ($_grade>=36)
        echo("Grade : <b>D</b>");
        elseif ($_grade>=0)
        echo("Grade : <b>E</b>");
?>