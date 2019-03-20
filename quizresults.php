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
                    
                    

                    if(isset($_POST['answer1'])) {
                        echo $_POST['answer1']; 
                        echo "<br>";
                    }
                    

                    if(isset($_POST['answer2'])) {
                        echo $_POST['answer2'];
                        echo "<br>";
                    }

                    if(isset($_POST['answer3'])) {
                        echo $_POST['answer3'];
                        echo "<br>";
                    }

                    if(isset($_POST['answer4'])) {
                        echo $_POST['answer4'];
                        echo "<br>";
                    }

                    if(isset($_POST['answer5'])) {
                        echo $_POST['answer5'];
                        echo "<br>";
                    }


                    if(isset($_POST['answer6'])) {
                        echo $_POST['answer6'];
                        echo "<br>";
                    }


                    if(isset($_POST['answer7'])) {
                        echo $_POST['answer7'];
                        echo "<br>";
                    }


                    if(isset($_POST['answer8'])) {
                        echo $_POST['answer8'];
                        echo "<br>";
                    }


                    if(isset($_POST['answer9'])) {
                        echo $_POST['answer9'];
                        echo "<br>";
                    }


                    if(isset($_POST['answer10'])) {
                        echo $_POST['answer10'];
                        echo "<br>";
                    }
                }
            }

        ?>
        
        
        </body>

</html>