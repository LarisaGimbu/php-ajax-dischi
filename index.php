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
  <style>
    body{
      font-family: 'Arya', sans-serif;
    }
  </style>

</head>
<body>
  
  <div id="app">
    

  </div>

  <?php foreach($songs as $song): ?>
  <div class="song-box">
    <img src="<?php echo $song['poster'] ?>" alt="">
    <h5> <?php echo $song['title'] ?></h5>
    <p><?php echo $song['author'] ?></p>
    <p class="year"><?php echo $song['year'] ?></p>
  </div> 
  <?php endforeach ?>




  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>