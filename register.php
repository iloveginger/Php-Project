<html>

<body>
    <style>
/* Apply basic styles to the form elements */
form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

form input[type="text"],
form input[type="email"],
form input[type="password"],
form select {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  font-size: 16px;
}

form input[type="number"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  font-size: 16px;
}

form input[type="radio"] {
  margin: 5px;
}

form label[for="date"],
form label[for="residence"] {
  margin-top: 10px;
  display: inline-block;
}

form input[type="date"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  font-size: 16px;
}

/* Style the submit button */
form input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 10px;
}

/* Style the table and table cell */
table {
  margin: 20px auto;
  max-width: 800px;
  background-color: #fff;
  border-collapse: collapse;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table td {
  padding: 10px;
  border: 1px solid #ccc;
}

/* Apply some styles to the radio buttons and select menu */
form input[type="radio"] + label:before {
  content: '';
  display: inline-block;
  width: 12px;
  height: 12px;
  margin-right: 5px;
  border-radius: 50%;
  border: 1px solid #ccc;
  background-color: #fff;
}

form input[type="radio"]:checked + label:before {
  background-color: #4CAF50;
}

select {
  appearance: none;
  -webkit-appearance: none;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  cursor: pointer;
}

    </style>
 <label for = "head">
    <center><h3>Create an Account</h3></center>
</label>
<table>
            <td>
                <form method="post" action = "insert.php">
                    <label>Name:</label>
                    <input type = "text" name="name"><br><br>
                    <label>Age:&nbsp;&nbsp;&nbsp;</label>
                    <input type = "number" name= "age"><br><br>

                    <label>Gender: &nbsp;</label>
                        <input type = "radio" name="gender" value="Male"> Male &nbsp;
                        <input type = "radio" name="gender" value="Female"> Female 

                       
                        <br>
                        <br>

                    <label>Citizenship: &nbsp;</label>
                        <select name="citizenship">
                        <option value = "Nepal">Nepal</option>
                        <option value = "India">India</option>
                        </select>
                    <br>
                    <br>
                    <label for="date" >Date of Birth</label>
                    <input type = "date" id="date" name="dob">
                    <br>
                    <br>
                    <label for = "Residence">Residence</label>
                        <input type = "Text" id = "residence" name= "residence">
                    <br>
                    <br>

                    <label for= "email">Email</label>
                        <input type = "email" id = "email" name = "email"><br>

                    <label for= "password">Password</label>
                        <input type = "password" id = "password" name = "password">

                    <input type = "submit"> &nbsp;&nbsp;&nbsp;

                </form>
</td>
</table>
</body>
</html>