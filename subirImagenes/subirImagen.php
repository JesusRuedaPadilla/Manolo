<?php
if(isset($_FILES['fichero'])){

    move_uploaded_file($_FILES['fichero']['tmp_name'],"./img/B8TZWKxCEAEJDOs.jpg");

}
$foto="";




?>


<form action='' method='post' enctype='multipart/form-data'>
Selecciona fichero:
<br>
<input type='file' name='fichero'>
<br>
<input type='file' name='fichero2'>
<br>

<input type='submit' value='Enviar'>
</form>


<?php

if(isset($_FILES['fichero']))
{
    echo "<img src='./img/B8TZWKxCEAEJDOs.jpg' alt='Esto es una imagen'/>";
}




?>