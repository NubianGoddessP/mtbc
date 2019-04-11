<?php
  $name = 'Bob Smith';
  $greeting = "Hello {$name}";
  $count=5;
  $price=3.00;
  //Note the escape character before the dollar sign
  $msg ="I see you have {$count} oranges, that will be \${$price}";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <h1><?php echo $greeting; ?></h1>
       <p><?php echo $msg;?></p>
    </body>
</html>

<?php
  $name = 'Bob Smith';
  $greeting = "Hello {$name}";
  $count=5;
  $price=.6;
  $total=($count*$price);
  $msg = "I see you have {$count} oranges, that will be \${$total}";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <h1><?php echo $greeting; ?></h1>
       <p><?php echo $msg;?></p>
    </body>
</html>

<?php
/**
 * Greets the user with the current date and time.
 */

//Create a date object http://php.net/manual/en/book.datetime.php from PHP's built
$date = new DateTime();

#Format the date http://php.net/manual/en/datetime.formats.date.php
$formattedDate = $date->format('Y-m-d h:i:s');

echo "Hello World it is {$formattedDate}";
