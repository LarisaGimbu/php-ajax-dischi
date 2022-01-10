<?php

require_once __DIR__ . '/database.php';

$discs = [];

if($_GET['genre'] === 'All'){
  $discs = $songs;
}else{
  foreach($songs as $song){
    if($_GET['genre'] === $song['genre']){
      $discs[] = $song;
    }
  }
}

header("Content-Type: application/json;charset=utf-8");

echo json_encode($discs);
