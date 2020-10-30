<?php
define("TBUSUARIO", "usuario");


require("db.php");
$sql = "DROP TABLE IF EXISTS " . TBUSUARIO;
banco($sql);
echo "<p>DB: TABELA " . TBUSUARIO . " apagada.</p>";

?>