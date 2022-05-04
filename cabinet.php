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



<div id="WebChatFormForm" ></div> 
    <input type="text" id="WebChatNameID" value= <?=$_COOKIE['login']?> > <br>
    <textarea id = "WebChatTextID" placeholder = "Отправьте сообщение в online чат..." ></textarea><br>
 
    <input type="button" onclick="web_send_msg();" value="Отправить" >
    <div id="answer_div" ></div> <br>
 
  
    <script>
         // вырезает html теги
         function strip(html)
         {
             var tmp = document.createElement("DIV");
             tmp.innerHTML = html;
             return tmp.textContent || tmp.innerText || "";
         }
 
         // Отправляет сообщение в чат
         function web_send_msg()
         {
             // Получение значений из элементов ввода.
             var text = $("#WebChatTextID").val(); // Получаем текст сообщения
             var name = $("#WebChatNameID").val(); // Получаем имя пользователя
 
             // Очистка поля с текстом сообщения
             $("#WebChatTextID").val("");  
 
             // Добавление отправленного сообщения к списку сообщений.
             $("#WebChatFormForm").append("<p><b>"+strip(name)+": </b>"+text+"</p>");
 
             // Отправка сообщения в канал чата
             CometServer().web_pipe_send("web_chat_pipe", {"text":text, "name":name});
         }
 
 
         // Функция выполнится после загрузки страницы
         $(document).ready(function()
         {
             CometServer().start({dev_id:1}) // Подключаемся к комет серверу
 
             // Подписываемся на канал в который и будут отправляться сообщения чата.
             CometServer().subscription("web_chat_pipe", function(msg)
             {
                console.log(msg)
                 // Добавление полученного сообщения к списку сообщений.
                 $("#WebChatFormForm").append("<p><b>"+strip(msg.data.name)+": </b>"+msg.data.text+"</p>");
             });
         });
    </script>



</center>
	
</body>

</html>