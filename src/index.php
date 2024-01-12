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
        <h1>リヴァプール選手一覧</h1>
        <hr>
    <div><table>
    <tr><th>背番号</th><th>ポジション</th><th>国籍</th><th>選手名</th><th>編集</th><th>削除</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from player') as $row) {
        echo '<tr>';
        echo '<td>', $row['id'], '</td>';
        echo '<td>', $row['pg'], '</td>';
        echo '<td>', $row['co'], '</td>';
        echo '<td>', $row['name'], '</td>';
        echo '<td>';
        echo '<button type="submit">更新</button>';
        echo '</td>';
        echo '<td>';
        echo '<form action="delete.php" method="post">';
        echo '<input type="hidden" name="id" value="',$row['id'],'">';
        echo '<button type="submit">削除</button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
?>
    </table></div>
<p><button onclick="location.href='insert.php'">選手登録</button>
<button onclick="location.href=''">ログアウト</button></p>
    </body>
</html>
