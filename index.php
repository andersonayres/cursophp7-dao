<?php 

require_once("config.php");

$ayres = new Usuario();
$ayres->loadById(4);
echo $ayres;

 ?>