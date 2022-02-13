<?php
	include_once 'bd.php';
	$db=new Database('root','','localhost', 'chestionar');
    $conn=$db->getConnection();
    
    $nume_user=$_POST['register_nume'];
    $pren_user=$_POST['register_pren'];
    $email_user=$_POST['register_email'];
    $username_user=$_POST['register_username'];
    $password_user=$_POST['register_parola'];

    $sql="INSERT INTO `inregistrari` (`nume`, `prenume`, `email`, `username`, `parola`) VALUES ('$nume_user', '$pren_user', '$email_user', '$username_user', '$password_user');";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	header("Location: index.html?admin_transfer=success");