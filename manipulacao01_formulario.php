<form method="GET" action="processa.php">
Name: <input type="text" name="name">
<input type="submit">
</form  
<?php 

if (!empty($_POST['name'])) {
    echo "Nome:" .$_POST['name'];
} else {
    echo "campo obrigatorio.";
}

?>