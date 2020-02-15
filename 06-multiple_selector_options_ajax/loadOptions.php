<?php

//File load options first select
try {
    $connection = new PDO('sqlite:options.db');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = "SELECT * FROM types;";
    $resultset = $connection->query($statement);

    //Load html with options types
    foreach ($resultset as $row) {
        echo "<option value='" . $row['type'] . "'>" . $row['type'] . "</option>";
    }

    //Close connection and resources
    $connection == null;
} catch (PDOException $error) {
    echo $error->getMessage();
}
