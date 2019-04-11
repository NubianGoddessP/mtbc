<?php

//Greet the user with the curreent date and time.//
$date = new DateTime();

$formattedDate = $date->format(`Y-m-d h:i:s`);

echo "Hello World it is  {$formattedDate}";

