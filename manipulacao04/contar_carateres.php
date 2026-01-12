
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['texto'];
   $numero_caracteres = strlen($texto);
    
   echo "<h1>Numero de carateres: $numero_caracteres</h1>";
} else{
    echo "<h1>Erro: Metodo de requisição invalido.</h1>";
};

?>