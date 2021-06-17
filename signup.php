<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blogstyle.css">
    <title>KAYIT</title>
</head>

<body>
        <form action="signup_check.php" method="POST">
            <h2>KAYDOL</h2>

            <?php if(isset($_GET['error'])) { ?>
                 <p class="error"><?= $_GET['error']; ?></p>
            <?php } ?>

            <?php if(isset($_GET['success'])) { ?>
                 <p class="success"><?= $_GET['success']; ?></p>
            <?php } ?>

            <label>Ad Soyad</label>
            <?php if(isset($_GET['uye_adi'])) { ?>
                <input type="text" name="uye_adi" placeholder="Ad Soyad" value="<?= $_GET['uye_adi']; ?>"><br>
            <?php }else{ ?>
                <input type="text" name="uye_adi" placeholder="Ad Soyad"><br>
            <?php } ?>

            <label>Kullanıcı Adı</label>
            <?php if(isset($_GET['kullanici_adi'])) { ?>
                <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" value="<?= $_GET['kullanici_adi']; ?>"><br>
            <?php }else{ ?>
                <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı"><br>
            <?php } ?>

            <label>Şifre</label>
            <input type="password" name="uye_sifre" placeholder="Şifre"><br>

            <label>Şifre Tekrarı</label>
            <input type="password" name="uye_sifre2" placeholder="Şifre Tekrarı"><br>

            <button type="submit">KAYDOL</button>
            <a href="index.php" class="ca">Hesabın var mı?</a>
        </form>

</body>

</html>