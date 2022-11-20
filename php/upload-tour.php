<?php
require "connect.php";
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_FILES['image']['name'];

$existed_image = mysqli_query($con, "SELECT * FROM `tours` WHERE `tours_image` = '" . $image . "'");

if (mysqli_num_rows($existed_image)) {
    echo "Такой файл уже существует!";
    echo "<a href='../admin/'>Вернуться назад</a>";
} else {
    move_uploaded_file($_FILES['image']['tmp_name'], '../images/tours/'.$_FILES['image']['name']);
    $query = mysqli_query($con, "INSERT INTO `tours` (`tours_title`, `tours_description`, `tours_image`, `tours_price`) VALUES ('".$title."', '".$description."', '".$image."', '".$price."')");
    header('Location: ../admin/');
}
?>