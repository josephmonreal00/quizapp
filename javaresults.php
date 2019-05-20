<!DOCTYPE html>
<html>
    <head>
        <title>Quiz Results</title>
        <meta charset="utf-8">
        <link href="styles/results.css" type="text/css" rel="stylesheet">
    </head>
    
    <body>

        <?php 
        
            if(isset($_POST['submit'])) {
                
                if(!isset($_POST['answer1']) || !isset($_POST['answer2']) || !isset($_POST['answer3']) || !isset($_POST['answer4']) || !isset($_POST['answer5']) || !isset($_POST['answer6']) || !isset($_POST['answer7']) || !isset($_POST['answer8']) || !isset($_POST['answer9']) || !isset($_POST['answer10'])) {
                    echo "<h2>You did not submit all information please click finish quiz link.</h2>";
                    echo "<br>";
                    echo "<a href='javaquiz.php'>Finish Quiz Please!</a>";
                }
                
                else {
                    
                    foreach($_POST as $key => $val) {
                        $databaseConnection = mysqli_connect("localhost", "root", "", "quizzes") or die("Error connecting to database.");
                        $query = "INSERT INTO javasubmitted(id, answer) VALUES ('0', '$val')";
                        mysqli_query($databaseConnection, $query);
                        //echo $key . " " . $val . "<br>";
                        mysqli_close($databaseConnection);
                        
                    }
                    
                    $databaseConnection = mysqli_connect("localhost", "root", "", "quizzes") or die("Error connecting to database.");
                    // Compare the results
                    
                    // Query correct answers table
                    $queryForAnswers = "SELECT correctanswers FROM javaanswers";
                    $resourceIDForCAnswers = mysqli_query($databaseConnection, $queryForAnswers) or die ("Error querying the table: 'javaanswers'.");
                    
                    // Query lhtlquizsubmitted
                    $queryForSubmitted = "SELECT answer FROM javasubmitted";
                    $resourceIDForSubmitted = mysqli_query($databaseConnection, $queryForSubmitted) or die ("Error querying the table: 'javasubmitted'.");
                    
                    // Keep track of correct answers
                    
                    $correct = 0;
                    
                    
                    // Keep track of incorrect answers
                    
                    $incorrect = 0;
                    
                    $correctAnswers = array();
                    $i = 0;
                    while($rowForAnswers = mysqli_fetch_array($resourceIDForCAnswers)){
                        $correctAnswers[$i] = $rowForAnswers['correctanswers'];
                        //echo $rowForAnswers['correctanswers'];
                        //echo "<br>";
                        $i++;
                    }

                    
                    $submittedAnswers = array();
                    $j = 0;
                    while($rowForSubmissions = mysqli_fetch_array($resourceIDForSubmitted)){
                        $submittedAnswers[$j] = $rowForSubmissions['answer'];
                        //echo $rowForAnswers['correctanswers'];
                        //echo "<br>";
                        $j++;
                    }

                    $correct = 0;
                    $incorrect = 0;
                    for($z = 0; $z < sizeof($submittedAnswers) - 1; $z++) {
                        if($submittedAnswers[$z] == $correctAnswers[$z]) {
                            $correct += 10;
                        }
                        else {
                            $incorrect += 10;
                        }
                        //echo $submittedAnswers[$z];
                        //echo "<br>";
                    }
                    
                    echo "Correct Anwers: " . $correct/10;
                    echo "<br>";
                    echo "Incorrect Answers: " . $incorrect/10;
                    echo "<br>";
                    echo "Your total score is a " . ($correct/10) * 10 . "!";
                    
                    
                    
                    // DELETING THE results - THIS WORKS
                    //echo "Deleing the results";
                    $db = mysqli_connect("localhost", "root", "", "quizzes") or die("Error connecting to database.");
                    $deleteResults = "DELETE FROM javasubmitted";
                    mysqli_query($db, $deleteResults);
                    mysqli_close($db);
                }
                
            }       
        ?>
        
        <br>
        <a href="javaquiz.php">Retake Exam!</a>
        <br>
        <a href="index.php">Home!</a>
        </body>

</html>