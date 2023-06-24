<html>
    <head>
        <h3>konversi suhu</h3>
    </head>
<body>
<form method="post" action="suhu.php">
nama: <input type="nama" name="nama"><br>
jenis kelamin :<br>
            <input type="radio" name="gender" value="laki-laki">laki-laki <br>
            <input type="radio" name="gender" value="perempuan">perempuan <br>
<hr><hr>
masukan suhu<input type="text" name="suhu" value=""></br>
pilih jenis suhu :
<br/>
Dari :<select name="dari">
        <option name="c" value="c"> celcius(c)</option>
        <option name="k" value="k"> kelvin(k)</option>
        <option name="r" value="r"> reamur(r)</option>
        <option name="f" value="f"> farenheit(f)</option>
    </select>
ke :<select name="ke">
        <option name="c" value="c"> celcius(c)</option>
        <option name="k" value="k"> kelvin(k)</option>
        <option name="r" value="r"> reamur(r)</option>
        <option name="f" value="f"> farenheit(f)</option>
    </select>
    <input type="submit" value="konversi" />
</br>
</br>
hasil:</br>
<?php
include("hitunglah.php");
echo $suhu."(".$_POST['dari'].")=".$hasil."(".$_POST['ke'].")";
echo"<br>";
if($_POST['gender']=="laki-laki"){
    echo"terimakasih, mas"."".$_POST['nama'].""."telah menggunakan aplikasi ini"."<br>";
}
else if($_POST['gender']=="perempuan"){
    echo"terimakasih,mbaK"."".$_POST['nama'].""."telah menggunakan aplikasi ini"."<br>";
}
else{
    echo"";
}
for($i=1;$i<=32;$i++){
    echo"*"." ";
}
?>
</br>
</br>
</body>
</html>