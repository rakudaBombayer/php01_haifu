<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include/読み込み関数</title>
</head>
<body>
<?php
$a = date("H");
if($a >= 9&& $a<=13){
    echo '<div style="background:#000;">aaaa</div>';
}else{
    echo '<div style="background:#f00;">bbbb</div>';
}
?>

<?php include("inc/head.html"); ?>
<?php include("inc/menu.html"); ?>
<?php include("inc/foot.html"); ?>
    
<?php
echo date("Y😺m🐕d😀 H:i:s")

?>

    
</body>
</html>