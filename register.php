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
                        <input type = "email" id = "email" name = "email">

                    <label for= "password">Password</label>
                        <input type = "password" id = "password" name = "password">

                    <input type = "submit"> &nbsp;&nbsp;&nbsp;

                </form>