<?php
$textInput = $_GET['textInput'];

try {
    $connection = new PDO('sqlite:users.db');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = "SELECT * FROM users;";
    $resultset = $connection->query($statement);

    //Html result
    foreach ($resultset as $row) {

        if ($row['user'] == $textInput) {
            echo "<div id='' class='user_true'></div>";
        } else {
            echo "<div id='' class='user_false'></div>";
        }
    }

    //Close connection and resources
    $connection == null;
    
} catch (PDOException $error) {
    echo $error->getMessage();
}
