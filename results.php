<?php

  //initializing variables
  $counter = 1;
  $facAnswer = 1;

  //getting user input for number
  $userNum = intval($_POST['number']);

  //using a do...while loop to find factorial of inputted number
  do {
    $facAnswer = $facAnswer * $counter;
    $counter = $counter + 1;
  } while ($counter <= $userNum);

  //displaying factorial to the screen
  echo "The factorial of your inputted number (!" . $userNum . ") = " . $facAnswer . ".";
?>