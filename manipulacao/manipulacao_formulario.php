//Validação de formulario utilizando o metodo post.

<form method="POST" action="processa.php">
Name: <input type="text" name="name">
<input type="submit">
</form  
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Nome enviado:" .$name;
};
?>

