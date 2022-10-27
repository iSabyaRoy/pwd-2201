<?php

include_once 'db.php';

if(isset($_POST['save'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];

	$sql = "INSERT INTO person (`name`, `phone`) VALUES('$name', '$phone')";

	$query = $conn->query($sql);

	if($query == TRUE){
		header("Location: ../person.php");
	}else{
		echo "Data insert Error";
	}
}


if(isset($_POST['update'])){
	$id = $_POST['id'];

	$name = $_POST['name'];
	$phone = $_POST['phone'];


	$sql = "UPDATE person SET `name` = '$name', `phone` = '$phone' WHERE id = $id";

	$query = $conn->query($sql);

	if($query == TRUE){
		header("Location: ../person.php");
	}else{
		echo "Data insert Error";
	}
}


if(isset($_POST['delete'])){
	$id = $_POST['id'];


	$sql = "DELETE FROM person WHERE id = $id";

	$query = $conn->query($sql);

	if($query == TRUE){
		header("Location: ../person.php");
	}else{
		echo "Data delete Error";
	}
}

?>