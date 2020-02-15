<?php


$message = $_GET['message'];

//Read value message and insert database
try {
    $connection = new PDO('sqlite:chat.db');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = "INSERT INTO messages VALUES ('".date('U')."', 'jocarsa','".$message."');";
    $connection->query($statement);

    //Close connection and resources
    $connection == null;

    //Return index.php
    echo '<meta http-equiv="refresh" content="0; URL=index.php">';


} catch (PDOException $error) {
    echo $error->getMessage();
}
