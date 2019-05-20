<!DOCTYPE html>
<html>
    <head>
        <title>Learning How To Learn Quiz!</title>
        <meta charset="utf-8">
        <link href="styles/stylequiz.css" type="text/css" rel="stylesheet">
    </head>
    
    <body>
        
        <!-- Here we will enter PHP -->
        
        <?php 
        
            // Connecting to the database
        
            $dbc = mysqli_connect("localhost", "root", "", "quizzes") or die("Error connecting to database.");
    
            // The query for the table and too retrieve data
        
            $query = "SELECT id, question FROM learnhowtable";
        
            // Communication with the MySQL database and sending a query
        
            $resourceID = mysqli_query($dbc, $query) or die ("Error querying the table: 'learnhowtable'.");
        
            
            // Iterating through the table and its rows each iteration will return a row and its columns
        
            while($row = mysqli_fetch_array($resourceID)) {

                
                if($row['id'] == 1) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 1
                    $querySet1 = "SELECT options FROM lhtloptionsset1";
                    
                    // Retrieving the resource id 
                    $resourseID4q1set = mysqli_query($dbc,$querySet1) or die("Error querying the table: 'lhtloptionsset1'.");
                    
        ?>
        
                    <!-- Jumping back into HTML. Creating the form. -->
        
                    <?php //echo $_SERVER['PHP_SELF']; ?>
        
                    <form action="quizresults.php" method="post">
            
            
                    <!-- Jumping back into PHP. -->
        <?php
                    
                    while($rowoptions1 = mysqli_fetch_array($resourseID4q1set)) {
                        
        ?>
            
                    <!--
                    Jumping back into HTML.
                    -->
                        <input type="radio" name="answer1" value="<?php echo $rowoptions1['options'];?>"><?php echo $rowoptions1['options'];?>
                        <br>
        
                    <!--
                    Jumping back into PHP.
                    -->
            
        <?php
                    } // Ending curly brace for while loop. 
                }// Ending curly brace for if statement
        ?>
         
             
        <?php
                if($row['id'] == 2) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 2
                    $querySet2 = "SELECT options FROM lhtloptionsset2";
                    
                    // Retrieving the resource id 
                    $resourseID4q2set = mysqli_query($dbc,$querySet2) or die("Error querying the table: 'lhtloptionsset2'.");
                    
                    
                    while($rowoptions2 = mysqli_fetch_array($resourseID4q2set)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer2" value="<?php echo $rowoptions2['options'];?>"><?php echo $rowoptions2['options'];?>
                        <br>
                        
        <!-- Jumping back into PHP. -->
                        
        <?php
                    } // Ending curly brace for while loop.
                } // Ending curly brace for if statement  
        ?>
        
               
        <?php
                if($row['id'] == 3) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 2
                    $querySet3 = "SELECT options FROM lhtloptionsset3";
                    
                    // Retrieving the resource id 
                    $resourseID4q3set = mysqli_query($dbc,$querySet3) or die("Error querying the table: 'lhtloptionsset3'.");
                    
                    
                    while($rowoptions3 = mysqli_fetch_array($resourseID4q3set)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer3" value="<?php echo $rowoptions3['options'];?>"><?php echo $rowoptions3['options'];?>
                        <br>
                        
        <!-- Jumping back into PHP. -->
                        
        <?php
                    } // Ending curly brace for while loop.
                } // Ending curly brace for if statement  
        ?>
                        
                                     
        <?php
                if($row['id'] == 4) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 2
                    $querySet4 = "SELECT options FROM lhtloptionsset5";
                    
                    // Retrieving the resource id 
                    $resourseID4q4set = mysqli_query($dbc,$querySet4) or die("Error querying the table: 'lhtloptionsset4'.");
                    
                    
                    while($rowoptions4 = mysqli_fetch_array($resourseID4q4set)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer4" value="<?php echo $rowoptions4['options'];?>"><?php echo $rowoptions4['options'];?>
                        <br>
                        
        <!-- Jumping back into PHP. -->
                        
        <?php
                    } // Ending curly brace for while loop.
                } // Ending curly brace for if statement  
        ?>
                        
                        
        <?php
                if($row['id'] == 5) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 2
                    $querySet5 = "SELECT options FROM lhtloptionsset6";
                    
                    // Retrieving the resource id 
                    $resourseID4q5set = mysqli_query($dbc,$querySet5) or die("Error querying the table: 'lhtloptionsset5'.");
                    
                    
                    while($rowoptions5 = mysqli_fetch_array($resourseID4q5set)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer5" value="<?php echo $rowoptions5['options'];?>"><?php echo $rowoptions5['options'];?>
                        <br>
                        
        <!-- Jumping back into PHP. -->
                        
        <?php
                    } // Ending curly brace for while loop.
                } // Ending curly brace for if statement  
        ?>
                        
                                      
        <?php
                if($row['id'] == 6) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 2
                    $querySet6 = "SELECT options FROM lhtloptionsset7";
                    
                    // Retrieving the resource id 
                    $resourseID4q6set = mysqli_query($dbc,$querySet6) or die("Error querying the table: 'lhtloptionsset6'.");
                    
                    
                    while($rowoptions6 = mysqli_fetch_array($resourseID4q6set)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer6" value="<?php echo $rowoptions6['options'];?>"><?php echo $rowoptions6['options'];?>
                        <br>
                        
        <!-- Jumping back into PHP. -->
                        
        <?php
                    } // Ending curly brace for while loop.
                } // Ending curly brace for if statement  
        ?> 
                        
                                         
        <?php
                if($row['id'] == 7) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 2
                    $querySet7 = "SELECT options FROM lhtloptionsset8";
                    
                    // Retrieving the resource id 
                    $resourseID4q7set = mysqli_query($dbc,$querySet7) or die("Error querying the table: 'lhtloptionsset7'.");
                    
                    
                    while($rowoptions7 = mysqli_fetch_array($resourseID4q7set)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer7" value="<?php echo $rowoptions7['options'];?>"><?php echo $rowoptions7['options'];?>
                        <br>
                        
        <!-- Jumping back into PHP. -->
                        
        <?php
                    } // Ending curly brace for while loop.
                } // Ending curly brace for if statement  
        ?> 
                        
                                      
        <?php
                if($row['id'] == 8) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 2
                    $querySet8 = "SELECT options FROM lhtloptionsset9";
                    
                    // Retrieving the resource id 
                    $resourseID4q8set = mysqli_query($dbc,$querySet8) or die("Error querying the table: 'lhtloptionsset8'.");
                    
                    
                    while($rowoptions8 = mysqli_fetch_array($resourseID4q8set)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer8" value="<?php echo $rowoptions8['options'];?>"><?php echo $rowoptions8['options'];?>
                        <br>
                        
        <!-- Jumping back into PHP. -->
                        
        <?php
                    } // Ending curly brace for while loop.
                } // Ending curly brace for if statement  
        ?> 

                        
        <?php
                if($row['id'] == 9) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 2
                    $querySet9 = "SELECT options FROM lhtloptionsset10";
                    
                    // Retrieving the resource id 
                    $resourseID4q9set = mysqli_query($dbc,$querySet9) or die("Error querying the table: 'lhtloptionsset9'.");
                    
                    
                    while($rowoptions9 = mysqli_fetch_array($resourseID4q9set)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer9" value="<?php echo $rowoptions9['options'];?>"><?php echo $rowoptions9['options'];?>
                        <br>
                        
        <!-- Jumping back into PHP. -->
                        
        <?php
                    } // Ending curly brace for while loop.
                } // Ending curly brace for if statement  
        ?> 
             
                        
        <?php
                if($row['id'] == 10) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 2
                    $querySet10 = "SELECT options FROM lhtloptionsset4";
                    
                    // Retrieving the resource id 
                    $resourseID4q10set = mysqli_query($dbc,$querySet10) or die("Error querying the table: 'lhtloptionsset10'.");
                    
                    
                    while($rowoptions10 = mysqli_fetch_array($resourseID4q10set)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer10" value="<?php echo $rowoptions10['options'];?>"><?php echo $rowoptions10['options'];?>
                        <br>
                        
        <!-- Jumping back into PHP. -->
                        
        <?php
                    } // Ending curly brace for while loop.
                } // Ending curly brace for if statement  
        ?>   
                        
        <?php
            } // Ending of main while......... While loop the iterates through all the rows
        ?>
                <br>
                <button name="submit">Submit</button>
                        <br>
                        
        <?php
                        
            if(isset($_POST['submit'])) {
                if(!isset($_POST['answer1']) || !isset($_POST['answer2']) || !isset($_POST['answer3']) || !isset($_POST['answer4']) || !isset($_POST['answer5']) || !isset($_POST['answer6']) || !isset($_POST['answer7']) || !isset($_POST['answer8']) || !isset($_POST['answer9']) || !isset($_POST['answer10'])) {
                    echo "<h1>Please answer all questions!</h1>";
                }
                else {
                    
                }
            }
                        
        ?>
                        
        </form>
    </body>
