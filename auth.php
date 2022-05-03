<?php
 $login = filter_var(trim($_POST['login']),
 FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']),
 FILTER_SANITIZE_STRING);
 


 $pass = md5 ($pass."asd123");
 
 require "blocks/connect.php";

 $result = $mysql->query("SELECT * FROM `tablica` WHERE `login` = '$login' AND `pass` = '$pass'");
 $user = $result->fetch_assoc();
 if(count($user) == 0) {
	 echo "Такой пользователь не найден";
	 exit();
 }
 
 setcookie('user', $user['name'], time() + 3600, "/");
 setcookie('login', $user['login'], time() + 3600, "/");
 setcookie('id', $user['id'], time() + 3600, "/");
 

 $mysql->close();
 
 header('Location: /cabinet.php');
?>