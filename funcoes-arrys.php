<?php 

$produtos = ["teclado" =>  50, "mouse" => 30] ;
    echo "Preço do teclado:" .$produtos["teclado"] . "<br>" ;
    ?>

    <?php 
    
    $alunos = [

        ["nome" => "ana", "nota" =>8], 
        ["nome" => "Pedro", "nota" =>6],
    ];
    
    foreach ($alunos as $aluno) {
        echo $aluno['nome']  . ":" .$aluno['nota'] . "<br>";
    }
    
    ?>