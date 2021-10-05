<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--PHP Control for logout -->
    <div class="form">
    <p>Hello, <?php echo $_SESSION[ 'userID']; ?>!</p>
    <p>WELCOME TO MY DASHBOARD</p>
    <a href="http://localhost/tony/Roach%20Games/Logout.php/">Logout</a>
    </div>
</body>
</html>