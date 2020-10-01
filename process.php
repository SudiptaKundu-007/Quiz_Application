<?php
include 'db.php'; ?>
<?php session_start();?>
<?php 
if(!isset($_SESSION['score']))
{
    $_SESSION['score']=0;
}
if($_POST)
{
    $query="SELECT * from question";
    $total_questions= mysqli_num_rows(mysqli_query($conn, $query)); 
    $number= $_POST['number'];
    $selected_choice = $_POST['options'];
    $next = $number+1;
    $query="SELECT * from answer where question_number=$number AND is_correct= 1";
    $result= mysqli_query($conn, $query);
    $row= mysqli_fetch_assoc($result); 
    $correct_choice= $row['id'];
   if($selected_choice == $correct_choice)
    {
        $_SESSION['score']++;
    }
    if($number == $total_questions)
    {
        header("location: final.php");
    }
    else{
        header("location: question.php?n=".$next);
    }
}   
?>

