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
		<title>update</title>
	</head>
<body>
<div> <table>
        <tr><th>背番号</th><th>ポジション</th><th>国籍</th><th>選手名</th></tr>

<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach($pdo->query('select * from player') as $row){
        echo '<tr>';
        echo '<td>';
        echo '<form action="update-output.php" method="post">';
        echo '<input type="hidden" name="id" value="',$row['id'],'">';
        echo $row['id'];
        echo '</td>';
        echo '<td>';
        echo '<input type="text" name="pg" value="',$row['pg'],'">';
        echo '</td>';
        echo '<td>';
        echo '<input type="text" name="co" value="',$row['co'],'">';
        echo '</td>';
        echo '<td>';
        echo '<input type="text" name="name" value="',$row['name'],'">';
        echo '</td>';
        echo '<td>';
        echo '<input type="submit" value="更新"></div>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
?>
</table></div>
<p class="button008">
	<a href="index.php">選手一覧へ戻る</a></p>
    </body>
</html>