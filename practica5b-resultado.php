<?php
    $euros= $_POST["euro"];
    
    $monedas =[
        "dolar" => 1.06,
        "libra" => 0.927,
        "yene" => 111.232,
        "franco"=> 1.515

    ];
    if($_POST["moneda"]=="dolares"){
        echo $euros ."euros son ".$euros * $monedas["dolar"].PHP_EOL."dolares";    
    }

    if($_POST["moneda"]=="libras"){
        echo $euros ."euros son ". $euros * $monedas["libra"].PHP_EOL."libras";    
    }
    if($_POST["moneda"]=="yenes"){
        echo $euros ."euros son ". $euros * $monedas["yene"].PHP_EOL."yenes";    
    }
    if($_POST["moneda"]=="francos"){
        echo $euros ."euros son ". $euros * $monedas["franco"].PHP_EOL."francos";    
    }


?>