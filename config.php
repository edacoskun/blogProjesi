<?php

$servername = "";
$username = "";
$password = "";
$db = "";

$conn = new mysqli($servername, $username, $password ,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM postlar";
$query = mysqli_query($conn, $sql);

if(isset($_REQUEST["yeni_post"])){
    $post_basligi = $_REQUEST["post_basligi"];
    $icerik = $_REQUEST["icerik"];
    
    $sql = "INSERT INTO postlar(post_basligi, icerik) VALUES ('$post_basligi', '$icerik')";
    mysqli_query($conn, $sql);

    header("Location: home.php?info=added");
    exit();
}

if(isset($_REQUEST['post_id'])){
    $post_id = $_REQUEST["post_id"];

    $sql = "SELECT * FROM postlar 
            WHERE post_id = $post_id";
    $query = mysqli_query($conn, $sql);
}

if(isset($_REQUEST['guncelle'])){
    $post_id = $_REQUEST["post_id"];
    $post_basligi = $_REQUEST["post_basligi"];
    $icerik = $_REQUEST["icerik"];

    $sql = "UPDATE postlar 
            SET post_basligi = '$post_basligi', icerik = '$icerik' 
            WHERE post_id = $post_id";
    mysqli_query($conn, $sql);

    header("Location: home.php?info=updated");
    exit();
}

if(isset($_REQUEST['sil'])){
    $post_id = $_REQUEST["post_id"];

    $sql = "DELETE FROM postlar 
            WHERE post_id = $post_id";
    $query = mysqli_query($conn, $sql);

    header("Location: home.php?info=deleted");
    exit();
}


?>

