<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "project";
$connection = mysqli_connect($hostname, $username, $password, $database);

$query = "insert into passenger_register(name, age, gender, dob, citizenship, residence, email, password) values('" . $_POST['name'] . "','" . $_POST['age'] . "','" . $_POST['gender'] . "','" . $_POST['dob'] . "','" . $_POST['citizenship'] . "','" . $_POST['residence'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "')";
if ($connection->query($query)) {
    echo "Account Created <a href='login.php'><button>Continue to login</button></a>";
} else {
    echo "Failed to insert";
}
