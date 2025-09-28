<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Name: " . $_POST["name"] . "<br>";
    echo "Email: " . $_POST["email"];
}