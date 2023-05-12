<?php

//initializing variables
$counter = 1;
$facAnswer = 1;

//getting user input for number
$userNum = $_POST['number'];

//If: if user enters nothing
if ((!is_numeric($userNum)) ) {
  echo "Please enter a valid number.";
}

//Else if: if user enters a negative number
else if ($userNum < 0) {
  echo "Please enter a positive number.";
}

//Else: let the do-while loop execute to calculate the factorial
else {
  //using a do...while loop to find factorial of inputted number
  do {
    $facAnswer = $facAnswer * $counter;
    $counter = $counter + 1;
  } while ($counter <= $userNum);

  //displaying factorial to the screen
  echo "The factorial of your inputted number (!" . $userNum . ") = " . $facAnswer . ".";
}

?>