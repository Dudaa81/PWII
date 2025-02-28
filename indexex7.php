<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   



    
    <form action="indexex7.php" method="get">

        <fieldset>
            <legend>Digite o Ano do seu nascimento</legend>
            <label for="ano">Ano</label>
            <input type="text" name="ano" id="ano" placeholder="0" required>
            <input type="submit" name="teste" value="teste">

            
    </form>



    <?php

    if( $_GET['ano'] <2007 ){
        echo " Maior de Idade";
    }

    else {
        echo "Menor de idade";
    }


    
    
    ?>
</body>
</html>