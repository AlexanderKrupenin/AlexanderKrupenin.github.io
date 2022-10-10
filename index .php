<?php include("index3.php");?>

<?php $array = [
    '<li>арктический,</li>',
    '<li>субарктический,</li>',
    '<li>северный умеренный,</li>',
    '<li>северный субтропический,</li>',
    '<li>северный тропический,</li>',
    '<li>северный субэкваториальный,</li>',
    '<li>экваториальный,</li>',
    '<li>южный субэкваториальный,</li>',
    '<li>южный тропический,</li>',
    '<li>южный субтропический,</li>',
    '<li>южный умеренный,</li>',
    '<li>субантарктический,</li>',
    '<li>антарктический.</li>'
]

 ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?php echo($index); ?></title>
      <link rel="apple-touch-icon" sizes = "180x180" href = "apple-touch-icon.png">
      <link rel="icon" type = "image/png" sizes="32x32" href = "img/favicon-32x32.png">
      <link rel="icon" type = "image/png" sizes="16x16" href = "img/favicon-32x32.png">
      <link rel="manifest" href = "site.webmanifest">
    <link rel="stylesheet" href = "index.css">
  </head>
  <body>
  <header>
      <div class = "top_line head_title"  style= "position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
      <h1 class = "text_up head_title" style= "position: fixed; left: 25%;top:1%; width: 45%;height: 5%;">Отдых на природе</h1>
      <a href="<?php	
      $name='Вторая страница'; 
      $link='registr.php';	
      $current_page=true;	
      echo $link;	
      ?>">><button class = "button_main head_title" style = "position: fixed; left: 50%;top:12%; width: 15%;height: 5%;">Регистрация</button></a>

      <a href=<?php	
      $name='Вторая страница'; 
      $link='comment.php';	
      $current_page=true;	
      echo $link;	
      ?>>><button class = "button_main head_title" style = "position: fixed; left: 10%;top:12%; width: 15%;height: 5%;">Отзывы</button></a>

      <a href=<?php	
      $name='Вторая страница'; 
      $link='entry.php';	
      $current_page=true;	
      echo $link;	
      ?>>><button class = "button_main head_title" style = "position: fixed; left: 30%;top:12%; width: 15%;height: 5%;">Вход</button></a>

      <a href=<?php	
      $link='error.php';	
      echo $link;	
      ?>><button class = "button_main head_title" style = "position: fixed; left: 70%;top:12%; width: 15%;height: 5%;">Туры</button></a>
    </header>
    <main> 
      <div class = "background1" style = "position: absolute; left: 0%;top:55%;"><?php require('index1.php'); ?></div>
      <div class = "background2" style = "position: absolute; left: 0%;top:175%;"><?php require('index1.php'); ?></div>
      <div class = "background3" style = "position: absolute; left: 0%;top:295%;"></div>
      <div class = "background4" style = "position: absolute; left: 0%;top:415%;"></div>
      <div class = "background5" style = "position: absolute; left: 0%;top:535%;"></div>
      <div class = "background6" style = "position: absolute; left: 0%;top:655%;"></div>

      <div class = "blackout" style = "position: absolute; left: 0%;top:55%;"></div>
      <div class = "blackout" style = "position: absolute; left: 60%;top:175%;"></div>
      <div class = "blackout" style = "position: absolute; left: 0%;top:295%;"></div>
      <div class = "blackout" style = "position: absolute; left: 60%;top:415%;"></div>
      <div class = "blackout" style = "position: absolute; left: 0%;top:535%;"></div>
      <div class = "blackout" style = "position: absolute; left: 60%;top:655%;"></div>

      <p class = "text_between" style = "left: 35%;top:35%; width: 30%; height: 10%;">Походы в летний лес</p>
      <p class = "text_between" style = "left: 35%;top:155%; width: 30%; height: 10%;">Походы в осенний лес</p>
      <p class = "text_between" style = "left: 35%;top:275%; width: 30%; height: 10%;">Походы в зимний лес</p>
      <p class = "text_between" style = "left: 35%;top:395%; width: 30%; height: 10%;">Речная рыбалка</p>
      <p class = "text_between" style = "left: 35%;top:515%; width: 30%; height: 10%;">Морская рыбалка</p>
      <p class = "text_between" style = "left: 35%;top:635%; width: 30%; height: 10%;">Подъем на плато</p>

      <div class = "text_between_small" style = "left: 35%;top:735%; width: 30%; height: 10%;">
      <ul>
        <?php for($i = 0; $i <count($array); $i++ ) {
        echo $array[$i];
      } ?>
      </ul>
    </div>
     
</form>
    </main>
    <footer>
      <div class = "top_line" style = "position: absolute; left: 0%;top:780%; width: 100%; height: 20%;"> </div>
      <div class = "text" style = "position: absolute; left: 35%;top:785%; width: 40%; height: 10%;"></div>
      <div class = "text" style = "position: absolute; left: 1%;top:788%; width: 40%; height: 10%;"><?php require('index1.php'); ?> </div>
      <div lass = "head_title" style = "position: absolute; left: 65%;top:785%; width: 10%; height: 10%;"><?php require('index2.php'); ?> </div>
    </footer>
  </body>
  </html>