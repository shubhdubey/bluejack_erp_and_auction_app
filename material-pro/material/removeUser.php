<?php
session_start();
include_once("sconfig.php");
$id=$_GET['id'];

$sql="UPDATE usermaster SET ustatus = 2 where id='$id'";
if( mysqli_query($conn, $sql)){
	$json = array('status' => 1 );
}
else{
	$json = array('status' => 0 );
}

@mysqli_close();

 echo json_encode($json);


?>