<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="PHP Factorials Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="ZoiaB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
    <link rel="manifest" href="./fav_index/android-chrome-512x512.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-cyan.min.css" />

    <!-- Title -->
    <title>PHP Factorials Webpage</title>
  </head>
  <body>
    <?php echo "<h1>PHP Factorials Webpage</h1>"; ?>

    <!-- Div for styled background -->
      <?php
      echo "<p>Input a number below, and we will use a  DO... WHILE loop to give you the factorial of your number.</p>";
      echo "<h3>Your Input</h3>";
      ?>

    <!-- Form for user input -->
    <form action="./factorial.php" method="post" target="results">
      <label for="number">Enter a whole number:</label>
        <input type="number" step="1" min="0" name="number" placeholder="A whole number..."><br><br>
        <input type="submit" value="Calculate Factorial" id="styled-button" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
    </form>
    <br>

    <!-- Image -->
    <img src="./images/Factorial-in-C.png" alt="Factorials" width="400" length="600">
    <br>

    <!-- Iframe for factorial to be displayed -->
    <br>
    <iframe id="results" name="results"></iframe>
  </body>
</html>