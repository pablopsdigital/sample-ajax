<?php
$name[] = "Amelia";
$name[] = "Africa";
$name[] = "Adela";
$name[] = "Aida";
$name[] = "Barbara";
$name[] = "Belen";
$name[] = "Blanca";
$name[] = "Camila";
$name[] = "Carmen";
$name[] = "Cecilia";
$name[] = "Cristina";
$name[] = "Daniela";
$name[] = "Diana";
$name[] = "Edurne";
$name[] = "Esmeralda";
$name[] = "Gabriela";
$name[] = "Raquel";

//read request
$q = $_GET["q"];
$hint = "";

//If q bring content, check if there are matches but empty return
if (strlen($q) > 0) {

    //Loop names array
    for ($i = 0; $i < count($name); $i++) {

        if (strtolower($q) == strtolower(substr($name[$i], 0, strlen($q)))) {
            if ($hint == "") {
                $hint = $name[$i];
            } else {
                $hint = $hint . " , " . $name[$i];
            }
        }
    }
} else {
    $hint = "";
}

//If $hint is empty return text no subjects, else return hint content
if ($hint == "") {
    $response = "No subjects";
} else {
    $response = $hint;
}

//return response
echo $response;
