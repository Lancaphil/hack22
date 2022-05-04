<!DOCTYPE html>
<html lang="ru">
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script>
<script type="text/javascript" src="https://comet-server.ru/CometServerApi.js" ></script>
<script type="text/javascript" src="html_chat.js" ></script>
<link rel="stylesheet" type="text/css" href="https://comet-server.ru/doc/html_chat.css"></link>
<meta charset="UTF-8" >
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <link href="css/style.css" rel="stylesheet" type="text/css" />
 <title>Чат</title>
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



<!-- Осталось настроить сам чат и запустить, для этого пишем небольшой скрипт. -->
<div id="html-chat"></div>
<style>
.holder-html-chat{ border: 1px solid #ccc;padding:10px;background-color: #fff;width: 600px;}
.html-chat-history{ max-width: 600px; overflow: auto;max-height: 900px; border: 1px solid #ccc;padding: 5px;}
.html-chat-js-name{ margin-top:10px; }
.html-chat-js-input{ max-width: 600px;max-height: 100px;width: 600px;margin-top:10px; }
.html-chat-js-button-holder{ margin-bottom: 0px;margin-top: 10px; }
.html-chat-js-button-holder input{ width: 220px; }
.html-chat-js-answer{ float:right; }
.html-chat-js-answer{ float:up; }
.html-chat-js-answer a{ color: #777;font-size: 12px; font-family: cursive;}
.html-chat-js-answer a:hover{ color: #338;font-size: 12px; font-family: cursive;}
.html-chat-msg{ margin: 0px; }
</style>

<script>

   /**
    * Чат работает на comet-server.ru
    * По любым вопросам обращайтесь support@comet-server.ru или на сайт comet-server.ru
    */
    $(document).ready(function()
    {
       // Запуск api комет сервера
       CometServer().start({dev_id: 15 }) // Идентификатор разработчика на comet-server.ru

       // Запуск чата. Передаём ему элемент в котором надо создать окно чата.
       htmljs_Chat_Init( $("#html-chat") )
    });
</script>
</div>
</div>

<footer>
	<span class="left">Все права защищены &copy; 2022</span><span class="right">Соц. кнопки <img src="img/VK.png" alt="Группа Вконтакте" title="Группа Вконтакте" /></span>
	</footer>

</body>
</html>