<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Guanabara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="_css/estilo.css" />
    <script src="main.js"></script>
</head>
<body>
<div>
<?php
   $i = 1;
   while ($i <= 5) {
      $v = "num" . $i;
      $url = "v" . $i;
      $$v = isset($_GET[$url])?$_GET[$url] : 0;
      $i++;
   }
   $i = 1;
   while ($i <= 5) {
      $v = "num" . $i;
      echo "Valor $i : " . $$v . "<br/>";
      $i++;
   }
?>
<a href="02PHPpart1.php"><br/>Voltar</a>
</div>
</body>
</html>