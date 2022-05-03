<!DOCTYPE html>
<html lang="ru">
<head>
 <meta charset="UTF-8" >
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <link href="css/style.css" rel="stylesheet" type="text/css" />
 <title>Личный кабинет</title>
</head>

<body>
<div id="page-wrap">
<header>
<a href="/index.php" title="На главную" id="logo">Выбирайка</a><span class="contact"><a href="about.html" title="Информация о нас">О нас</a></span><input type="text"
class="field" placeholder="Давай помогу найти" />
</header>

<div class="clear"><br /></div>
<center>
<div id="menu">Личный кабинет<hr /></div>
<div>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a>.</div>
<div>Login:  <?=$_COOKIE['login']?> </div>
<div>Имя пользователя:  <?=$_COOKIE['user']?> </div>
<div>ID пользователя:  <?=$_COOKIE['id']?> </div>






</center>
	
</body>

</html>