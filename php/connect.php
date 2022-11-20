<?php
try {
    // $con = new PDO('mysql:host=localhost;dbname=travel', 'root', '');
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "travel"
    );
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage ();
    die();
}
?>