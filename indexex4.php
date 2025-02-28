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
    
<form action="indexex4.php" method="get">

<fieldset>
    <legend>Digite um Mês</legend>
    <label for="mes">Mês</label>
    <input type="text" name="mes" id="mes" placeholder="0" required>
    <input type="submit" name="Teste" value="Teste">
</form>

<?php
  
if( $_GET['mes'] === "Janeiro" || $_GET['mes'] === "Fevereiro" || $_GET['mes'] === "Março" || $_GET['mes'] === "Abril" || $_GET['mes'] === "Maio" || $_GET['mes'] === "Junho" ){
    echo "Primeiro Semestre";
}

else{
    echo "Segundo Semestre";
}



?>
</body>
</html>



</body>
</html>