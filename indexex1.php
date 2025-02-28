<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   



    
    <form action="indexex1.php" method="get">

        <fieldset>
            <legend>Digite sua Nota</legend>
            <label for="nota">Nota</label>
            <input type="text" name="nota" id="nota" placeholder="0" required>

            
    </form>



    <?php

    if(($_GET['nota']<6)){
        echo "Reprovado";
    }

    else if(($_GET['nota']==6)){
        echo "Recuperação";
    }

    else if($_GET['nota']>7){
        echo "Aprovado";
    }

    else{
        echo "Digite sua nota de 0 a 10";
    }
    
    
    ?>
</body>
</html>