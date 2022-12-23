<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    date_default_timezone_set('Asia/Kathmandu');
$currentDateTime = date("Y-m-d H:i:s");
$hour = date("H");
echo("<h2>".$currentDateTime."</h2>");
if ($hour < 12) {
  echo "Good morning!";
} else if ($hour < 18) {
  echo "Good afternoon!";
} else {
  echo "Good evening!";
}
?>
</body>
</html>