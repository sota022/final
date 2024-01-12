<?php
    const SERVER = 'mysql215.phy.lolipop.lan';
    const DBNAME = 'LAA1516913-final';
    const USER = 'LAA1516913';
    const PASS = 'pass0122';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>delete</title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from player where id=?');
    if($sql->execute([$_POST['id']])){
        echo '削除に成功しました。';
    }else{
        echo '削除に失敗しました。';
    }
?>
    <br><hr><br>
	<table>
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
</table>
<button onclick="location.href='itiran.php'">一覧へ戻る</button>
    </body>
</html>