<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
     <?php if(!empty($_POST['username'])) echo htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8'); ?>
  </h1>

<form action="post.php" method="POST">
  <input type="text" name ="username" value="<?php if(!empty($_POST['username'])) echo htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8'); ?>"/>
  <input type="password" name ="password" />
  <input type="submit" value="submit"/>
</form>

</body>
</html>