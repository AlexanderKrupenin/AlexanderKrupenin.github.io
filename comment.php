<?php include("index3.php");?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?php echo($com); ?></title>
      <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-32x32.png">
      <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <header>
      <div class = "top_line1 head_title" style= "position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
      <h1 class = "text_up1 head_title" style= "position: fixed; left: 25%;top:1%; width: 45%;height: 5%;">Отдых на природе</h1>
      <a href=<?php echo($link); ?>><button class = "button_main head_title" style="position: fixed; left: 33%;top:13%; width: 32%;height: 5%;">Вернуться на главную страницу</button></a>
    </header>
    <main> 
      <div class = "background3" style = "position: absolute;  left: 0%;top:20%; height: 110%;"></div>
      <div class = "blackout" style = "position: absolute; left: 30%;top:25%; height: 80%;"></div>
      <form action = "https://httpbin.org/post" method = "POST" enctype = "multipart/form-data" class = "text" style = "position: absolute; left: 40%;top:25%; width: 45%;">    
            <label for = "last_name">Фамилия <br><br><em></em></label>
            <input id = "last_name"><br>      
            <label for = "first_name">Имя <br><br><em></em></label>
            <input id = "first_name"><br>
            <label for = "second_name">Отчество <br><br><em></em></label>
            <input id = "second_name"><br>
            <label for = "email" >Email <br><br><em></em></label>
            <input id = "email"><br>
            <label for = "sex">Вид<br><br></label>
            <select id = "sex">
              <option value = "appeal">Жалоба</option>
              <option value = "handling">Обращение</option>
              <option value = "help">Помощь</option>
              <option value = "other">Другое</option>
            </select><br>
            <label for = "comments">Заметки<br><br></label>
            <input id = "email"><br>
            <label for = "telephone">Откуда узнали о нас<br></label>
            <label>
              <input type="radio" name="question" value="yes">
              Друзья
            </label>
            <label><br>
              <input type="radio" name="question" value="no">
              Соцсети
            </label>
            <p><input type = "file" name = "photo" multiple accept = "image/*,image/jpeg"></p>
            <textarea style="background: #ffffff;border: 2px solid #ffffff; width: 305px; height: 80px; box-sizing: border-box; font-size: 14px; resize: none;">
              </textarea> <br>
              <input type="checkbox" name="option5" value="a5">Запомнить меня</p>           
        <p><input type = "submit" class = "button_main" value="          Отправить         "></p>
      </form>
    </main>
    <footer>
      <div class = "top_line" style = "position: absolute; left: 0%;top:110%; width: 100%; height: 20%;"> </div>
      <div class = "text" style = "position: absolute; left: 35%;top:115%; width: 40%; height: 10%;">Крупенин Александр +7 901 744 15 74 </div>
      <div class = "text" style = "position: absolute; left: 1%;top:115%; width: 40%; height: 10%;"><?php require('index1.php'); ?> </div>
      <div lass = "head_title" style = "position: absolute; left: 65%;top:115%; width: 10%; height: 10%;"><?php require('index2.php'); ?> </div>
    </footer>
  </body>
  </html>