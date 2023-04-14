<?php
session_start();
$_SESSION['logged'] = null;
$_SESSION['id'] = null;
?>

<html>
<style>
    /* Set background color for the page */
body {
  background-color: #f5f5f5;
}

/* Style the label for the header */
label[for="head"] {
  font-size: 24px;
  font-weight: bold;
  color: #3c3c3c;
}

/* Style the form */
form {
  margin: 20px auto;
  max-width: 500px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style the labels for the form inputs */
label {
  display: block;
  margin-bottom: 10px;
  color: #555;
}

/* Style the form inputs */
input[type="email"],
input[type="password"],
input[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

/* Style the submit button */
input[type="submit"] {
  background-color: #3c3c3c;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
}

/* Style the register button */
button {
  align-items: center;
  background-color: #3c3c3c;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}

/* Position the register button */
a[href="register.php"] {
  background-color: #3c3c3c;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
}



</style>


<body>
  <label for = "head" class>
    <center><h3>Sifal Medications</h3></center>
  </head>
    
    <form method="post" action="./config.php" enctype="multipart/form-data">
        <label>Email:</label>
        <input type="email" name="email"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit">
        <br>
        <br>

        New? Register now--><a href = "register.php"><button>Register</a>
    </form>
</body>

</html>