<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blogstyle.css">
    <title>GİRİŞ</title>
</head>

<body>
        <form action="login.php" method="POST">
            <h2>ÜYE GİRİŞİ</h2>
            <p class="uyarı">İlk Önce Kayıt Olunuz!</p><br>

            <?php if(isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <label>Kullanıcı Adı</label>
            <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı"><br>

            <label>Şifre</label>
            <input type="password" name="uye_sifre" placeholder="Şifre"><br>

            <button type="submit">GİRİŞ</button>
            <a href="signup.php" class="ca">Yeni Hesap Oluştur</a>
        </form>
</body>

</html>