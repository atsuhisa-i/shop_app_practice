<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php

  try
  {

    $staff_code=$_POST['staffcode'];

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='root';
    $dbh=new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql='SELECT name FROM mst_staff WHERE code=?';
    $stmt=$dbh->prepare($sql);
    $data[]=$staff_code;
    $stmt->execute($data);

    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
    $staff_name=$rec['name'];

    $dbh=null;

  }
  catch(Exception $e)
  {
    print'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
  }

  ?>

  スタッフ修正<br/>
  <?php print $staff_code;?>
  <br/>
  <br/>
  <form method="post" action="staff_edit_check.php">
  <input type="hidden" name="code" value="<?php print $staff_code;?>">
  スタッフ名<br/>
  <input type="text" name="name" style="width:200px" value="<?php print $staff_name;?>"><br/>

  パスワードを入力してください。<br/>
  <input type="password" name="pass" style="width:100px"><br/>
  パスワードをもう１度入力してください。<br/>
  <input type="password" name="pass2" style="width:100px"><br/>
  <br/>
  <input type="button" onclick="history.back()" value="戻る">
  <input type="submit" value="OK">
  </form>

</body>
</html>