<?php
$file= file_get_contents("testfile.txt");
//var_dump($file);
$pattern = "/\[(.*?)]/m";
preg_match_all($pattern, $file, $matches, PREG_SET_ORDER, 0);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Defiant Test</title>
</head>

<body>
    <p>Click to view  <a href="testfile.txt" target=_blank>Text File</a></p> 

    <?php
    var_dump($matches);
    ?>
</body>
</html>
