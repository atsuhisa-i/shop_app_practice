<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $tsuki=$_POST['tsuki'];

  $yasai[]='';
  $yasai[]='ブロッコリー';
  $yasai[]='カリフラワー';
  $yasai[]='レタス';
  $yasai[]='みつば';
  $yasai[]='アスパラガス';
  $yasai[]='セロリ';
  $yasai[]='なす';
  $yasai[]='ピーマン';
  $yasai[]='オクラ';
  $yasai[]='サツマイモ';
  $yasai[]='大根';
  $yasai[]='ほうれん草';

  print $tsuki;
  print '月は';
  print $yasai[$tsuki];
  print 'が旬です。';

  ?>
</body>
</html>