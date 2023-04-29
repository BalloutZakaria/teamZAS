<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excerice1</title>
    <link rel="stylesheet" href="bootstrap.css">

</head>
<body>


    <?php

    $resultat="Calculatrice";

    $num1 =$_GET["P1"];

    $num2 = $_GET["P2"];

    $operation = $_GET["op"];

    if(empty($num1)){
        $resultat="la zone du premier nombre est vide";
    }elseif(empty($num2)){
        $resultat="waaa sir t9 ";
    }else{
        if($operation=="-"){
            $resultat=$num1-$num2;
        }elseif ($operation=="+"){
            $resultat=$num1+$num2;
        }elseif ($operation=="*"){
            $resultat=$num1*$num2;
        }elseif ($operation=="%"){
            $resultat=$num1%$num2;
        }
    }

    ?>
    <form action ="exrc.php" method="get" class="form">

    <center>
       
    <div class="li">
       <label >Saisir le premier nombre:</label> 
     <input type="number" name="P1" class="form-control w-25" placeholder="saisir un nombreee" ><br><br><br>
     </div>
     <div class="li">
     <label >Saisir le deuxiéme nombre:</label>
     <input type="number" name="P2"  class="form-control w-25" placeholder="saisir un nombreee" ><br><br><br>
    </div>
<div class="dropdown">
    <label>Choisir votre opération</label><br>

  <select name="op" class="form-control w-25">
    <option> cliquer ici</option>
    <option value="-">-</option>
    <option value="+">+</option>
    <option value="*">*</option>
    <option value="%">%</option>

</select>

<hr>

</div>
<div class="butnzac">
    <input type="submit" class="btn btn-info" value="Calculer">
    <input type="reset" class="btn btn-info" value="autre calcul">
</div>
<div class="smaaaxi">
<?php
echo $resultat;
?>
</div>
</form>
</div>
</body>
</html>