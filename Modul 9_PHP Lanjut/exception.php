<?php

try{

    $umur = 10;

    if($umur < 17){

        throw new Exception("Umur harus diatas 17 tahun");

    }

    echo "Login berhasil";

}catch(Exception $e){

    echo "Terjadi error : " . $e->getMessage();
}

?>