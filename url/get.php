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
      var_dump($_GET);
    ?>

    <?php if (!empty($_GET['books'])): ?>
     <h1><?php echo $_GET['books']; ?></h1>
    <?php endif; ?>

  </pre>
  <?php /*
  <a href="get.php?books=Harry Potter">Link</a>
  <a href="get.php?books=Beauty And The Beast">Link</a>
  */
  ?>

<a href="get.php?<?php echo http_build_query(['books' => 'Harry Potter']); ?>">Link</a>
<a href="get.php?<?php echo http_build_query(['books' => 'Beauty & The Beast']); ?>">Link</a>

<form action="get.php" method="GET">
<input type="text" name ="books" value="<?php if(!empty($_GET['books'])) echo $_GET['books']; ?>"/>
<input type="submit" value="submit"/>

    </form>
</body>
</html>