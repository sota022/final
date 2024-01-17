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
		<title>update-output</title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('update player set pg=?,co=?,name=? where id=?');
    if (empty($_POST['pg'])) {
        echo 'ポジションを入力してください。';
    }else
    if(empty($_POST['co'])){
        echo '国籍を入力してください。';
    }else
    if(empty($_POST['name'])){
        echo '選手名を入力してください。';
    }else
    if($sql->execute([$_POST['pg'],$_POST['co'],$_POST['name'],$_POST['id']])){
        echo '<font color="red">更新に成功しました。</font>';
    }else{
        echo '<font color="red">更新に失敗しました。</font>';
    }   
?>
        <br><hr><br>
       <div> <table>
        <tr><th>背番号</th><th>ポジション</th><th>国籍</th><th>選手名</th></tr>

<?php
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