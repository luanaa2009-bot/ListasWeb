<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form acion="">
        <label for ="numero"> Numero: </label>
        <input type="number" name= "numero">
        <input type= "submit"> 
    </form>
    <ul>
    <?php

    if(!isset($_GET['numero'])){
    exit();
    }
    $numero=$_GET['numero'];
    
    function tabuada($n){
    if(i = 1; $i<=10; $i++){
        <li> <?php echo $i "*". $n. "=". $i * $n; ?></li>
        <?php
    }   
    }
    tabuada($numero);





?>
</body>
</html>