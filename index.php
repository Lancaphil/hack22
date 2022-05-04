<!DOCTYPE html>
<html lang="ru">


<head>
	<title>Выбирайка - html</title>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="test, site, website" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
<span class="right"><span class="contact"><a href="reg.php" title="Зарегистрироваться">Регистрация</a></span><span class="contact"><a href="reg.php" title="Войти">Вход</a></span></span>
</header>
 
 
<?php else: ?>
<header>
<a href="/index.php" title="На главную" id="logo">Выбирайка</a><span class="contact"><a href="about.html" title="Информация о нас">О нас</a></span><input type="text"
class="field" placeholder="Давай помогу найти" /> 
<span class="right"><span class="contact"><a href="cabinet.php" title="В личный кабинет">Личный кабинет</a></span></span>
</header>
<?php endif;?>



<div class="clear"><br /></div>
<center>
<div id="menu">Разделы<hr /></div>
</center>

<div id="wrapper">
	<div id="articles">
		<article>
			<img src="img/kur.jpg" alt="изображение" title="изображение" />
			<h2>Заголовок</h2>
			<p>Здесь находиться Вступительный текст</p>
			<a href="/article" title="Посмотреть статью">Читать далее</a>
		</article>
		<article>
			<img src="img/zver.jpg" alt="изображение" title="изображение" />
			<h2>Заголовок</h2>
			<p>Здесь находиться Вступительный текст</p>
			<a href="/article" title="Посмотреть статью">Читать далее</a>
		</article>
		<article>
			<img src="img/war.jpg" alt="изображение" title="изображение" />
			<h2>Заголовок</h2>
			<p>Здесь находиться Вступительный текст</p>
			<a href="/article" title="Посмотреть статью">Читать далее</a>
		</article>
		<article>
			<img src="img/pes.jpg" alt="изображение" title="изображение" />
			<h2>Заголовок</h2>
			<p>Здесь находиться Вступительный текст</p>
			<a href="/article" title="Посмотреть статью">Читать далее</a>
		</article>
	</div>
</div>
</div>
</div>
	<footer>
	<span class="left">Все права защищены &copy; 2022</span><span class="right">Соц. кнопки <img src="img/VK.png" alt="Группа Вконтакте" title="Группа Вконтакте" /></span>
	</footer>
</body>
</html>