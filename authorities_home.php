<?php 
session_start();
if(!isset($_SESSION['logged']) && $_SESSION['logged'] != true){
    header("Location: login.php");
}
?>

<html>
    <body>

        <label for = "Head">
            <h1>Sifal Medications</h1>
            <?php 
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "project";
            $connection = mysqli_connect($hostname, $username, $password,$database);

            $getUserInfo = "SELECT * FROM passenger_register where id=". $_SESSION['id'];
            $userData = mysqli_fetch_assoc(mysqli_query($connection, $getUserInfo));

            echo "<h3>".$userData['name']."</h3>";
            echo "<h3>".$userData['dob']."</h3>";
            echo "<h3>".$userData['password']."</h3>";
            ?>
        </label>
        <form method = "get">
        <html>
<body>
<table border = "5">
    <tr>
        <th>Name<id>
        <th>Date</th>
        <th>Category</th>
        <th>Time</th>
        <th>Age</th>
    </tr>
    <?php
    if(!$connection){
        echo "Fail";
    }else{
        $query = "select * from booking";
        $result = mysqli_query($connection, $query);

    }
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['category']."</td>";
        echo "<td>".$row['time']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "</tr>";
    }

    echo $userData['residence'];
    ?>
</table>

<a href="./login.php">Logout</a>
    </body>
</html>
