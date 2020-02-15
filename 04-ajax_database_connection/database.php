<?php

$customerName = $_GET['customerName'];

try {

    $connection = new PDO('sqlite:customers.db');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = "SELECT * FROM customers;";
    $resultset = $connection->query($statement);

    //Return info customer
    foreach ($resultset as $row) {

        if ($row['name'] == $customerName) {
            echo "Name: " . $row['name'] . "<br>";
            echo "Address: " . $row['address'] . "<br>";
            echo "Phone: " . $row['phone'] . "<br>";
            echo "Zip code: " . $row['zip_code'] . "<br>";
            echo "City: " . $row['city'] . "<br>";
            echo "Country: " . $row['country'] . "<br>";
            echo "<br>";
        }
    }

    //Close connection and resources
    $connection == null;
} catch (PDOException $error) {
    echo $error->getMessage();
}
