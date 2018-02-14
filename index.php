<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <header id="mainHeader" class="container-fluid flexIn green">
        <h2>Cole's CMS</h2>
    </header>
    <div class="container-flud flexIn">
        <div id="mainLogin" class="container beige flexIn">
            <form action="admin_login.php" method="post">
            <p>Username:</p>
            <input type="text" name="username" value="" class="input-group">
            <br>
            <p>Password:</p>
            <input type="text" name="password" value="" class="input-group">
            <br>
            <input type="submit" name="submit" value="Login" class="btn btn-info m-1">
            </form>
        </div>
    </div>
</body>
</html>