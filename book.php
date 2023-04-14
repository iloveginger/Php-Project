<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "project";
$connection = mysqli_connect($hostname, $username, $password, $database);

$query = "insert into booking(name, date, category, time, age) values('" . $_POST['name'] . "','" . $_POST['date'] . "','" . $_POST['category'] . "','" . $_POST['time'] . "','" . $_POST['age'] . "')";
if ($connection->query($query)) {
    echo "Appointment Booked<br>";
    echo "Thank You for booking";
} else {
    echo "Failed to insert";
}
