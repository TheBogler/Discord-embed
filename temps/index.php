<?php

$data = $_GET;
if (isset($data["title"]) && !empty($data["title"])) {
  $title = $data["title"];https://t.me/dsc_self
} else {
  $title = " ";
}
if (isset($data["desc"]) && !empty($data["desc"])) {
  $desc = $data["desc"];
} else {
  $desc = " ";
}

if (isset($data["color"]) && !empty($data["color"])) {
  $color = $data["color"];
} else {
  $color = "2b2d31";
}
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<html>
  <head>
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <meta name="description" content="<?=$desc?>">
    <meta charset="UTF-8">
    <meta name="theme-color" content="#<?=$color?>">
  </head>
    <h1><a href="https://t.me/dsc_self"><b>TBSELF</b></a></h1>

  <p><p>

  <p>Создать embedded: <a href="/create">Ссылка</a><p>
</html>