<?php
    include_once 'bd.php';
    $db=new Database('root','','localhost', 'chestionar');
    $conn=$db->getConnection();

    $username=$_POST['login_username'];
    $password=$_POST['login_parola'];

    $result=$conn->query("SELECT * from inregistrari where username='$username' and parola='$password'")
        or die ("Failed to query database");
    $row=$result->fetch_array();
    if ($row['username']==$username && $row['parola']==$password)
    {
        echo "Autentificarea a reusit!";
    } else echo "Eroare la autentificare.";

    header("Location: index.html?login_transfer=success");
