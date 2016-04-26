<?php

require './Usuario.php';


$oUsr = new Usuario(NULL, NULL, $_POST["usuario"], $_POST["clave"]);

json_encode($oUsr->Acceso());
?>
