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
    <title>Post Ekle</title>

    <style>
        body{
            background:url("post_ekle.jpg") no-repeat;
            background-size: 105%;
        }
        .container{
            text-align: center;
            width: 800px;
            padding: 30px;
            border: 5px solid #000;
            margin:5px auto;
            margin-top: 360px;
            border-radius: 15px;
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
	         width: 95%;
             height: 50px;
	        padding: 20px;
	        border-radius: 5px;

        }

        .btn {
	        background: rgb(34, 21, 21);
	        padding: 10px 15px;
	        color: #fff;
	        border-radius: 5px;
            margin-top: 10px;
	        margin-right: 10px;
	        border: none;
        }

        button:hover{
	        opacity: 0.9;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="GET">
            <input type="text" name="post_basligi" placeholder="Blog Başlığı" class="form-control"><br><br>
            <textarea name="icerik" class="form-control1"></textarea><br>
            <button name="yeni_post" class="btn">POST EKLE</button>
        </form>
    </div>  
</body>

</html>