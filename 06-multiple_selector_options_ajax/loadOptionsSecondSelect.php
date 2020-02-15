<?php

$typeselected = $_GET['typeselected'];

echo '<select name="secondSelectValues">';

try {
    $connection = new PDO('sqlite:options.db');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = "SELECT * FROM animal_vegetable_mineral;";
    $resultset = $connection->query($statement);

    //Load html with options types
    foreach ($resultset as $row) {
        if ($row['type'] == strtolower($typeselected)) {
            echo "<option value='" . $row['element'] . "'>" . $row['element'] . "</option>";
        }
    }

    //Close connection and resources
    $connection == null;
} catch (PDOException $error) {
    echo $error->getMessage();
}

echo '</select>';
