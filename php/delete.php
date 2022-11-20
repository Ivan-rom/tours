<?php
require "connect.php";
mysqli_query($con, "DELETE FROM `tours` WHERE `tours_id` = " . $_GET['id']);
header('Location: ../admin/');
?>