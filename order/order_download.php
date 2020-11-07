<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false)
{
  print'ログインされていません。<br/>';
  print'<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
  exit();
}
else
{
  print $_SESSION['staff_name'];
  print 'さんログイン中<br/>';
  print '<br/>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  ダウンロードしたい注文日を選んでください。<br/>
  <form method="post" action="order_download_done.php">
    <select name="year">
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
    </select>
  年
    <select name="month">
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="01">05</option>
      <option value="02">06</option>
      <option value="03">07</option>
      <option value="04">08</option>
      <option value="01">09</option>
      <option value="02">10</option>
      <option value="03">11</option>
      <option value="04">12</option>
    </select>
  月
    <select name="day">
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="01">05</option>
      <option value="02">06</option>
      <option value="03">07</option>
      <option value="04">08</option>
      <option value="01">09</option>
      <option value="02">10</option>
      <option value="03">11</option>
      <option value="04">12</option>
      <option value="01">13</option>
      <option value="02">14</option>
      <option value="03">15</option>
      <option value="04">16</option>
      <option value="01">17</option>
      <option value="02">18</option>
      <option value="03">19</option>
      <option value="04">20</option>
      <option value="01">21</option>
      <option value="02">22</option>
      <option value="03">23</option>
      <option value="04">24</option>
      <option value="01">25</option>
      <option value="02">26</option>
      <option value="03">27</option>
      <option value="04">28</option>
      <option value="01">29</option>
      <option value="02">30</option>
      <option value="03">31</option>
    </select>
  日<br/>
  <br/>
  <input type="submit" value="ダウンロードへ">
</form>

</body>
</html>