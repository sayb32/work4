<!DOCTYPE html>
<html>
    <head>
        <title> User Page </title>
    </head>
    <body>
        <form action="/index?handler=Question" method="post">
        <h3>Welcome back <?= $userFound->getUsername(); ?> </h3>
        </form>
    </body>
</html>
