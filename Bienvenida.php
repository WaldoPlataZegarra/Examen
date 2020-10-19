<?php
include "cabecera.inc.php";
$id=$_SESSION['username'];
if(!isset($id)){
	header("location: index.php");
}
else
{

}

?>