<?php

$conn = "";

try {

    $conn = new PDO('mysql:dbname=tasksimit; host=localhost', 'root', 'root');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>