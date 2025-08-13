<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <header><h1>Automatic Image List</h1></header>
    <main><pre><?php 
        $handle = opendir(__DIR__ . '/images');
  
        $images = [];
        while (($currentFile = readdir($handle)) !== false) {
            if ($currentFile === '.' || $currentFile === '..' || $currentFile === '.DS_Store') {
                continue;
            }
            
            // Lägg bara till .jpg filer
            if (pathinfo($currentFile, PATHINFO_EXTENSION) === 'jpg') {
                $images[] = $currentFile;
            }
        }
        var_dump($images);
        closedir($handle);
    ?></pre>
    
    <?php foreach($images AS $image): ?>
        <img src="/images/<?php echo rawurlencode($image); ?>" alt="">
    <?php endforeach; ?>
</main>
</body>
</html>