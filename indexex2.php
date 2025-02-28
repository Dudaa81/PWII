<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="indexex2.php" method="get">

<fieldset>
    <legend>Digite sua Idade</legend>
    <label for="nota">Idade</label>
    <input type="text" name="nota" id="nota" placeholder="0" required>
</form>

<?php
   if( $_GET['nota'] <16){
    echo "Não pode votar";
   }

   else if ( $_GET['nota'] ==16 || $_GET['nota'] <18 || $_GET['nota'] >60){
       echo "Voto opcional";
   }

   else if( $_GET['nota'] > 18){
    echo "Voto obrigatório";
   }

   else{
    echo "Digite sua idade";
   }





?>
    

</body>
</html>