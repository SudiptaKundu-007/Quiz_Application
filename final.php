<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link rel="stylesheet" type="text/css" href="quiz_style.css">
    <style>
    .city{
    background-color: transparent;
    color: white;
    border: 2px solid none;
    margin: 50px;
    padding: 50px;
    text-align:center ;
}
.float-right1{
    width: 5%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background:linear-gradient(to right, pink, red);
    border: 0;
    outline: none;
    border-radius: 30px;
    text-align: center;
}
        </style>

</head>
<body>
<header>
<div class="chair"><p>JAVA QUIZ</p></div>
</header>
<main>

    <div class="chair">
        <div class="city">
        <h2>Your result</h2>
        <p> Congratulation!!! You have completed this test successfully.</p>
        <p>Your <strong>score</strong> is <?php echo $_SESSION['score']; ?>
        </p>
        <?php unset($_SESSION['score']);   ?>
</div>
<a class="float-right1" href="logout.php" ><h3>Logout</h3></a>
    </div>
    

</main>
<footer>
    <div class="container">
    Copyright &copy; TECHNO WORLD
    </div>
    </footer>
</body>
</html>