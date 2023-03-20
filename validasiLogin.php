<?php

function validasiLogin ($NRP, $password){
    $mahasiswa = ["C14200001" => "12345678", "C14210002" => "12345678", "C14210003" => "12345678"];
   
    foreach($mahasiswa as $key => $value){

        if($NRP === $key){
            if($password === $value){
                return true;
                break 1;
            }     
        }

    }
}


$hasilValidasi = validasiLogin($_POST["inputNRP"], $_POST["inputPassword"]);

if($hasilValidasi == true){
    header("Location: ./pagePresensi.php");
}else if($hasilValidasi == false){
    header('Location: ./pageLogin.php');
}

?>