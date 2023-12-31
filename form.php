<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aplikasi BMI (Body Mass Index)</title>
<style>
body {
    padding: 20px 20%;
}
form {
    padding: 10px 20px;
    background-color: #f5f5f5;
    border: solid thin #EEE;
}
input, select {
    padding: 6px 12px;
}
.hasil {
    padding: 10px 20px;
    background-color: #900;
    color: #FFF;
    border: solid thin #600;
}
</style>
</head>

<body>
<h1>Menghitung BMI</h1>

<?php

if (isset($_GET['submit'])) {
   
    $tb = $_GET['tb']/100;
    $bb = $_GET['bb'];
    $bt=$bb*0.001;
    $km=$tb*0.001;
    $cm=$tb*100;


    $bmi        = $bb / ($tb * $tb);
   
    echo '<div class="hasil">';
    echo "<h3>Hasil perhitungan BMI</h3>";
    echo "Tinggi Badan: $tb m<br>";
    echo "Tinggi Badan: $cm cm<br>";
    echo "Tinggi Badan: $km km<br>";
    echo "Berat Badan: $bb kilogram<br>";
    echo "Berat Badan: $bt ton<br>";
    echo "<hr>BMI Anda: ".number_format($bmi);
    echo "<h4>Keterangan:</h4>";
   
    if($bmi < 15.5) {
        echo "Anda mengalami anoreksia";
    }elseif ($bmi < 18.5 ) {
        echo "Anda mengalami kekurangan gizi";
    }elseif ($bmi < 25 ) {
        echo "Anda memiliki berat badan normal";
    }elseif ($bmi < 30 ) {
        echo "Anda memiliki overweight";
    }elseif ($bmi < 35 ) {
        echo "Anda mengalami Obesitas Level 1";
    }elseif ($bmi < 40 ) {
        echo "Anda mengalami Obesitas Level 2";
    }else {
        echo "Anda mengalami Obesitas Akut";
    }
    
    echo '</div>';
}
?>

<form    methot="get" action="">
Tinggi badan (cm) <br>
<input type="text" name="tb"><br>
Berat badan (kg)<br>
<input type="text" name="bb"><br>
<input type="submit" name="print"><br>
<input type="submit" name="submit" value="Hitung BMI"><br>
</form>
</body>
</html>