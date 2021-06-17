<?php
session_start();
if (!isset($_SESSION['uye_id'])) {
    header('Location: index.php');
    exit();
}
?>

<?php

    include "config.php"
    
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST GÜNCELLEME</title>
    <style>
        body{
            background:url("post.png");
            background-size: cover;
        }

        h2{
            margin-top:80px;
            text-align:center;
        }
        .form-control{
            background-color: #D7D5B4;
            text-align: center;
            display: block;
	        border: 2px solid #000;
	        width: 30%;
	        padding: 10px;
            margin: 2px auto;
	        border-radius: 5px;

        }

        .form-control1{
            background-color: #D7D5B4;
            display: block;
	        border: 2px solid #000;
	         width: 60%;
             height: 50px;
	        padding: 20px;
	        border-radius: 5px;
            margin: 5px auto;

        }

        .btn {
            float:right;
	        background: rgb(34, 21, 21);
	        padding: 10px 15px;
	        color: #fff;
	        border-radius: 5px;
	        margin-right: 100px;
	        border: none;
            margin: 5px auto;
            margin-bottom: 100px;
        }
        .btn:hover{
	        opacity: 0.9;
        }

    </style>
    
</head>

<body>
<div class="container">

    <h2>POST DÜZENLE</h2>

    <?php foreach($query as $q){?>
        <form method="GET" class="guncelle">
            <input type="text" hidden name="post_id" value="<?php echo $q['post_id'];?>">
            <input type="text" name="post_basligi" placeholder="Blog Başlığı" class="form-control" value="<?php echo $q['post_basligi']?>">
            <textarea name="icerik" class="form-control1"><?php echo $q['icerik']?></textarea>
            <button name="guncelle" class="btn">DÜZENLE/GÜNCELLE</button>
        </form>
    <?php } ?>
</div>  
</body>

</html>