<link rel="stylesheet" href="./style.css">
<?php 
session_start();
if(!isset($_SESSION['logged']) && $_SESSION['logged'] != true){
    header("Location: login.php");
}
?>
<h3>
<table>
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

            echo "<h3>Name: ".$userData['name']."</h3>"; 
            echo "<h3>Email Address: ".$userData['email']."</h3>";
           
            ?>
        </label>
            <td>
                <form method="post" action = "book.php">
                    <h1>Book an Appointment</h1>
                    <label>Name:</label>
                    <input type = "text" name="name"><br><br>
                    <label>Age:&nbsp;&nbsp;&nbsp;</label>
                    <input type = "number" name= "age"><br><br>
                    
                    <label>Category: &nbsp;</label>
                        <input type = "radio" name="category" value="Cardiologist">Cardiologist
                        <input type = "radio" name="category" value="Orthopedics"> Orthopedics 
                        <input type = "radio" name="category" value="Opthalmologist">Opthalmologist
                        <input type = "radio" name="category" value=" Psychiatrist">Psychiatrist<br>
                        <input type = "radio" name="category" value=" Paediatrician">Paediatrician
                        <input type = "radio" name="category" value=" Pulmonologist">Pulmonologist
                        <input type = "radio" name="category" value=" Endocrinologist">Endocrinologist
                        <input type = "radio" name="category" value=" Neurologist">Neurologist


                       
                        <br>
                        <br>
                    <label>Time:&nbsp;&nbsp;&nbsp;</label>
                    <input type = "time" name= "time"><br><br>
                    <br>
                    <br>
                    <label for="date" >Date</label>
                    <input type = "date" id="date" name="date">
                    <br>
                    <br>

                    <input type = "submit"> &nbsp;&nbsp;&nbsp;

                </form>