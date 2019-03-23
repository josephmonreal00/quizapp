<!DOCTYPE html>
<html>
    <head>
        <title>Quiz Results</title>
        <meta charset="utf-8">
    </head>
    
    <body>

        <?php 
        
            if(isset($_POST['submit'])) {
                
                if(!isset($_POST['answer1']) || !isset($_POST['answer2']) || !isset($_POST['answer3']) || !isset($_POST['answer4']) || !isset($_POST['answer5']) || !isset($_POST['answer6']) || !isset($_POST['answer7']) || !isset($_POST['answer8']) || !isset($_POST['answer9']) || !isset($_POST['answer10'])) {
                    echo "<h2>You did not submit all information please click the link and finish quiz!</h2>";
                    echo "<br>";
                    echo "<a href='lhtlquiz.php'>Finish Quiz Please!</a>";
                }
                
                else {
                    $databaseConnection = mysqli_connect("localhost", "root", "", "quizzes") or die("Error connecting to database.");
                    
                    foreach($_POST as $key => $val) {
                        $query = "INSERT INTO lhtlquizsubmitted(id, answer) VALUES ('0', '$val')";
                        mysqli_query($databaseConnection, $query);
                        //echo $key . " " . $val . "<br>";
                    } 
                    
                    ?>
        
                <h2>Thank you for your submission here are your results!</h2>
        <?php
        
                }
                // Code to count results and send grade back to user
                    
                    
                // Delete results from lhtlquizsubmitted table
                $deleteResultsFromTable = "DELETE * FROM lhtlquizsubmitted";
                mysqli_query($databaseConnection, $deleteResultsFromTable);
                    
                mysqli_close($databaseConnection);
            }

        ?>
        
        
        </body>

</html>