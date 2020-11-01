<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $gakunen=$_POST['gakunen'];

  switch($gakunen)
  {
    case'1':
      print'あなたの校舎は南校舎です。';
      break;
    case'2':
      print'あなたの校舎は西校舎です。';
      break;
    case'3':
      print'あなたの校舎は東校舎です。';
      break;
    default:
      print'あなたの校舎は3年生と同じです。';
      break;
  }
  ?>
</body>
</html>