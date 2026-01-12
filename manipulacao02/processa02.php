<?php 

if (!empty($_POST['name'])) {
    echo " <br>Nome:" .$_POST['name'];
     echo " <br>Email:" .$_POST['email'];
      echo "<br>Idade:" .$_POST['number'];
} else {
    echo "campo obrigatorio.";
}


?>