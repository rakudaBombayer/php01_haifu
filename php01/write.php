<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$hobby = $_POST["hobby"];
$food = $_POST["food"];
$image = $_POST["image"];
$c = ",";
?>

<?php
//文字作成
$str = date("Y-m-d H:i:s");
$str .= $c.$name.$c.$mail.$c.$hobby.$c.$food.$c.$image;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<?php 
  header('Location:read.php');
?>






<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<div><?=$str?></div>
<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>