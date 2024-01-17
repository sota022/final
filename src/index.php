<?php
   const SERVER = 'mysql220.phy.lolipop.lan';
   const DBNAME = 'LAA1516913-final';
   const USER = 'LAA1516913';
   const PASS = 'pass0122';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
		<title>itiren</title>
	</head>
	<body>
<div class="flex">
    <li class="slider">
  <div class="slider-item">
    <img src="img/lfc.png" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l1.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l2.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l3.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l4.jpg" style="width: 200px;height: 200px; ">
  </div>
</li>
<li class="slider">
  <div class="slider-item">
    <img src="img/l5.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l6.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l7.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l8.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l9.jpg" style="width: 200px;height: 200px; ">
  </div>
</li>
<li class="slider">
  <div class="slider-item">
    <img src="img/l10.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l11.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l12.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l13.jpg" style="width: 200px;height: 200px; ">
  </div>
  <div class="slider-item">
    <img src="img/l14.jpg" style="width: 200px;height: 200px; ">
  </div>
</li>
</div>
        <h1>リヴァプール選手一覧</h1>
        <hr>
    <div><table>
    <tr><th>背番号</th><th>ポジション</th><th>国籍</th><th>選手名</th><th>更新</th><th>削除</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from player') as $row) {
        echo '<tr>';
        echo '<td>', $row['id'], '</td>';
        echo '<td>', $row['pg'], '</td>';
        echo '<td>', $row['co'], '</td>';
        echo '<td>', $row['name'], '</td>';
        echo '<td>';
        echo '<button class="btn" type="submit" href="update.php">更新</button>';
        echo '</td>';
        echo '<td>';
        echo '<form action="delete.php" method="post">';
        echo '<input type="hidden" name="id" value="',$row['id'],'">';
        echo '<button Class="btn" type="submit">削除</button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
?>
    </table></div>
<p class="button008">
	<a href="insert.php">選手登録</a></p>
    </body>
</html>
