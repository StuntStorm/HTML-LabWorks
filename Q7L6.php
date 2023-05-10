<?php
  $numbers = array(11, 21, 32, 43, 54, 56, 76, 89, 90, 80);

  $strings = array("Sumesh", "Ramesh", "Raju", "Jackson", "Mohan", "Johnson", "Gopan", "Fahid", "Hari", "Mughal");

  echo "Numbers Array: <br>";
  foreach($numbers as $n)
  {
    print_r($n."<br>");
  }
  echo "<br>";

  echo "Strings Array: <br>";
  foreach($strings as $s)
  {
    print_r($s."<br>");
  }
?>
