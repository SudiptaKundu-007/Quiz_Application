<?php
include 'db.php';
session_start();
$number= $_GET['n'];
$query= "SELECT * from question where question_number= $number ";
$result= mysqli_query($conn, $query);
$question= mysqli_fetch_assoc($result);
$query="SELECT * from answer where question_number= $number";
$options=mysqli_query($conn, $query);
$query="SELECT * from question";
$total_questions= mysqli_num_rows(mysqli_query($conn, $query)); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="quiz_style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="container">
            <p>QUIZ</p>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current">Question <?php echo $number;
            ?> of <?php echo $total_questions; ?>
            </div>
            <p class="question">
                <?php
                    echo $question['question_text'];
            ?> 
            </p>
              <form method="POST" action="process.php">
                <ul class="optionss">
                    <?php 
                while($row = mysqli_fetch_assoc($options))
                    { 
                    ?>
                        <li> <input type="radio" name="options" value="
                        <?php echo $row ['id'];?>">
                        <?php
                        echo $row['options'];
                        ?>
                        
                        </li>
                    <?php
                    }
                    ?>
                   
        
                </ul>
                <input type="hidden" name="number" value="<?php echo $number; ?>">
                <input type="submit" name="submit" value="Submit">   
            </form>

        </div>
    </main>
    <footer>
    <div class="container">
    Copyright &copy; SUDIPTA KUNDU
    </div>
    </footer>
    
</body>
</html>