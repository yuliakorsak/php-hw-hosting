<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="dev">
  <p class="name">Юлия Ермолаева</p>
  <p class="title">Домашнее задание к занятию «3.3. Хостинг»</p>
</div>
<?php
session_start();
if(isset($_SESSION['username'])) {
    echo '<p class="welcome">Привет, '. $_SESSION['username'] .'!</p>' . PHP_EOL;
    echo '<a class="exit" href="exit.php">Выйти</a>';
}
else {
    include 'form.php';
}
?>
</body>
</html>