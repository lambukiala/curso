<?php 

echo "<h1>Exercicio</h1><br>";

$nome = ["Ana", "Lambu", "Kiala"];
 
 foreach ($nome as $nome) {
    
        echo "nome: $nome<br>";

 }
?>

<?php 

$contador = 0;
while ($contador < 3) {
       echo"Nome: $contador<br>";

       $contador++;
}

?>

<?php 

function saudacao () {
       echo "olá Mundo! <br>";
}

saudacao();


?>


<?php 


function somar($a , $b){
      
       return $a + $b;

      
}
  $result = somar(5, 3);
  echo $result;
?>