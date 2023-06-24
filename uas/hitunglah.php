<?php
error_reporting(E_ALL ^(E_NOTICE | E_WARNING));
if(isset($_POST['suhu']) && $_POST['suhu']!=""){
$suhu=$_POST['suhu'];
}
else{ 
$suhu=0;
}
if($_POST['dari']=="c"){
    switch ($_POST['ke']){
        case"k":
            $hasil=$suhu+273;
        break;
        case"r":
            $hasil=$suhu*0.8;
        break;
        case"f":
            $hasil=$suhu*1.8+32;
        break;
        default :
            $hasil=$suhu; 
    }
}
else if($_POST['ke']=="k"){
    switch ($_POST['ke']){
        case"c":
            $hasil=$suhu+273;
        break;
        case"r":
            $hasil=($suhu-273)*0.8;
        break;
        case"f":
            $hasil=($suhu-273)*1.8+32;
        break;
        default :
            $hasil=$suhu; 
    }
}
else if($_POST['ke']=="r"){
    switch ($_POST['ke']){
        case"c":
            $hasil=$suhu/0.8;
        break;
        case"k":
            $hasil=$suhu/0.8+273;
        break;
        case"f":
            $hasil=$suhu*2.25+32;
        break;
        default :
            $hasil=$suhu; 
    }
}
else if($_POST['ke']=="f"){
    switch ($_POST['ke']){
        case"c":
            $hasil=($suhu-32)/1.8;
        break;
        case"k":
            $hasil=(($suhu-32)/1.8)+273;
        break;
        case"r":
            $hasil=($suhu-32)/2.25;
        break;
        default :
            $hasil=$suhu; 
    }
}
else{
    $hasil=$suhu;
}
?>