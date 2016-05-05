<!DOCTYPE html>
 <form action ="/index.php?handler=Auth&action=doLogin" method="post">
    Username:
    <input type ="text" name ="username" value="admin" required="true"><br>
    Password:
    <input type ="password" name ="passField" value="admin" required="true"><br>
    <button type ="submit" value="Submit">Login</button>
    <p><strong><a href= "index.php?handler=auth&action=forgot">Forgot password? </a></strong></p>
    <p><strong><a href= "index.php?handler=auth&action=register">New here? </a></strong></p>
</form>