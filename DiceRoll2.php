<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

DiceRoll2.php -->

    <meta charset="UTF-8">
    <title>Dice Roll 2</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Dice Roll 2</h2>
    <?php
    //Global variables
        $faceNamesSingular = array("one", "two", "three", "four", "five", "six");
        $faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
        $doublesCount = 0;
        $rollNumber = 1;
        define("NBR_ROLLS", 4);

        //checks if dice are the same value
        function checkForDoubles($die1, $die2) {
            global $faceNamesSingular;
            global $faceNamesPlural;
            $returnValue = false;
            echo "Die 1: $die1<br>Die 2: $die2<br>";

            if ($die1 === $die2) {
                echo "The roll was double ", $faceNamesPlural[$die1 - 1],".<br>";
                $returnValue = true;
            }
            else {
                echo "The roll was a ", $faceNamesSingular[$die1 - 1], " and a ", $faceNamesSingular[$die2 - 1], ".<br>";
                $returnValue = false;
            }
            return $returnValue;
        }

        //Display text based on final score
        function displayScoreText($score, $doubles) {
            if ($doubles) {
                switch ($score) {
                    case 2: {
                        echo"you rolled snake eyes!<br>";
                        break;
                    }
                    case 12: {
                        echo"you rolled boxcars!<br>";
                        break;
                    }
                }
                
            }
            else{
                if ($score === 3) {
                    echo"you rolled a loose duece!<br>";
                }
                else if ($score === 5) {
                    echo"you rolled a fever five!<br>";
                 }
                //else if = C code, elseif = python
                elseif ($score === 7) {
                    echo"you rolled a natural!<br>";
                }
                elseif ($score === 9) {
                    echo"you rolled a nina!<br>";
                }
                else if ($score === 11) {
                    echo"you rolled a yo!<br>";
                }
                else {
                    echo "Your roll has no nickname";
                }
            }                
        
        }

        //Display text and run functions
        $dice = array();
        while ($rollNumber <= NBR_ROLLS) {
            $dice[0] = rand(1, 6);
            $dice[1] = rand(1, 6);
            echo "<p>";
            $score = $dice[0] + $dice[1];
            echo "The total score for the roll was $score.<br>";
            $doubles = checkForDoubles($dice[0], $dice[1]);
            displayScoreText($score, $doubles);
            echo "</p>";
            if ($doubles) {
                ++$doublesCount;
            }
            ++$rollNumber;
        }
        echo "<p>Doubles occured on $doublesCount of the " . NBR_ROLLS . " rolls.</p>";
        
    ?>

</body>

</html>