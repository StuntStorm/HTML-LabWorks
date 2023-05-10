<?php
  $numbers = array(11, 21, 32, 43, 54, 56, 76, 89, 90, 80);

  $strings = array("Sumesh", "Ramesh", "Raju", "Jackson", "Mohan", "Johnson", "Gopan", "Fahid", "Hari", "Mughal");

  echo "Numbers Array: <br>";
  for ($i = 0; $i < count($numbers); $i++) {
    echo "$numbers[$i]<br>";
  }
  echo "<br>";

  echo "Strings Array: <br>";
  for ($i = 0; $i < count($strings); $i++) {
    echo "$strings[$i]<br>";
  }
?>
