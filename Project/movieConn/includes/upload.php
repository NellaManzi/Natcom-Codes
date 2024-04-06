<?php
$conn = mysqli_connect("localhost", "root", "", "moviesConn");

$name = $_POST['name'];
$description = $_POST['desc'];
$img = $_FILES['img'];
$img_explode = explode('.', $img['name']);
$ext = end($img_explode);
$new_name = date('U') . "." .$ext;
move_uploaded_file($img['tmp_name'], '../images/'.$new_name);

$sql = "INSERT INTO movies (name, description, img) VALUES ('$name', '$description', '$new_name')";
$res = mysqli_query($conn, $sql);
if($res > 0) header("location: ../admin.php?upload=success");
else header("location: ../admin.php?upload=failed");