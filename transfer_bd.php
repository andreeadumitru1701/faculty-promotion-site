<?php
	include_once 'bd.php';
	$db=new Database('root','','localhost', 'chestionar');
	$conn=$db->getConnection();
	$name=$_POST['nume'];
	$pname=$_POST['prenume'];
	$email=$_POST['email'];
	$persoana=$_POST['persoana'];
	$message=$_POST['mesaj'];
	
	$sql="INSERT INTO cereri (`nume`, `prenume`, `email`, `persoana`, `cerere`) VALUES ('$name', '$pname', '$email', '$persoana', '$message');";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	header("Location: index.html?transfer_bd=success");
