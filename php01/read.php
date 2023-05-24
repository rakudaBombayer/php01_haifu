<?php
$filename = "data/data.txt";
$file = fopen($filename,"r");
// var_dump($data);

$data = [];
while (!feof(($file))){
  $line = fgets($file);
  $data= explode(",",$line);
  if(empty($line)){
    continue;
  }
// echo  $data[1];
  // var_dump($data);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<table border="3">
<tr>
<th><?="名前"?></th>
<td><?=$data[1]?></td>
</tr>
<tr>
<th><?="メールアドレス"?></th>
<td><?=$data[2]?></td>
</tr>
<tr>
<th><?="趣味"?></th>
<td><?=$data[3]?></td>
</tr>
<tr>
<th><?="好きな食べ物"?></th>
<td><?=$data[4]?></td>
</tr>

</table>
<?php
}
?>
</body>



</html>

<!-- // // ファイルを変数に格納 
// $filename = 'data/data.txt';
 
// // fopenでファイルを開く（'r'は読み込みモードで開く）
// $fp = fopen($filename, 'r');
 
// // whileで行末までループ処理
// while (!feof($fp)) {
 
//   // fgetsでファイルを読み込み、変数に格納
//   $txt = fgets($fp);
 
//   // ファイルを読み込んだ変数を出力
//   echo $txt.'<br>';
 
// }
 
// // fcloseでファイルを閉じる
// fclose($fp); -->