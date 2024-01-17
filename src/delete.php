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
		<title>delete</title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from player where id=?');
    if($sql->execute([$_POST['id']])){
        echo '<font color="red">削除に成功しました。</font>';
    }else{
        echo '<font color="red">削除に失敗しました。</font>';
    }
?>
    <br><hr><br>
	<div><table>
	<tr><th>背番号</th><th>ポジション</th><th>国籍</th><th>選手名</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from player') as $row) {
        echo '<tr>';
        echo '<td>', $row['id'], '</td>';
        echo '<td>', $row['pg'], '</td>';
        echo '<td>', $row['co'], '</td>';
        echo '<td>', $row['name'], '</td>';
        echo '</tr>';
        echo "\n";
    }
?>
</table></div>
<p class="button008">
	<a href="index.php">選手一覧へ戻る</a></p>
    </body>
</html>