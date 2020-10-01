<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="quiz_style.css">
    
</head>

<body>
    <div class="chair">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social_icons">
                <img src="fb.jpg">
                <img src="twitter.jpg">
                <img src="t.png">
            </div>
            <form id="login" class="input-group" action="validation.php" method="post">
                <input type="text" name=username class="input-field" placeholder="User Id" required>
                <input type="text" name=password class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log In</button>
            </form>
            <form id="register" class="input-group" action="register.php" method="post">
                <input type="text" class="input-field" placeholder="User Id" name=username  required>
                <input type="text" class="input-field" placeholder="Enter Password" name=password required>
                <input type="email" class="input-field" placeholder="Email ID" name=email required>
                <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>

    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }

    </script>

</body>

</html>