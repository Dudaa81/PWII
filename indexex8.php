
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   



    
    <form action="indexex8.php" method="get">

        <fieldset>
            <legend>Descubra seu Bônus</legend>
            <label for="nome">Digite seu nome</label>
            <input type="text" name="nome" id="nome" placeholder="0" required>
            <label for="valor">Valor de sua venda</label>
            <input type="text" name="valor" id="valor" placeholder="0" required>
            <input type="submit" name="teste" value="teste">

            
    </form>



    <?php

    if( $_GET['valor'] > 5000 ){
        echo " Bônus de 10%";
    }

    else if ( $_GET['valor'] > 2000 ) {
        echo "Bônus de 20%";
    }
    else if ( $_GET['valor'] > 1000 ) {
        echo "Bônus de 30%";
    }

    else if ( $_GET['valor'] <1000 ) {
        echo "não tem bônus";
    }

    else{
        echo "Digite seu valor";
    }




    
    
    ?>
</body>
</html>