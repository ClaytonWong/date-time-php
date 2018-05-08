<?php
  echo "Current date: " . date("D d/m/Y") . "<br>"; // Display current day of week and current date in 2 digit day, 2 digit month and 4 digit year format
  echo "Current time: " . date("H:i:s") . "<br>"; // Display current time in 24 hour format with seconds

  // constant demo
  define("MY_CONST", 7); 
  echo "My constant: " . MY_CONST . "<br>";

  echo "New Years Day 2019 falls on " . date('l', mktime(0, 0, 0, 1, 1, 2019)) . "<br>"; // find day of week for New Year's Day 2019

  // Find date after 2 days
  $futureDate = mktime(0, 0, 0, date("m"), date("d")+2, date("Y"));
  echo "Date in 2 days time: " . date("D Y M d", $futureDate); // Show month in 3 letter format
?>