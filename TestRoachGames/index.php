<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author"   content="Rebel">
    <meta name="description" content="Login and signup Page">
    <title>www.rebelTechnologies.com</title>

    <link href="css/style.css" rel="stylesheet"  type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="Main">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>

        <button type="button" class="toggle-btn" onclick="Signin()">Signin</button> 
        <button type="button" class="toggle-btn" onclick="Signup()">Signup</button>
        </div>

        <div class="social-media">
            <i class="fa fa-google-plus" aria-hidden="true" id="google-plus"></i>
            <i class="fa fa-twitter" aria-hidden="true" id="twitter"></i>
            <i class="fa fa-facebook" aria-hidden="true" id="facebook"></i>
        </div>
    
        <form id="Signin" class="input-group" method="post" action="Login.php">
            <input type="text" class="input-field" name="userID" 
            placeholder="Username" equired data-error="User Name is Highly Required"
            required>
            <i class="fa fa-envelope-o" aria-hidden="true" id="envolope"></i><br>

            <input type="Password" class="input-field" name="password"
            placeholder="Password" equired data-error="Password is Highly Required"
            required>
            <i class="fa fa-lock" aria-hidden="true" id="lock"></i><br>
       
            <label><input type="checkbox" class="check-box">Remember Password</label>

            <button type="submit" class="submit-btn" name="submit">Signin</button>
        </form>


        <form id="Signup" class="input-group" method="post" action="Signup.php">
            <input type="text" class="input-field" name="signuserID" 
            placeholder="User ID" equired data-error="User ID is required" required>
            <i class="fa fa-user" aria-hidden="true" id="userid"></i><br>

            <input type="email" class="input-field" name="signemail"
            placeholder="example@gmail.com" required>
            <i class="fa fa-envelope" aria-hidden="true" id="envolope"></i><br>

            <input type="password" class="input-field" name="signpassword"
            placeholder="Password" equired data-error="Password is required" required>
            <i class="fa fa-lock" aria-hidden="true" id="lock"></i><br>

            <label><input type="checkbox" class="check-box">I agree to the terms & conditions</label>

            <button type="submit" class="submit-btn" name="signSubmit">Register</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    var x = document.getElementById("Signin")
    var y = document.getElementById("Signup")
    var z = document.getElementById("btn")
   
    function Signup(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
   
    function Signin(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }
    </script>



</body>
</html>