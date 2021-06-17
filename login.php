<?php 
session_start(); 
include "config.php";

if (isset($_POST['kullanici_adi']) && isset($_POST['uye_sifre'])) {

	function validate($d){
       $d = trim($d);
	   $d = stripslashes($d);
	   $d = htmlspecialchars($d);
	   return $d;
	}

	$kullaniciAdi = validate($_POST['kullanici_adi']);
	$uyeSifre = validate($_POST['uye_sifre']);

	if (empty($kullaniciAdi)) {
		header("Location: index.php?error=Kullanıcı Adı gerekli!");
	    exit();
	}else if(empty($uyeSifre)){
        header("Location: index.php?error=Şifre gerekli!");
	    exit();
	}else{
        $sql = "SELECT * FROM uye WHERE kullanici_adi='$kullaniciAdi' AND uye_sifre='$uyeSifre'";

		$result = mysqli_query($conn, $sql);
		echo mysqli_num_rows($result);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
            if ($row['kullanici_adi'] === $kullaniciAdi && $row['uye_sifre'] === $uyeSifre) {
            	$_SESSION['uye_id'] = $row['uye_id'];
				$_SESSION['kullanici_adi'] = $row['kullanici_adi'];
            	$_SESSION['uye_adi'] = $row['uye_adi'];
				$_SESSION['uye_id'] = $row['uye_id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Kullanıcı Adı veya Şifre hatalı!");
		        exit();
			}
		}else{
			header("Location: index.php?error=Kullanıcı Adı veya Şifre hatalı!");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}