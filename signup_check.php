<?php 
session_start();
include "config.php";

if(isset($_POST['kullanici_adi']) && isset($_POST['uye_sifre'])
   && isset($_POST['uye_adi']) && isset($_POST['uye_sifre2'])) {

    function dogrula($d){
        $d = trim($d);
        $d = stripslashes($d);
        $d = htmlspecialchars($d);
        return $d;
    }

    $kullanici_adi = dogrula($_POST['kullanici_adi']);
    $uye_sifre = dogrula($_POST['uye_sifre']);

    $uye_adi = dogrula($_POST['uye_adi']);
    $uye_sifre2 = dogrula($_POST['uye_sifre2']);

    $kullanici_d = 'kullanici_adi'. $kullanici_adi. '&uye_adi='. $uye_adi;

    if(empty($kullanici_adi)){
        header("Location: signup.php?error=Kullanıcı Adı girilmeli!&$kullanici_d");
        exit();
    }else if(empty($uye_sifre)){
        header("Location: signup.php?error=Şifre girilmeli!&$kullanici_d");
        exit();
    }else if(empty($uye_adi)){
        header("Location: signup.php?error=Ad Soyad girilmeli!&$kullanici_d");
        exit();
    }else if(empty($uye_sifre2)){
        header("Location: signup.php?error=Şifre girilmeli!&$kullanici_d");
        exit();
    }else if($uye_sifre !== $uye_sifre2){
        header("Location: signup.php?error=Onay parolası eşleşmiyor!&$kullanici_d");
        exit();
    }
    
    
    else{
        $sql_query = "SELECT * FROM uye 
                      WHERE kullanici_adi = '$kullanici_adi'";
        
        $res = mysqli_query($conn, $sql_query);

        if(mysqli_num_rows($res) > 0) {
            header("Location: signup.php?error=Kullanıcı Adı için başka bir şey deneyin!&$kullanici_d");
            exit();
        }else{
            $sql_query2 = "INSERT INTO uye(kullanici_adi,uye_sifre,uye_adi) 
                           VALUES('$kullanici_adi','$uye_sifre','$uye_adi')";
            $res2 = mysqli_query($conn, $sql_query2);
            if($res2){
                header("Location: signup.php?success=Hesabınız başarılı bir şekilde oluşturuldu!&$kullanici_d");
                exit();
            }else{
                header("Location: signup.php?error=Bilinmeyen bir hata oluştu!&$kullanici_d");
                exit();
            }
        }
    }
}else{
    header("Location: signup.php");
    exit();
}
