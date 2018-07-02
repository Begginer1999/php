<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="utf-8" />
   <title> PHP Guanabara2 </title>
</head>
<body>
<div>
<form method="get" action="02PHPpart2.php">
    <?php
        echo "hello world";
        $c = 1;
        while($c<=5){
        echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/> <br/>";
        $c++;
        }
    ?>
    <input type='submit' value='Enviar' class='botao'/>
</div> 
</body>
</html>
