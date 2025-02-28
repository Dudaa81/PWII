<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="indexex3.php" method="get">

<fieldset>
    <legend>Digite um Número</legend>
    <label for="nota">Número</label>
    <input type="text" name="num" id="num" placeholder="0" required>
    <input type="submit" name="Descobrir" value="Descobrir">
</form>

<?php
  
  if( $_GET['num'] <100){
    echo "Número menor que cem";
  }

  else if( $_GET ['num'] >100){
    echo "Número maior que cem";
  }

  else{
    echo "Digite um número";
  }




?>
</body>
</html>