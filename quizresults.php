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
                    
                    foreach($_POST as $key => $val) {
                        $databaseConnection = mysqli_connect("localhost", "root", "", "quizzes") or die("Error connecting to database.");
                        $query = "INSERT INTO lhtlquizsubmitted(id, answer) VALUES ('0', '$val')";
                        mysqli_query($databaseConnection, $query);
                        //echo $key . " " . $val . "<br>";
                        mysqli_close($databaseConnection);
                        
                    }
                    
                    $databaseConnection = mysqli_connect("localhost", "root", "", "quizzes") or die("Error connecting to database.");
                    // Compare the results
                    
                    // Query correct answers table
                    $queryForAnswers = "SELECT correctanswers FROM lhtlcorrectanswer";
                    $resourceIDForCAnswers = mysqli_query($databaseConnection, $queryForAnswers) or die ("Error querying the table: 'lhtlcorrectanswer'.");
                    
                    // Query lhtlquizsubmitted
                    $queryForSubmitted = "SELECT answer FROM lhtlquizsubmitted";
                    $resourceIDForSubmitted = mysqli_query($databaseConnection, $queryForSubmitted) or die ("Error querying the table: 'lhtlquizsubmitted'.");
                    
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
                    /*
                    echo $correctAnswers[0];
                    echo "<br>";
                    echo $correctAnswers[1];
                    echo "<br>";
                    echo $correctAnswers[2];
                    echo "<br>";
                    echo $correctAnswers[3];
                    echo "<br>";
                    echo $correctAnswers[4];
                    echo "<br>";
                    echo $correctAnswers[5];
                    echo "<br>";
                    echo $correctAnswers[6];
                    echo "<br>";
                    echo $correctAnswers[7];
                    echo "<br>";
                    echo $correctAnswers[8];
                    echo "<br>";
                    echo $correctAnswers[9];
                    */
                    
                    $submittedAnswers = array();
                    $j = 0;
                    while($rowForSubmissions = mysqli_fetch_array($resourceIDForSubmitted)){
                        $submittedAnswers[$j] = $rowForSubmissions['answer'];
                        //echo $rowForAnswers['correctanswers'];
                        //echo "<br>";
                        $j++;
                    }
                    /*
                    echo $submittedAnswers[0];
                    echo "<br>";
                    echo $submittedAnswers[1];
                    echo "<br>";
                    echo $submittedAnswers[2];
                    echo "<br>";
                    echo $submittedAnswers[3];
                    echo "<br>";
                    echo $submittedAnswers[4];
                    echo "<br>";
                    echo $submittedAnswers[5];
                    echo "<br>";
                    echo $submittedAnswers[6];
                    echo "<br>";
                    echo $submittedAnswers[7];
                    echo "<br>";
                    echo $submittedAnswers[8];
                    echo "<br>";
                    echo $submittedAnswers[9];
                    */
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
                    
                    //echo "The length of the array for submitted answers is " . sizeof($submittedAnswers) . "!";
                    
                   
                    
                    /*
                    while($rowForAnswers = mysqli_fetch_array($resourceIDForCAnswers) && $rowForSubmissions = mysqli_fetch_array($resourceIDForSubmitted)) {
                        if($rowForAnswers['correctanswers'] == $rowForSubmissions['answer']) {
                            $correct += 10;
                        }
                        else {
                            $incorrect += 10;
                        }
                    }
                    
                    echo "You got this amount of questions incorrect " . $incorrect/10 . " and this amount of questions correct " . $correct/10 . " which amounts to " . ($correct) . " points total on your exam.";
                    
                    */
                    
                    
                    
                    
                    
                    // DELETING THE results - THIS WORKS
                    //echo "Deleing the results";
                    $db = mysqli_connect("localhost", "root", "", "quizzes") or die("Error connecting to database.");
                    $deleteResults = "DELETE FROM lhtlquizsubmitted";
                    mysqli_query($db, $deleteResults);
                    mysqli_close($db);
                }
                
            }       
        ?>
        
        
        </body>

</html>