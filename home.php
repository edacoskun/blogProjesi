<?php
session_start();
if (!isset($_SESSION['uye_id'])) {
    header('Location: index.php');
    exit();
}
?>
<?php 

include "config.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>ANASAYFA</title>
	<link rel="stylesheet" type="text/css" href="poststyle.css">
</head>
<body>
     <div class = "container">
        
        <?php if(isset($_REQUEST['info'])){?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert" role="alert">
                    Post başarılı bir şekilde eklendi!
                </div>
            <?php }else if($_REQUEST['info'] == "updated"){?>
                <div class="alert" role="alert">
                    Post başarılı bir şekilde düzenlendi(güncellendi)!
                </div>
            <?php }else if($_REQUEST['info'] == "deleted"){?>
                <div class="alert" role="alert">
                    Post başarılı bir şekilde silindi!
                </div>
            <?php } ?>
        <?php } ?>
            
        <div class = "text-center">
            <h2 style="text-align:center;">BLOG SAYFANIZA HOŞGELDİNİZ!</h2>
            <a href= "post.php" class= "ek">+YENİ BİR POST OLUŞTUR</a>
        </div>

        <div class="box">
 
            <?php foreach($query as $q){?>
                <div class="col">
                        <div>
                            <h3 style="text-align:center;"><?php echo $q['post_basligi'];?></h3>
                            <p class="icrk"><?php echo $q['icerik'];?></p>
                        </div>
                        
                            <form method="POST">
                            <input type="text" hidden name="post_id" value="<?php echo $q['post_id'];?>">
                            <button name="sil">SİL</button>
                            </form>
                        
                            <div class="duzenle">
                            <a href="duzenle.php?post_id=<?php echo $q['post_id'];?>">DÜZENLE</a>
                            </div>
            
                </div>
            <?php } ?>

        </div>
    </div>

    <a href="logout.php" style="float:right; color:#000;">ÇIKIŞ</a>
</body>
</html>

