<!doctype html>
<html lang="ru">
<head>
<title>Bright Ideas | Главная</title>
  <meta charset = "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/mainStyle.css">
  <link rel="stylesheet" type="text/css" href="css/WelcomeBlockStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    
</head>
<body>

<div class = "container-fluid" id="MAIN">
 <!--Header-->

    <div class="container-fluid" id="header-box">
       <?php include("html/head.html"); ?>
    </div>

 <!--End of Header test 2-->


    <!--div class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Главная</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Наши услуги <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Создание сайтов</a></li>
          <li><a href="#">Пусто</a></li>
          <li><a href="#">Пусто</a></li>
        </ul>
      </li>
      <li><a href="#">Примеры</a></li>
      <li><a href="#">Оставить заявку</a></li>
    </ul>
  </div>
</div-->
    
    <!--Navigation-->
    <?php include("html/nav.html"); ?>
    <!--End Navigation-->

<!--Welcome block-->
  <div class="container-fluid" style="padding:0px; margin-top: -10px; border:1px solid black;" id="WelcomeB">
    <img src="img/ios02.jpg" class="img-responsive" id="image" alt="Main Picture">
    <!--div  id="WelcomeBlock">
      <p>Text</p>
    </div-->
  </div>

<!--End-->




    <!--div class="container-fluid" style="padding:0px; margin-top: -10px;" id="imgCont">
      <img src="img/ios02.jpg" class="img-responsive" alt="Main Picture">
      <div class="jumbotron text-center" id="overlay">
        <div class="container-fluid" id="txt">
          <h1>Добро Пожаловать</h1>    
          <p>Bright Ideas - Команда а мбициозных и креативных фрилансеров, готовая сделать для вас сайт вашей мечты. </p>
        </div>
      </div>
    </div-->
  

    <!--div class="container-fluid" style="padding:0px; margin-top: -10px;">
      <img src="img/ios02.jpg" class="img-responsive" alt="Main Picture">
    </div>
    <div class="jumbotron text-center">
    <h1>Добро Пожаловать</h1>    
    <p>Bright Ideas - Команда амбициозных и креативных фрилансеров, готовая сделать для вас сайт вашей мечты. </p>
  </div><br-->


     <!--Nachinaetsya slayd-->
    <!--div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 50px;">
    <!-- Indicators -->
    <!--ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <!--div class="carousel-inner">

      <div class="item active">
        <img src="img/waterfall.jpg" alt="Waterfall" style="width:100%;">
        <div class="carousel-caption">
          <h3>Водопад</h3>
          <p>Водопад водопад водопад</p>
        </div>
      </div>

      <div class="item">
        <img src="img/forest.jpg" alt="Forest" style="width:100%;">
        <div class="carousel-caption">
          <h3>Лес</h3>
          <p>Лес лес лес лес лес лес</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/mountains.jpg" alt="Mountains" style="width:100%;">
        <div class="carousel-caption">
          <h3>Горы</h3>
          <p>Горы горы горы горы горы!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <!--a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div-->
    <!--Slayd zakonchilsya-->

<!--Почему мы-->

<!--br>
<h2> Почему именно мы?</h2>
<div class="container-fluid text-center bg-grey" style="margin-top: 30px;">
    <div class="row text-center">
        <div class="col-sm-4">
            <div class="thumbnail">
              <img src="img/quality.jpg" alt="Quality" width="304" height="236">
              <p><strong><br>Качество</strong></p>
              <p>Написать что-то про качество и тд</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="thumbnail">
              <img src="img/price.png" alt="Price" width="304" height="236">
              <p><strong><br>Цена</strong></p>
              <p>Напишем типо низкая цена и пр</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="thumbnail">
              <img src="img/creativity.png" alt="Creativity" width="304" height="236">
              <p><strong><br>Креативность</strong></p>
              <p>Ну креативность у нас зашкаливает, особенно у Шера=)</p>
            </div>
        </div>
    </div>
</div-->
    
    <?php include("html/whyWe.html"); ?>

<!--Почему мы-->    
    
<!--Tipo klienti o nas -->
    <h2>Клиенты о Нас:</h2>
  <div id="myCarousel2" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Ребята молодцы, выполнили мой заказ на отлично."<br><span>Максим Ким, ген.директор Fine.Uz</span></h4>
      </div>
      <div class="item">
        <h4>"Просто замечательно, то что я хотел!"<br><span>Джахонгир, ген.директор Master Print Group</span></h4>
      </div>
      <div class="item">
        <h4>"Могу с уверенностью сказать, что ребята знают свое дело."<br><span>Джасур, онлайн-магазин Rightshop</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   
    
</div>

<!--FOOTER-->
  <div class="container-fluid" style="background-color: black; height: 100px;">
    <div class="row" style="text-align: center;"><p style="font-size: 1.2em;">Designed by Bright Idea Group</p></div>
  </div>
<!--Footer End-->

</body>
</html>