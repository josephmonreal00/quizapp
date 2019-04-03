<!DOCTYPE html>
<html>
    <head>
        <title>Java Quiz!</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        
        <?php 
        
            // Connecting to the database
        
            $dbc = mysqli_connect("localhost", "root", "", "quizzes") or die("Error connecting to database.");
    
            // The query for the table and too retrieve data
        
            $query = "SELECT id, question FROM phpquestions";
        
            // Communication with the MySQL database and sending a query
        
            $resourceID = mysqli_query($dbc, $query) or die ("Error querying the table: 'phpquestions'.");
        
            
            // Iterating through the table and its rows each iteration will return a row and its columns
        
            while($row = mysqli_fetch_array($resourceID)) {

                
                if($row['id'] == 1) {
                    
                    // Displaying the id which will represent the question number.
                    echo "<h2>Question # ". $row['id'] . "</h2>";
                    
                    // Displaying the question to the client
                    echo "<h3>" . $row['question'] . "</h3>";
                    
                    // Querying the table with the options for question 1
                    $querySet1 = "SELECT options FROM phpoptions WHERE id >= 1 AND id <= 4";
                    
                    // Retrieving the resource id 
                    $resourse_ID_Set_1 = mysqli_query($dbc, $querySet1) or die("Error querying the table: 'phpoptions'.");
                    
        ?>
        
                    <!-- Jumping back into HTML. Creating the form. -->
        
                    <?php //echo $_SERVER['PHP_SELF']; ?>
        
                    <form action="phpresults.php" method="post">
            
            
                    <!-- Jumping back into PHP. -->
        <?php
                    
                    while($row_Options_1 = mysqli_fetch_array($resourse_ID_Set_1)) {
                        
        ?>
            
                    <!--
                    Jumping back into HTML.
                    -->
                        <input type="radio" name="answer1" value="<?php echo $row_Options_1['options'];?>"><?php echo $row_Options_1['options'];?>
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
                    $querySet2 = "SELECT options FROM phpoptions WHERE id >= 5 AND id <= 8";
                    
                    // Retrieving the resource id 
                    $resourse_ID_Set_2 = mysqli_query($dbc, $querySet2) or die("Error querying the table: 'phpoptions'.");
                    
                    
                    while($row_Options_2 = mysqli_fetch_array($resourse_ID_Set_2)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer2" value="<?php echo $row_Options_2['options'];?>"><?php echo $row_Options_2['options'];?>
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
                    $querySet3 = "SELECT options FROM phpoptions WHERE id >= 9 AND id <= 12";
                    
                    // Retrieving the resource id 
                    $resourse_ID_Set_3 = mysqli_query($dbc, $querySet3) or die("Error querying the table: 'phpoptions'.");
                    
                    
                    while($row_Options_3 = mysqli_fetch_array($resourse_ID_Set_3)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer3" value="<?php echo $row_Options_3['options'];?>"><?php echo $row_Options_3['options'];?>
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
                    $querySet4 = "SELECT options FROM phpoptions WHERE id >= 13 AND id <= 16";
                    
                    // Retrieving the resource id 
                    $resourse_ID_Set_4 = mysqli_query($dbc, $querySet4) or die("Error querying the table: 'phpoptions'.");
                    
                    
                    while($row_Options_4 = mysqli_fetch_array($resourse_ID_Set_4)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer4" value="<?php echo $row_Options_4['options'];?>"><?php echo $row_Options_4['options'];?>
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
                    $querySet5 = "SELECT options FROM phpoptions WHERE id >= 17 AND id <= 20";
                    
                    // Retrieving the resource id 
                    $resourse_ID_Set_5 = mysqli_query($dbc,$querySet5) or die("Error querying the table: 'phpoptions'.");
                    
                    
                    while($row_Options_5 = mysqli_fetch_array($resourse_ID_Set_5)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer5" value="<?php echo $row_Options_5['options'];?>"><?php echo $row_Options_5['options'];?>
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
                    $querySet6 = "SELECT options FROM phpoptions WHERE id >= 21 AND id <= 22";
                    
                    // Retrieving the resource id 
                    $resourse_ID_Set_6 = mysqli_query($dbc, $querySet6) or die("Error querying the table: 'phpoptions'.");
                    
                    
                    while($row_Options_6 = mysqli_fetch_array($resourse_ID_Set_6)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer6" value="<?php echo $row_Options_6['options'];?>"><?php echo $row_Options_6['options'];?>
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
                    $querySet7 = "SELECT options FROM phpoptions WHERE id >= 23 AND id <= 26";
                    
                    // Retrieving the resource id 
                    $resourse_ID_Set_7 = mysqli_query($dbc,$querySet7) or die("Error querying the table: 'phpoptions'.");
                    
                    
                    while($row_Options_7 = mysqli_fetch_array($resourse_ID_Set_7)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer7" value="<?php echo $row_Options_7['options'];?>"><?php echo $row_Options_7['options'];?>
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
                    $querySet8 = "SELECT options FROM phpoptions WHERE id >= 27 AND id <= 30";
                    
                    // Retrieving the resource id 
                    $resourse_ID_Set_8 = mysqli_query($dbc,$querySet8) or die("Error querying the table: 'phpoptions'.");
                    
                    
                    while($row_Options_8 = mysqli_fetch_array($resourse_ID_Set_8)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer8" value="<?php echo $row_Options_8['options'];?>"><?php echo $row_Options_8['options'];?>
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
                    $querySet9 = "SELECT options FROM phpoptions WHERE id >= 31 AND id <= 32";
                    
                    // Retrieving the resource id 
                    $resourse_ID_Set_9 = mysqli_query($dbc, $querySet9) or die("Error querying the table: 'phpoptions'.");
                    
                    
                    while($row_Options_9 = mysqli_fetch_array($resourse_ID_Set_9)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer9" value="<?php echo $row_Options_9['options'];?>"><?php echo $row_Options_9['options'];?>
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
                    $querySet10 = "SELECT options FROM phpoptions WHERE id >= 33 AND id <= 36";
                    
                    // Retrieving the resource id 
                    $resourse_ID_Set_10 = mysqli_query($dbc, $querySet10) or die("Error querying the table: 'phpoptions'.");
                    
                    
                    while($row_Options_10 = mysqli_fetch_array($resourse_ID_Set_10)) {
        ?>
                        
        <!-- Jumping back into HTML.-->
                        
                        <input type="radio" name="answer10" value="<?php echo $row_Options_10['options'];?>"><?php echo $row_Options_10['options'];?>
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
    

    
