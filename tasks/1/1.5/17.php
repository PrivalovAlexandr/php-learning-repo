<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $arr = ['a' => 1, 'b' => 2, 'c' => 3];
    $arr['a'] .= 3;
	$arr['b'] .= 3;
	$arr['c'] .= 3;
    var_dump($arr);
?>
</body>
</html>