<!DOCTYPE html>
<html lang="ru">
<head>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <meta charset="UTF-8" >
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <link href="css/style.css" rel="stylesheet" type="text/css" />
 <title>Личный кабинет</title>
</head>

<body>
<div id="page-wrap">

<?php
	if(isset($_COOKIE['user']) == false):
 ?>
 <div class="row">

<header>
<a href="/index.php" title="На главную" id="logo">Выбирайка</a><span class="contact"><a href="about.html" title="Информация о нас">О нас</a></span><input type="text"
class="field" placeholder="Давай помогу найти" /> 
<span class="right"><span class="contact"><a href="chat-plugin.php" title="Чат">Чат</a></span><span class="contact"><a href="reg.php" title="Зарегистрироваться">Регистрация</a></span><span class="contact"><a href="reg.php" title="Войти">Вход</a></span></span>
</header>
 
 
<?php else: ?>
<header>
<a href="/index.php" title="На главную" id="logo">Выбирайка</a><span class="contact"><a href="about.html" title="Информация о нас">О нас</a></span><input type="text"
class="field" placeholder="Давай помогу найти" /> 
<span class="right"><span class="contact"><a href="chat-plugin.php" title="Чат">Чат</a></span><span class="contact"><a href="cabinet.php" title="В личный кабинет">Личный кабинет</a></span></span>
</header>
<?php endif;?>

<div class="clear"><br /></div>
<center>
<div id="menu">Личный кабинет<hr /></div>
<div>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a>.</div>
<div>Login:  <?=$_COOKIE['login']?> </div>
<div>Имя пользователя:  <?=$_COOKIE['user']?> </div>
<div>ID пользователя:  <?=$_COOKIE['id']?> </div>


</center>
</div>
	<footer>
	<span class="left">Все права защищены &copy; 2022</span><span class="right">Соц. кнопки <img src="img/VK.png" alt="Группа Вконтакте" title="Группа Вконтакте" /></span>
	</footer>
	
</body>
</html>