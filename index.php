<?php 

require_once __DIR__ . "/db/database.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php foreach($songs as $song): ?>
  <div class="song-box">
    <img :src="" alt="">
    <h5>song.title</h5>
    <p>song.author</p>
    <p class="year">song.year</p>
  </div> 
  <?php endforeach ?>

</body>
</html>