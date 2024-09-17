<?php

/**

 * using mysqli_connect for database connection

 */

$servername = "localhost";
$username = "bemfikti_oprec2";
$password = "fachrilfahril";
$database = "bemfikti_oprecfenom";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "bemfikti_volun";




$conn = mysqli_connect($servername, $username, $password, $database); 



if(mysqli_connect_errno()){

    echo mysqli_connect_errno();

}



if($_SERVER["HTTPS"]!="on"){

	header("Location:https://".

	$_SERVER["HTTP_HOST"].

	$_SERVER["REQUEST_URI"]);

	exit();

}



?>