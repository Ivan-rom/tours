<?php
require "connect.php";
$file = mysqli_fetch_assoc(mysqli_query($con, "SELECT `tours_image` FROM `tours` WHERE `tours_id` = " . $_GET['id']));
unlink("../images/tours/" . $file['tours_image']);
mysqli_query($con, "DELETE FROM `tours` WHERE `tours_id` = " . $_GET['id']);
header('Location: ../admin/');
?>