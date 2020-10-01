<?php
session_start();
include 'db.php';
if(!isset($_SESSION['username']))
{
header('location: login.php');

}

$query ="SELECT * from question";
$total_questions = mysqli_num_rows(mysqli_query($conn, $query));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="quiz_style.css">
<style>
    .city{
    background-color: transparent;
    color: white;
    border: 2px solid none;
    margin: 20px;
    padding: 20px;
}
</style>
</head>
<body>
<div class="chair">
<a href="logout.php" ><h3>Logout</h3></a>
      <h1>Welcome 
        <?php
    echo $_SESSION['username'];
    ?>
   </h1>
    <div class="city">
    <h2>Check your JAVA knowledge</h2>
    <p><h4>Here is some multiple choice questions to test your JAVA knowledge:</h4></p>
    <ul >
         <li><strong>Number of Questions:</strong>
         <?php
         echo $total_questions; ?>
          </li>
         <li><strong>Type:&nbsp;</strong>Multiple Choice</li>
         <li><strong>Estimated Time:</strong>
         <?php echo $total_questions*1.5; ?>
        </li>
    </ul>
    &nbsp;&nbsp;&nbsp;
   <h3> <a class="float-right" href="question.php?n=1"> 
<button type="submit">Start Quiz</button></a></h3>
</div>
</div>

</body>
</html>