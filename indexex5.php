<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   



    
    <form action="indexex5.php" method="get">

        <fieldset>
            <legend>Digite uma letra</legend>
            <label for="letra">letra</label>
            <input type="text" name="letra" id="letra" placeholder="0" required maxlenght="1">
            <input type="submit" name="teste" value="teste">

            
    </form>



    <?php

    if( $_GET['letra'] === "A" || $_GET['letra'] === "E" || $_GET['letra'] === "I" || $_GET['letra'] === "O" || $_GET['letra'] === "U" ){
        $letra = $_GET['letra'];
        echo " A letra  . $letra . é uma Vogal";
    }

    else {
        $letra = $_GET['letra'];
        echo " A letra $letra é uma Consoante";
    }


    
    
    ?>
</body>
</html>