<?php
echo "Folgende Dateien wurden eingegeben" . "<br>";
echo "Nachname: " . $_POST["lastName"] . "<br>";
echo "Wohnort: " . $_POST["city"];


echo "<pre>";
print_r($_POST);
echo "<pre>";

if(!empty($_POST["interesse"])){
    echo "<p> Folgende Interessen wurden gew�hlt<br>";
    echo implode(", ", $_POST["interesse"]) . "</p>"; 
}
