<?php

function increaseScore(int $x){
	if(isset($_SESSION['score'])){
		$_SESSION['score'] = $_SESSION['score'] + $x;
	}
	
}

function includeHeader(){
	include("header.php");
}

function includeFooter(){
	include("footer.php");
}

function function_alert($message){
	echo "<script>alert('$message');</script>";
	}


?>

