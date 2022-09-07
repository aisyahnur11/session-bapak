<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            color:green;
        }
    </style>
</head>
<body>
    <form action="session.php" method="POST">
        <marquee behavior="" direction=""><h1>login</h1></marquee>
        <div>
            <label>username : </label><br>
            <input type="text" name="username">
        </div>
        <br>
        <div>
            <label>password : </label><br>
            <input type="password" name="password">
        </div>
        <br>
        <input type="submit" value="save">
    </form>
</body>
</html>