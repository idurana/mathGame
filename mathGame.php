<?php include("header.php"); 

$firstNum = rand(0, 20);
$secondNum = rand(0, 20);

$operatorRoll = rand(0, 3);

$score = 0;

session_start();

/*
1. have a var that rolls between subtract(0) and add(1)
2. the roll determines if the numbers will add or subtract
*/

?>
		
	<body>
		<h1>Let's Math It Up!</h1>
        
        <a href="index.php">Log out</a>
        
        <table class="table condensed">
            <form method="post">
                <tr>
                    <td id="question">
                        <?php 
                            switch ($operatorRoll) {
                                case 0:
                                    echo $firstNum . " - " . $secondNum;

                                    $correctAnswer = $firstNum - $secondNum;

                                    $_SESSION["corrAnswer"] = $correctAnswer; 
                                break;    
                                
                                case 1:
                                    echo $firstNum . " + " . $secondNum;

                                    $correctAnswer = $firstNum + $secondNum;

                                    $_SESSION["corrAnswer"] = $correctAnswer;    
                                break;
                                    
                                case 2:
                                    echo $firstNum . " * " . $secondNum;

                                    $correctAnswer = $firstNum * $secondNum;

                                    $_SESSION["corrAnswer"] = $correctAnswer;      
                                break;
                                    
                                case 3:
                                    echo $firstNum . " / " . $secondNum;

                                    $correctAnswer = $firstNum / $secondNum;

                                    $_SESSION["corrAnswer"] = $correctAnswer; echo "<p>" . $_SESSION["corrAnswer"] .    
                                break;
                            }
                        ?>
                    </td>
                </tr>

                <tr id="userAnswer">
                    <td>
                        <input type="text" name="userInput" placeholder="Enter Answer"/>
                    </td>
                </tr>
                
                <tr id="submit">
                    <td>
                        <input type="submit" name="submit" />
                    </td>
                </tr>
                
                <tr id="score">
                    <td>Score: <?php echo $score; ?></td>
                </tr>
                
                <tr id="wrongRight">
                    <?php
                        if (isset($_POST["userInput"])) {
                            if ($_POST["userInput"] == $correctAnswer) {
                                echo "<p>" . $_POST["userInput"] . "</p>";
                                
                                $score++;
                            } else {
                                echo "<p>Wrong Answer</p>";
                            }
                        }
                    ?>
                </tr>
            </form>
        </table>
    </body>

<?php include("footer.php"); ?>