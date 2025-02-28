<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="indexex6.php" method="get">

<fieldset>
    <legend>Digite um Número</legend>
    <label for="num1">Número 1</label>
    <input type="text" name="num1" id="num1" placeholder="0" required>
    <label for="num2">Número 2</label>
    <input type="text" name="num2" id="num2" placeholder="0" required>
    <input type="submit" name="Teste" value="Teste">
</form>

<?php
  
if( $_GET['num1'] > $_GET['num2'] ){
    echo "o 1° número é maior que o segundo" ;
}

else{
    echo "O 2° número é maior que o 1°";
}



?>
</body>
</html>



</body>
</html>