</html>

        

        <?php
                //if(!isset($_POST['answer1']) || !isset($_POST['answer2']) || !isset($_POST['answer3']) || !isset($_POST['answer4']) || !isset($_POST['answer5']) || //!isset($_POST['answer6']) || !isset($_POST['answer7']) || !isset($_POST['answer8']) || !isset($_POST['answer9']) || !isset($_POST['answer10'])) {
                //    echo "<h1>You are missing information please make sure you answered all questions.</h1>";
                //}
                //else {                
        ?>
                <!--    <button name="submit">Submit</button> -->
        
        <?php
                //}
        ?>
        <?php
                /*
                if($row['id'] == 3) {
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    echo "<h3>" . $row['question'] . "</h3>";
                    $querySet3 = "SELECT options FROM lhtloptionsset3";
                    $resourseID4q3set = mysqli_query($dbc,$querySet3);
                    while($rowoptions3 = mysqli_fetch_array($resourseID4q3set)) {
                        echo "<input type='radio' name='answer3'> " . $rowoptions3['options'] . "<br>";
                    }
                }
                
                if($row['id'] == 4) {
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    echo "<h3>" . $row['question'] . "</h3>";
                    $querySet4 = "SELECT options FROM lhtloptionsset4";
                    $resourseID4q4set = mysqli_query($dbc,$querySet4);
                    while($rowoptions4 = mysqli_fetch_array($resourseID4q4set)) {
                        echo "<input type='radio' name='answer4'> " . $rowoptions4['options'] . "<br>";
                    }
                }
                
                if($row['id'] == 5) {
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    echo "<h3>" . $row['question'] . "</h3>";
                    $querySet5 = "SELECT options FROM lhtloptionsset5";
                    $resourseID4q5set = mysqli_query($dbc,$querySet5);
                    while($rowoptions5 = mysqli_fetch_array($resourseID4q5set)) {
                        echo "<input type='radio' name='answer5'> " . $rowoptions5['options'] . "<br>";
                    }
                }
                
                if($row['id'] == 6) {
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    echo "<h3>" . $row['question'] . "</h3>";
                    $querySet6 = "SELECT options FROM lhtloptionsset6";
                    $resourseID4q6set = mysqli_query($dbc,$querySet6);
                    while($rowoptions6 = mysqli_fetch_array($resourseID4q6set)) {
                        echo "<input type='radio' name='answer6'> " . $rowoptions6['options'] . "<br>";
                    }
                }
                
                if($row['id'] == 7) {
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    echo "<h3>" . $row['question'] . "</h3>";
                    $querySet7 = "SELECT options FROM lhtloptionsset7";
                    $resourseID4q7set = mysqli_query($dbc,$querySet7);
                    while($rowoptions7 = mysqli_fetch_array($resourseID4q7set)) {
                        echo "<input type='radio' name='answer7'> " . $rowoptions7['options'] . "<br>";
                    }
                }
                
                if($row['id'] == 8) {
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    echo "<h3>" . $row['question'] . "</h3>";
                    $querySet8 = "SELECT options FROM lhtloptionsset8";
                    $resourseID4q8set = mysqli_query($dbc,$querySet8);
                    while($rowoptions8 = mysqli_fetch_array($resourseID4q8set)) {
                        echo "<input type='radio' name='answer8'> " . $rowoptions8['options'] . "<br>";
                    }
                }
                
                if($row['id'] == 9) {
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    echo "<h3>" . $row['question'] . "</h3>";
                    $querySet9 = "SELECT options FROM lhtloptionsset9";
                    $resourseID4q9set = mysqli_query($dbc,$querySet9);
                    while($rowoptions9 = mysqli_fetch_array($resourseID4q9set)) {
                        echo "<input type='radio' name='answer9'> " . $rowoptions9['options'] . "<br>";
                    }
                }
                
                if($row['id'] == 10) {
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    echo "<h3>" . $row['question'] . "</h3>";
                    $querySet10 = "SELECT options FROM lhtloptionsset10";
                    $resourseID4q10set = mysqli_query($dbc,$querySet10);
                    while($rowoptions10 = mysqli_fetch_array($resourseID4q10set)) {
                        echo "<input type='radio' name='answer10'> " . $rowoptions10['options'] . "<br>";
                    }
                }
                */
        ?> 

    

    
