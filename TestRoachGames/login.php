<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="sweetalert/jquery-3.6.0.min.js"></script>
    <script src="sweetalert/sweetalert2.all.min.js"></script>
</head>
<body>  
</body>
</html>

<?php
    // Passing Database Connection String
    require('dbConnection.php');

    // Starting Authentication Session Process
    session_start();

    if(isset($_POST['userID'])){
        // Removing Backslashes
        $UserID = stripslashes($_REQUEST['userID']);
        $Password = stripslashes($_REQUEST['password']);

        // Escaping Special Characters in Strings
        $UserID = mysqli_real_escape_string($con, $UserID);
        $Password = mysqli_real_escape_string($con, $Password);

        // Checking User Exist In Database
        $query = "SELECT * FROM tonyroachtable WHERE userID = '$UserID' AND password='" .md5($Password) . "'";

        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        if($rows == 1){
            $_SESSION['userID'] = $UserID;
            echo '<script type="text/javascript">
                $(document).ready(function(){
                    swal.fire({
                        title: "Login Successful",
                        text: "User Authentication Successful",
                        icon: "success",
                    }).then(function(){
                        window.location = "http://localhost/tony/Roach%20Games/";
            </script>';
        }
        else 
        {
            echo '<script type="text/javascript">
                $(document).ready(function(){
                    swal.fire({
                        title: "Login Failed",
                        text: "User Authentication Failed",
                        icon: "error",
                    }).then(function(){
                        window.location="http://localhost/tony/Roach%20Games/";
            </script>';
        }

        }

    

?>