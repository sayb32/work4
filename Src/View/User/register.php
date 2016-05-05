<!DOCTYPE html>
 <form action ="/index.php?handler=Auth&action=doRegister" method="post">
            Username:
            <input type ="text" name ="username" value="sayb32" required="true"><br>
            Last Name:
            <input type ="text" name ="lastName" value="Rus" required="true"><br>
            First Name:
            <input type ="text" name ="firstName" value="Sergiu" required="true"><br>
            Email:
            <input type ="text" name ="email" value="rus.sergiu.adrian@gmail.com" required="true"><br>
            Password:
            <input type ="password" name ="passField" value="stop123" required="true"><br>
            <button type ="submit" value="Submit">Register</button>
            <p><strong>*If you have already an account <a href= "/index.php?handler=auth&action=login">Login</a></strong></p>
</form>
