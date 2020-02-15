<?php

//Insert value message and insert database
try {
    $connection = new PDO('sqlite:chat.db');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = "SELECT * FROM messages ORDER BY utc_time DESC LIMIT 5;";
    $resultset = $connection->query($statement);

    //Show html messages
    foreach ($resultset as $row) {
        echo $row['utc_time'];
        echo ': ';
        echo $row['author'];
        echo ' - ';
        echo $row['message'];
        echo '<br><br>';
    }

    //Close connection and resources
    $connection == null;

} catch (PDOException $error) {
    echo $error->getMessage();
}
