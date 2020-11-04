<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php

  require_once('../common/common.php');

  $post=sanitize($_POST);

  $onamae=$post['onamae'];
  $email=$post['email'];
  $postal1=$post['postal1'];
  $postal2=$post['postal2'];
  $address=$post['address'];
  $tel=$post['tel'];

  if($onamae=='')
  {
    print'お名前が入力されていません。<br/><br/>';
  }

  if(preg_match('/\A[\w\\.]+\@[\w\\.]+\.([a-z]+)\z/',$email)==0)
  {
    print 'メールアドレスを正確に入力してください。<br/><br/>';
  }
  if(preg_match('/\A[0-9]+\z/',$postal1)==0)
  {
    print'郵便番号は半角数字で入力してください。<br/><br/>';
  }
  if(preg_match('/\A[0-9]+\z/',$postal2)==0)
  {
    print'郵便番号は半角数字で入力してください。<br/><br/>';
  }
  if($address='')
  {
    print'住所が入力されていません。<br/><br/>';
  }
  if(preg_match('/\A\d[2,5]-?\d[2,5]-?\d[4,5]\z/',$tel)==0)
  {
    print'電話番号を正確に入力してください。<br/><br/>';
  }
?>
</body>
</html>