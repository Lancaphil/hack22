<!DOCTYPE html>
<html lang="ru">
<head>
 <meta charset="UTF-8" >
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style1.css">
 <title>Форма регистрации</title>
</head>



<body>
<div class="container mt-4">
 <?php
	if(isset($_COOKIE['user']) == false):
 ?>

 <div class="row">
 <div class="col">
  <h1>Форма регистрации</h1><br>
  <form action="check.php" method="post">
  <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
  <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
  <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
  <button class="btn btn-succes"
  type="submit">Зарегистрироваться</button>
  </form>
 </div>
 <div class="col">
  <h1>Форма авторизации</h1><br>
  <form action="auth.php" method="post">
  <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
  <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
  <button class="btn btn-succes"
	type="submit">Авторизоваться</button>
  </form>
 </div>
 <?php else: ?>
 <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a>.</p>
 
 <?php endif;?>
 
 
</div>
</div>
 
</body>
</html>