<?php
require "../php/connect.php";
$checks = $_GET['tours'];
$count = count($checks);
mysqli_query($con, "UPDATE `tours` SET `tours_slider` = 0");
for ($i=0; $i < $count; $i++) {
    mysqli_query($con, "UPDATE `tours` SET `tours_slider` = 1 WHERE `tours_id` = " . $checks[$i]);
}
header('Location: ../admin/');
?>