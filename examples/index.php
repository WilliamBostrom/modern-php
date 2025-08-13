<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
   <?php

$sum = 0;
$number = 0;
   while ($sum < 10){
    $sum = $sum + $number;
     $number++;
     var_dump($sum);
   }

/*  for($x = 0; $x <= 10; $x++) {
 var_dump($x);
 } */
?>

<ul>
  <?php for ($x = 0; $x <= 10; $x++): ?>
    <?php if ($x === 2) continue; ?>
    <?php if ($x === 6) break; ?>
  <li><?php echo $x; ?></li>
  <?php endfor; ?>
</ul>
  </pre>
</body>
</html>