<!DOCTYPE HTML>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Finance pro</title>
	<link rel="shortcut icon" href="assets/img/logostext.png" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">



    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>



<style>
th {
  background-color: #eee;
  font-weight: bold;
}
th,
td {
  border: 0.125em solid #333;
  line-height: 1.5;
  padding: 0.75em;
  text-align: left;
}
/* Stack rows vertically on small screens */
@media (max-width: 30em) {
  /* Hide column labels */
	thead tr {
		position: absolute;
		top: -9999em;
		left: -9999em;
	}
	tr {
    border: 0.125em solid #333;
    border-bottom: 0;
  }
	/* Leave a space between table rows */
  tr + tr {
    margin-top: 1.5em;
  }
  /* Get table cells to act like rows */
  tr,
  td {
		display: block;
	}
	td {
		border: none;
		border-bottom: 0.125em solid #333;
	/* Leave a space for data labels */
		padding-left: 50%;
	}
	/* Add data labels */
  td:before {
    content: attr(data-label);
    display: inline-block;
    font-weight: bold;
    line-height: 1.5;
    margin-left: -100%;
    width: 100%;
  }
}
/* Stack labels vertically on smaller screens */
@media (max-width: 20em) {
  td {
    padding-left: 0.75em;
  }
  td:before {
    display: block;
    margin-bottom: 0.75em;
    margin-left: 0;
  }
}

#video_background {
position: absolute;
bottom: 0px;
right: 0px;
min-width: 100%;
min-height: 100%;
width: auto;
height: auto;
z-index: -999;
overflow: hidden;
}

.knopka16 {
    background-image: linear-gradient(#333, #333), linear-gradient(#333, #333), linear-gradient(#333, #333), linear-gradient(#333, #333), linear-gradient(#333, #333), linear-gradient(#333, #333), linear-gradient(#333, #333), linear-gradient(#333, #333);
    background-position: 0 0px, 100% 0px, 0 100%, 100% 100%;
    background-repeat: no-repeat;
    background-size: 2rem 5px, 2rem 5px, 2rem 5px, 2rem 5px, 5px 1.5rem, 5px 1.5rem, 5px 1.5rem, 5px 1.5rem;
    box-shadow: 0 0 0 5px rgba(255, 99, 71, 0) inset;
    color: #333;
        margin: 10px auto;
    display: table;
    font: 500 20px verdana;
    padding: 15px 25px;
    position: relative;
    text-decoration: none;
    transform: translateZ(0px);
    transition: background-size 1s ease 0.4s, box-shadow 0.4s ease 0s, color 0.4s ease 0s;
}
.knopka16:hover {
    background-size: 52% 5px, 52% 5px, 52% 5px, 52% 5px, 5px 52%, 5px 52%, 5px 52%, 5px 52%;
    box-shadow: 0 0 0 5px #36648B inset;
    color: #36648B;
    transition: background-size 1s ease 0s, box-shadow 0.4s ease 0.6s, color 0.4s ease 0.6s;
}
</style>


  </head>
<!--///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\-->



<?php
session_start();
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. 

    ?>
<body data-spy="scroll" data-offset="0" data-target="#navbar-main"> <!--434b1b     454a2c      -->


  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-menu" style="font-size:30px; color:#3498db;"></span>
          </button>
        <!--  <a href="#home"><img src="\assets\img\logostext.png" style=" margin: -0.1% -1% -0.1% -1%; width: 12%"/></a>-->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html" class="smoothScroll">Главная</a></li>
			<li> <a href="index.html" class="smoothScroll"> О нас</a></li>
			<!--<li> <a href="#services" class="smoothScroll"> Services</a></li>-->
			<li> <a href="main.html" class="smoothScroll"> Прогноз</a></li>
			<!--<li> <a href="#portfolio" class="smoothScroll"> Portfolio</a></li>-->
			<!--<li> <a href="#blog" class="smoothScroll"> Blog</a></li> style="margin: 0% -175% 0% 1%;" -->
			<li> <a href="index.html" class="smoothScroll"> Контакты</a></li>
			<li> <a href="about.php" class="smoothScroll">Личный кабинет</a></li>
			<li> <a href="login.php" >Войти</a></li>
			<li> <a href="signup.php"  style="">Регистрация</a></li>


        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
        <div id="page-wrapper">
            <div id="page-inner">

					<!-- ==== HEADERWRAP ==== -->
	    <div id="headerwrap1" id="home" name="home">
			<header class="clearfix">
	  		 		<h1><img src="\assets\img\logostext.png" style="margin: -23% -10% -25% -10%; border: 1%; width: 15%"/></h1>
	  		 			<p   style="font-family:Ren;     font-size: 52px;">Finance pro</p>
	  		</header>
	    </div><!-- /headerwrap -->

		<!-- ==== ABOUT ==== -->
<div class="container" id="about" name="about">
<div class="row white">
<h1 class="centered" style=" font-family:Georgia ">Прогноз чистой прибыли предприятия</h1>
<hr>



<div class="container">
		<div class="row">

		<div class="col-lg-6" style=" font-family:Georgia ">
<p><b>Регрессия</b> — функция, позволяющая по средней величине одного признака определить среднюю величину другого признака, корреляционно связанного с первым.</p>
</div>

<div class="col-lg-6" style=" font-family:Georgia ">

<p><b>Регрессионный анализ</b> – статистический метод исследования влияния одной или нескольких зависимых или независимых переменных X1,X2,…,Xp на зависимую переменную Y. Уравнение линейной регрессии Yх = a+b*X, где а и b оцененные коэффициенты регрессии.
</p>
</div>

</div>
</div>

<form action="pr1.php" method="Get">		<!-- ==== ABOUT ==== -->

<table border="1" align="center" style="border-collapse: collapse; width: 100%;">
<p align="center" style="font-family:Verdana;font-size: 16px;">ВВЕДИТЕ СТАТИСТИКУ ЗА ПРОШЛЫЕ 5 ДНЕЙ РАБОТЫ ВАШЕГО ПРЕДПРИЯТИЯ</p>

      <thead>
   <tr align="center"><th> </th>
    <th align="center">Выручка<br>(тыс. грн)</th>
    <th align="center">Расходы по обычной деятельности<br>(тыс. грн)</th>		<!-- ==== деятельности ==== -->
    <th align="center">Процент к уплате<br>(%)</th>
    <th align="center">Прочие доходы<br>(тыс. грн)</th>
	<th align="center">Прочие расходы<br>(тыс. грн)</th>
	<th align="center">Налоги на прибыль<br>(тыс. грн)</th>
	<th align="center">Чистая прибыль<br>(тыс. грн)</th>
   </tr>
      </thead>
   <tr >
		<td  data-label="Период" >1-ый день</td>
		<td  data-label="Выручка(тыс. грн)"><input  type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="ov1" name="ov1" placeholder="X1" size="10"  ></td>
		<td  data-label="Расходы по обычной деятельности(тыс. грн)"><input  type="text" onkeyup = 'this.value=parseInt(this.value) | 0'  id="or1" name="or1" placeholder="X2" size="10" ></td>
		<td  data-label="Процент к уплате(%)"><input  type="text" onkeyup = 'this.value=parseInt(this.value) | 0'  id="op1" name="op1" placeholder="X3" size="10" ></td>
		<td  data-label="Прочие доходы(тыс. грн)"><input  type="text" onkeyup = 'this.value=parseInt(this.value) | 0'  id="pd1" name="pd1" placeholder="X4" size="10" ></td>
		<td  data-label="Прочие расходы(грн)"><input  type="text" onkeyup = 'this.value=parseInt(this.value) | 0'  id="pr1" name="pr1" placeholder="X5" size="10" ></td>
		<td  data-label="Налоги на прибыль(тыс. грн)"><input  type="text" onkeyup = 'this.value=parseInt(this.value) | 0'  id="on1" name="on1" placeholder="X6" size="10" ></td>
		<td data-label="Чистая прибыль(тыс. грн)"><input  type="text" onkeyup = 'this.value=parseInt(this.value) | 0'  id="ot1"  name="ot1" placeholder="Y" size="10"  ></td>
	</tr>
   <tr>
		<td data-label="Период">2-ой день</td>
		<td data-label="Выручка(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="ov2" name="ov2" placeholder="X1" size="10" ></td>
		<td data-label="Расходы по обычной деятельности(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="or2" name="or2" placeholder="X2" size="10" ></td>
		<td data-label="Процент к уплате(%)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="op2" name="op2" placeholder="X3" size="10" ></td>
		<td data-label="Прочие доходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="pd2" name="pd2" placeholder="X4" size="10"  ></td>
		<td data-label="Прочие расходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="pr2" name="pr2" placeholder="X5" size="10" ></td>
		<td data-label="Налоги на прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="on2" name="on2" placeholder="X6" size="10" ></td>
		<td data-label="Чистая прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="ot2"  name="ot2" placeholder="Y" size="10"  ></td>
	</tr>
   <tr>
		<td data-label="Период">3-ий день</td>
		<td data-label="Выручка(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="ov3" name="ov3" placeholder="X1" size="10" ></td>
		<td data-label="Расходы по обычной деятельности(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="or3" name="or3" placeholder="X2" size="10"  ></td>
		<td data-label="Процент к уплате(%)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="op3" name="op3" placeholder="X3" size="10"  ></td>
		<td data-label="Прочие доходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="pd3" name="pd3" placeholder="X4" size="10" ></td>
		<td data-label="Прочие расходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="pr3" name="pr3" placeholder="X5" size="10"  ></td>
		<td data-label="Налоги на прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="on3" name="on3" placeholder="X6" size="10"  ></td>
		<td data-label="Чистая прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="ot3"  name="ot3" placeholder="Y" size="10"  ></td>
	</tr>
   <tr>
		<td data-label="Период">4-ый день</td>
		<td data-label="Выручка(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="ov4" name="ov4" placeholder="X1" size="10" ></td>
		<td data-label="Расходы по обычной деятельности(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="or4" name="or4" placeholder="X2" size="10"  ></td>
		<td data-label="Процент к уплате(%)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="op4" name="op4" placeholder="X3" size="10" ></td>
		<td data-label="Прочие доходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="pd4" name="pd4" placeholder="X4" size="10" ></td>
		<td data-label="Прочие расходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="pr4" name="pr4" placeholder="X5" size="10" ></td>
		<td data-label="Налоги на прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="on4" name="on4" placeholder="X6" size="10"  ></td>
		<td data-label="Чистая прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="ot4"  name="ot4" placeholder="Y" size="10"  ></td>
	</tr>
   <tr>
		<td data-label="Период">5-ый день</td>
		<td data-label="Выручка(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="ov5" name="ov5" placeholder="X1" size="10" ></td>
		<td data-label="Расходы по обычной деятельности(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="or5" name="or5" placeholder="X2" size="10"  ></td>
		<td data-label="Процент к уплате(%)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="op5" name="op5" placeholder="X3" size="10" ></td>
		<td data-label="Прочие доходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="pd5" name="pd5" placeholder="X4" size="10" ></td>
		<td data-label="Прочие расходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="pr5" name="pr5" placeholder="X5" size="10" ></td>
		<td data-label="Налоги на прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="on5" name="on5" placeholder="X6" size="10"  ></td>
		<td data-label="Чистая прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="ot5"  name="ot5" placeholder="Y" size="10"  ></td>
	</tr>
</table>
<div style=" font-family:Georgia ">Таблица содержит прошлую статистику работы предприятия, в роли данных для дальнейшего прогноза.</div>



	<br/><br/>

<table border="1" align="center" style="border-collapse: collapse; width: 100%;">
<p align="center" style="font-family:Verdana;font-size: 16px;">ВВЕДИТЕ СТАТИСТИКУ ЗА ПОСЛЕДНИЕ 3 ДНЯ РАБОТЫ ВАШЕГО ПРЕДПРИЯТИЯ</p>

      <thead>
   <tr><th> </th>
    <th>Выручка<br>(тыс. грн)</th>
    <th>Расходы по обычной деятельности<br>(тыс. грн)</th>
    <th>Процент к уплате<br>(%)</th>
    <th>Прочие доходы<br>(тыс. грн)</th>
	<th>Прочие расходы<br>(тыс. грн)</th>
	<th>Налоги на прибыль<br>(тыс. грн)</th>
   </tr>
      </thead>
   <tr>
		<td data-label="Период" >1-ый день</td>
		<td data-label="Выручка(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new1" name="new1" placeholder="X1" size="10" ></td>
		<td data-label="Расходы по обычной деятельности(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new2" name="new2" placeholder="X2" size="10" ></td>
		<td data-label="Процент к уплате(%)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new3" name="new3" placeholder="X3" size="10" ></td>
		<td data-label="Прочие доходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new4" name="new4" placeholder="X4" size="10" ></td>
		<td data-label="Прочие расходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new5" name="new5" placeholder="X5" size="10" ></td>
		<td data-label="Налоги на прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new6" name="new6" placeholder="X6" size="10" ></td>
	</tr>
	<tr>
		<td data-label="Период" >2-ой день</td>
		<td data-label="Выручка(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new11" name="new11"placeholder="X1" size="10" ></td>
		<td data-label="Расходы по обычной деятельности(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new12" name="new12" placeholder="X2" size="10"  ></td>
		<td data-label="Процент к уплате(%)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new13" name="new13" placeholder="X3" size="10"  ></td>
		<td data-label="Прочие доходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new14" name="new14" placeholder="X4" size="10"  ></td>
		<td data-label="Прочие расходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new15" name="new15" placeholder="X5" size="10"  ></td>
		<td data-label="Налоги на прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new16" name="new16" placeholder="X6" size="10"  ></td>
	</tr>
	<tr>
		<td data-label="Период" >3-ий день</td>
		<td data-label="Выручка(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new21" name="new21"placeholder="X1" size="10" ></td>
		<td data-label="Расходы по обычной деятельности(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new22" name="new22" placeholder="X2" size="10" ></td>
		<td data-label="Процент к уплате(%)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new23" name="new23" placeholder="X3" size="10" ></td>
		<td data-label="Прочие доходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new24" name="new24" placeholder="X4" size="10"  ></td>
		<td data-label="Прочие расходы(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new25" name="new25" placeholder="X5" size="10" ></td>
		<td data-label="Налоги на прибыль(тыс. грн)"><input type="text" onkeyup = 'this.value=parseInt(this.value) | 0' id="new26" name="new26" placeholder="X6" size="10"  ></td>
	</tr>
</table>
<div style=" font-family:Georgia ">Последние данные работы предприятия необходимы для прогноза на следующие периоды.</div>
		<br/>
		<input type="submit" name="nazvanie_knopki" id="check" value="Получить результаты"  class="knopka16" style="background-color: white; font-family:Georgia; font-size: 100%;">

		
		
<?php
		
		
if ( isset( $_SESSION['logged_user'] )  ) {

echo '<l style="color:green;">Вы авторизированы</l>';

}
else{
  echo '<l style="color:grey;">Для прогнозирования нужно авторизироваться</l> ';
}
		?>

<br/><br/>

</form>
	</div><!-- row -->
</div><!-- container -->

<!--///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\///\\\https://music.yandex.ua/album/3414298-->

<br><br>

</body>
  </html>


<?php
  include("class_base.php");
   echo('<script>$("#check").prop("disabled",true);</script>');
      if (isset($_SESSION['info']))
    {  // Если пусты, то мы не выводим ссылку

     echo('<script>$("#check").prop("disabled",false);</script>');
	 }
	 
	 
 
 // echo "LALALA";echo $ov1;
	$ov1 = $_GET['ov1'];     //попробовать сменить на $_POST
	$or1 = $_GET['or1'];
//echo ("I'm sdfsd".$ov1);
	$op1 = $_GET['op1'];     //попробовать сменить на $_POST
	$pd1 = $_GET['pd1'];
	$pr1 = $_GET['pr1'];     //попробовать сменить на $_POST
	$on1 = $_GET['on1'];
 	$ot1 = $_GET['ot1'];


 settype($ov1, "int");
 print '<script language="javascript">var ov1 = +("'.$ov1.'");</script>';
 settype($or1, "int");
 print '<script language="javascript">var or1 = +("'.$or1.'");</script>';
 settype($op1, "int");
 print '<script language="javascript">var op1 = +("'.$op1.'");</script>';
 settype($pd1, "int");
 print '<script language="javascript">var pd1 = +("'.$pd1.'");</script>';
 settype($pr1, "int");
 print '<script language="javascript">var pr1 = +("'.$pr1.'");</script>';
 settype($on1, "int");
 print '<script language="javascript">var on1 = +("'.$on1.'");</script>';
 settype($ot1, "int");
 print '<script language="javascript">var ot1 = +("'.$ot1.'");</script>';

    $ov2 = $_GET['ov2'];
 //echo $ov2;
    $or2 = $_GET['or2'];
 //echo $or2;
 	$op2 = $_GET['op2'];     //попробовать сменить на $_POST
	$pd2 = $_GET['pd2'];
	$pr2 = $_GET['pr2'];     //попробовать сменить на $_POST
	$on2 = $_GET['on2'];
    $ot2 = $_GET['ot2'];
 //echo $ot2;echo "<br/>";
 settype($ov2, "int");
 print '<script language="javascript">var ov2 = +("'.$ov2.'");</script>';
 settype($or2, "int");
 print '<script language="javascript">var or2 = +("'.$or2.'");</script>';
 settype($op2, "int");
 print '<script language="javascript">var op2 = +("'.$op2.'");</script>';
 settype($pd2, "int");
 print '<script language="javascript">var pd2 = +("'.$pd2.'");</script>';
 settype($pr2, "int");
 print '<script language="javascript">var pr2 = +("'.$pr2.'");</script>';
 settype($on2, "int");
 print '<script language="javascript">var on2 = +("'.$on2.'");</script>';
 settype($ot2, "int");
 print '<script language="javascript">var ot2 = +("'.$ot2.'");</script>';

    $ov3 = $_GET['ov3'];
 //echo $ov3;
    $or3 = $_GET['or3'];
 //echo $or3;
 	$op3 = $_GET['op3'];     //попробовать сменить на $_POST
	$pd3 = $_GET['pd3'];
	$pr3 = $_GET['pr3'];     //попробовать сменить на $_POST
	$on3 = $_GET['on3'];
    $ot3 = $_GET['ot3'];
 //echo $ot3;echo "<br/>";
 settype($ov3, "int");
 print '<script language="javascript">var ov3 = +("'.$ov3.'");</script>';
 settype($or3, "int");
 print '<script language="javascript">var or3 = +("'.$or3.'");</script>';
 settype($op3, "int");
 print '<script language="javascript">var op3 = +("'.$op3.'");</script>';
 settype($pd3, "int");
 print '<script language="javascript">var pd3 = +("'.$pd3.'");</script>';
 settype($pr3, "int");
 print '<script language="javascript">var pr3 = +("'.$pr3.'");</script>';
 settype($on3, "int");
 print '<script language="javascript">var on3 = +("'.$on3.'");</script>';
 settype($ot3, "int");
 print '<script language="javascript">var ot3 = +("'.$ot3.'");</script>';

    $ov4 = $_GET['ov4'];
// echo $ov4;
    $or4 = $_GET['or4'];
// echo $or4;
	$op4 = $_GET['op4'];     //попробовать сменить на $_POST
	$pd4 = $_GET['pd4'];
	$pr4 = $_GET['pr4'];     //попробовать сменить на $_POST
	$on4 = $_GET['on4'];
    $ot4 = $_GET['ot4'];
 //echo $ot4;echo "<br/>";
 settype($ov4, "int");
 print '<script language="javascript">var ov4 = +("'.$ov4.'");</script>';
 settype($or4, "int");
 print '<script language="javascript">var or4 = +("'.$or4.'");</script>';
 settype($op4, "int");
 print '<script language="javascript">var op4 = +("'.$op4.'");</script>';
 settype($pd4, "int");
 print '<script language="javascript">var pd4 = +("'.$pd4.'");</script>';
 settype($pr4, "int");
 print '<script language="javascript">var pr4 = +("'.$pr4.'");</script>';
 settype($on4, "int");
 print '<script language="javascript">var on4 = +("'.$on4.'");</script>';
 settype($ot4, "int");
 print '<script language="javascript">var ot4 = +("'.$ot4.'");</script>';

    $ov5 = $_GET['ov5'];
// echo $ov5;
    $or5 = $_GET['or5'];
 //echo $or5;
 	$op5 = $_GET['op5'];     //попробовать сменить на $_POST
	$pd5 = $_GET['pd5'];
	$pr5 = $_GET['pr5'];     //попробовать сменить на $_POST
	$on5 = $_GET['on5'];
    $ot5 = $_GET['ot5'];
 //echo $ot5;//echo "<br/>";
  settype($ov5, "int");
 print '<script language="javascript">var ov5 = +("'.$ov5.'");</script>';
 settype($or5, "int");
 print '<script language="javascript">var or5 = +("'.$or5.'");</script>';
 settype($op5, "int");
 print '<script language="javascript">var op5 = +("'.$op5.'");</script>';
 settype($pd5, "int");
 print '<script language="javascript">var pd5 = +("'.$pd5.'");</script>';
 settype($pr5, "int");
 print '<script language="javascript">var pr5 = +("'.$pr5.'");</script>';
 settype($on5, "int");
 print '<script language="javascript">var on5 = +("'.$on5.'");</script>';
  settype($ot5, "int");
 print '<script language="javascript">var ot5 = +("'.$ot5.'");</script>';

	$new1 = $_GET['new1']; //echo $new1;
    $new2 = $_GET['new2']; //echo $new2;
	$new3 = $_GET['new3'];
	$new4 = $_GET['new4'];
	$new5 = $_GET['new5'];
	$new6 = $_GET['new6'];

	$new11 = $_GET['new11']; //echo $new1;
    $new12 = $_GET['new12']; //echo $new2;
	$new13 = $_GET['new13'];
	$new14 = $_GET['new14'];
	$new15 = $_GET['new15'];
	$new16 = $_GET['new16'];

	$new21 = $_GET['new21']; //echo $new1;
    $new22 = $_GET['new22']; //echo $new2;
	$new23 = $_GET['new23'];
	$new24 = $_GET['new24'];
	$new25 = $_GET['new25'];
	$new26 = $_GET['new26'];
	

	    // $new12 = $_GET['new12']; //echo $new12;
    // $new22 = $_GET['new22']; //echo $new22;
	    // $new13 = $_GET['new13']; //echo $new13;
    // $new23 = $_GET['new23']; //echo $new23;


	  	//echo $ov1, $or1, $ot1;
	    //$query = mysql_query("UPDATE users1 SET ov1 = '".$ov1."', or1 = '".$or1."', ot1 = '".$ot1."', ov2 = '".$ov2."', or2 = '".$or2."', ot2 = '".$ot2."', ov3 = '".$ov3."', or3 = '".$or3."', ot3 = '".$ot3."', ov4 = '".$ov4."', or4 = '".$or4."', ot4 = '".$ot4."', ov5 = '".$ov5."', or5 = '".$or5."', ot5 = '".$ot5."' WHERE login='".$_SESSION["name"]."'"); ///,
	     //$user_data = mysql_fetch_array($query);
		/////////////echo("id=".id_user($_SESSION["info"]));
		//echo("Hello world!!!!");\

	//	if(isset($_GET['op5']){    http://fin.ho.ua/pr1.php?ov1=500&or1=335&op1=2&pd1=2&pr1=2&on1=4&ot1=234&ov2=480&or2=124&op2=2&pd2=3&pr2=4&on2=3&ot2=300&ov3=420&or3=98&op3=1&pd3=6&pr3=2&on3=10&ot3=290&ov4=501&or4=156&op4=2&pd4=9&pr4=3&on4=4&ot4=333&ov5=430&or5=134&op5=1&pd5=6&pr5=1&on5=2&ot5=197&new1=371&new2=197&new3=3&new4=2&new5=3&new6=3&new11=444&new12=234&new13=3&new14=2&new15=3&new16=4&new21=287&new22=176&new23=2&new24=2&new25=3&new26=2&nazvanie_knopki=%D0%9F%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D1%80%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B

		//}



    // echo "<br/>Сумма Х1: ";
   $sum_x1 = $ov1+$ov2+$ov3+$ov4+$ov5;
   // echo $sum_x1;

    // echo "<br/>Сумма Х2: ";
   $sum_x2 = $or1+$or2+$or3+$or4+$or5;
    //echo $sum_x2;

	    // echo "<br/>Сумма Х3: ";
   $sum_x3 = $op1+$op2+$op3+$op4+$op5;
    //echo $sum_x2;

		    // echo "<br/>Сумма Х4: ";
   $sum_x4 = $pd1+$pd2+$pd3+$pd4+$pd5;
    //echo $sum_x2;

		    // echo "<br/>Сумма Х5: ";
   $sum_x5 = $pr1+$pr2+$pr3+$pr4+$pr5;
    //echo $sum_x2;

		    // echo "<br/>Сумма Х6: ";
   $sum_x6 = $on1+$on2+$on3+$on4+$on5;
    //echo $sum_x2;

	 //echo "<br/>Сумма Y: ";
   $sum_y = $ot1+$ot2+$ot3+$ot4+$ot5;
   // echo $sum_y;


	//echo "<br/>Квадратная сумма Х1: ";
   $ksum_x1 = ($ov1*$ov1)+($ov2*$ov2)+($ov3*$ov3)+($ov4*$ov4)+($ov5*$ov5);
   // echo $ksum_x1;

	//echo "<br/>Квадратная сумма Х2: ";
   $ksum_x2 = ($or1*$or1)+($or2*$or2)+($or3*$or3)+($or4*$or4)+($or5*$or5);
   // echo $ksum_x2;

   	//echo "<br/>Квадратная сумма Х3: ";
   $ksum_x3 = ($op1*$op1)+($op2*$op2)+($op3*$op3)+($op4*$op4)+($op5*$op5);
   // echo $ksum_x2;

   	//echo "<br/>Квадратная сумма Х4: ";
   $ksum_x4 = ($pd1*$pd1)+($pd2*$pd2)+($pd3*$pd3)+($pd4*$pd4)+($pd5*$pd5);
   // echo $ksum_x2;

		//echo "<br/>Квадратная сумма Х2: ";
   $ksum_x5 = ($pr1*$pr1)+($pr2*$op2)+($op3*$op3)+($op4*$op4)+($op5*$op5);
   // echo $ksum_x2;

   	//echo "<br/>Квадратная сумма Х2: ";
   $ksum_x6 = ($on1*$on1)+($on2*$on2)+($on3*$o3)+($on4*$on4)+($on5*$on5);
   // echo $ksum_x2;

	//echo "<br/>Квадратная сумма Y: ";
   $ksum_y = ($ot1*$ot1)+($ot2*$ot2)+($ot3*$ot3)+($ot4*$ot4)+($ot5*$ot5);
    //echo $ksum_y;


	//echo "<br/>Cумма X1*Х2: ";
   $sum_x1x2 = ($ov1*$or1)+($ov2*$or2)+($ov3*$or3)+($ov4*$or4)+($ov5*$or5);
    //echo $sum_x1x2;

		//echo "<br/>Cумма X1*Х3: ";
   $sum_x1x3 = ($ov1*$op1)+($ov2*$op2)+($ov3*$op3)+($ov4*$op4)+($ov5*$op5);
    //echo $sum_x1x2;

		//echo "<br/>Cумма X1*Х4: ";
   $sum_x1x4 = ($ov1*$pd1)+($ov2*$pd2)+($ov3*$pd3)+($ov4*$pd4)+($ov5*$pd5);
    //echo $sum_x1x2;

		//echo "<br/>Cумма X1*Х5: ";
   $sum_x1x5 = ($ov1*$pr1)+($ov2*$pr2)+($ov3*$pr3)+($ov4*$pr4)+($ov5*$pr5);
    //echo $sum_x1x2;

		//echo "<br/>Cумма X1*Х6: ";
   $sum_x1x6 = ($ov1*$on1)+($ov2*$on2)+($ov3*$on3)+($ov4*$on4)+($ov5*$on5);
    //echo $sum_x1x2;

		//echo "<br/>Cумма X2*Х3: ";
   $sum_x2x3 = ($or1*$op1)+($or2*$op2)+($or3*$op3)+($or4*$op4)+($or5*$op5);
    //echo $sum_x1x2;

		//echo "<br/>Cумма X2*Х4: ";
   $sum_x2x4 = ($or1*$pd1)+($or2*$pd2)+($or3*$pd3)+($or4*$pd4)+($or5*$pd5);
    //echo $sum_x1x2;

			//echo "<br/>Cумма X2*Х5: ";
   $sum_x2x5 = ($or1*$pr1)+($or2*$pr2)+($or3*$pr3)+($or4*$pr4)+($or5*$pr5);
    //echo $sum_x1x2;

			//echo "<br/>Cумма X2*Х6: ";
   $sum_x2x6 = ($or1*$on1)+($or2*$on2)+($or3*$on3)+($or4*$on4)+($or5*$on5);
    //echo $sum_x1x2;

			//echo "<br/>Cумма X3*Х4: ";
   $sum_x3x4 = ($pd1*$op1)+($pd2*$op2)+($pd3*$op3)+($pd4*$op4)+($pd5*$op5);
    //echo $sum_x1x2;

			//echo "<br/>Cумма X3*Х5: ";
   $sum_x3x5 = ($pr1*$op1)+($pr2*$op2)+($pr3*$op3)+($pr4*$op4)+($pr5*$op5);
    //echo $sum_x1x2;

			//echo "<br/>Cумма X3*Х6: ";
   $sum_x3x6 = ($on1*$op1)+($on2*$op2)+($on3*$op3)+($on4*$op4)+($on5*$op5);
    //echo $sum_x1x2;

			//echo "<br/>Cумма X4*Х5: ";
   $sum_x4x5 = ($pd1*$pr1)+($pd2*$pr2)+($pd3*$pr3)+($pd4*$pr4)+($pd5*$pr5);
    //echo $sum_x1x2;

			//echo "<br/>Cумма X4*Х6: ";
   $sum_x4x6 = ($pd1*$pr1)+($pd2*$pr2)+($pd3*$pr3)+($pd4*$pr4)+($pd5*$pr5);
    //echo $sum_x1x2;

			//echo "<br/>Cумма X5*Х6: ";
   $sum_x5x6 = ($on1*$pr1)+($on2*$pr2)+($on3*$pr3)+($on4*$pr4)+($on5*$pr5);
    //echo $sum_x1x2;


	//echo "<br/>Cумма Y*Х1: ";
   $sum_x1y = ($ov1*$ot1)+($ov2*$ot2)+($ov3*$ot3)+($ov4*$ot4)+($ov5*$ot5);
   // echo $sum_x1y;

	//echo "<br/>Cумма Y*Х2: ";
   $sum_yx2 = ($ot1*$or1)+($ot2*$or2)+($ot3*$or3)+($ot4*$or4)+($ot5*$or5);
   // echo $sum_yx2;

	//echo "<br/>Cумма Y*Х3: ";
   $sum_yx3 = ($ot1*$op1)+($ot2*$op2)+($ot3*$op3)+($ot4*$op4)+($ot5*$op5);
   // echo $sum_yx2;

   	//echo "<br/>Cумма Y*Х4: ";
   $sum_yx4 = ($ot1*$pd1)+($ot2*$pd2)+($ot3*$pd3)+($ot4*$pd4)+($ot5*$pd5);
   // echo $sum_yx2;

   	//echo "<br/>Cумма Y*Х5: ";
   $sum_yx5 = ($ot1*$pr1)+($ot2*$pr2)+($ot3*$pr3)+($ot4*$pr4)+($ot5*$pr5);
   // echo $sum_yx2;

   	//echo "<br/>Cумма Y*Х6: ";
   $sum_yx6 = ($ot1*$on1)+($ot2*$on2)+($ot3*$on3)+($ot4*$on4)+($ot5*$on5);
   // echo $sum_yx2;


  // $qw=3702;
  //$qw = $_GET['ov1'];
 //echo $qw;

  //http://localhost/GAYS1.php?ov1=1050&or1=1.4&ot1=1449&ov2=1000&or2=1.3&ot2=1200&ov3=950&or3=1.2&ot3=951&ov4=900&or4=1.1&ot4=800&ov5=850&or5=1&ot5=700
    // $matrix[0] = array(10, 20, 30);
  // $matrix[1] = array(45, 50, 67);
  // $matrix[2] = array(77, 84, 98);

  // $b[0] = 6;
  // $b[1] = 2;
  // $b[2] = 5;
  $kolvo=5;
  $matrix[0] = array($sum_x1, $sum_x2, $sum_x3, $sum_x4, $sum_x5, $sum_x6, $kolvo);
  $matrix[1] = array($ksum_x1, $sum_x1x2, $sum_x1x3, $sum_x1x4, $sum_x1x5, $sum_x1x6, $sum_x1);
  $matrix[2] = array($sum_x1x2, $ksum_x2, $sum_x2x3, $sum_x2x4, $sum_x2x5, $sum_x2x6, $sum_x2);
  $matrix[3] = array($sum_x1x3, $sum_x2x3, $ksum_x3, $sum_x3x4, $sum_x3x5, $sum_x3x6, $sum_x3);
  $matrix[4] = array($sum_x1x4, $sum_x2x4, $sum_x3x4, $ksum_x4, $sum_x4x5, $sum_x4x6, $sum_x4);
  $matrix[5] = array($sum_x1x5, $sum_x2x5, $sum_x3x5, $sum_x4x5, $ksum_x4, $sum_x5x6, $sum_x5);
  $matrix[6] = array($sum_x1x6, $sum_x2x6, $sum_x3x6, $sum_x4x6, $sum_x5x6, $ksum_x6, $sum_x6);

  $b[0] = $sum_y;
  $b[1] = $sum_x1y;
  $b[2] = $sum_yx2;
  $b[3] = $sum_yx3;
  $b[4] = $sum_yx4;
  $b[5] = $sum_yx5;
  $b[6] = $sum_yx6;

  // $matrix[0] = array(10, 20, 30, 10, 20, 30);
  // $matrix[1] = array(45, 50, 67, 35, 50, 45);
  // $matrix[2] = array(77, 84, 98, 20, 30, 10);
  // $matrix[3] = array(10, 20, 30, 10, 30, 30);
  // $matrix[4] = array(45, 50, 45, 50, 67, 67);
  // $matrix[5] = array(77, 84, 98, 45, 50, 68);

  // $b[0] = 5;
  // $b[1] = 2;
  // $b[2] = 5;
  // $b[3] = 4;
  // $b[4] = 3;
  // $b[5] = 7;


  // –ешаем уравнение
  list(list($x, $y, $x1, $y1, $x2, $y2, $z)) = gaussj($matrix, $b);

  //echo "Решение<br />";
  //echo "X = $x<br />";
  //echo "Y = $y<br />";
 // echo "Z = $z<br />";


  // –ешение системы линейных уравнений
  // методом ћетод vаусса-?ордана
  function gaussj($a, $b)
  {
    $n = count($a);
    for($j = 0; $j < $n; $j++)
    {
      $ipiv[$j] = 0;
    }
    for($i = 0; $i < $n; $i++)
    {
      $big = 0;
      for($j = 0; $j < $n; $j++)
      {
        if($ipiv[$j] != 1)
        {
          for($k = 0; $k < $n; $k++)
          {
            if($ipiv[$k] == 0)
            {
              if(abs($a[$j][$k]) >= $big)
              {
                $big = abs($a[$j][$k]);
                $irow = $j;
                $icol = $k;
              }
            }
            else if($ipiv[$k] > 1)
            {
              return "Матрица сингулярна";
            }
          }
        }
      }
      $ipiv[$icol] = $ipiv[$icol] + 1;
      if ($irow != $icol)
      {
        for($l = 0; $l < $n; $l++)
        {
          $dum = $a[$irow][$l];
          $a[$irow][$l] = $a[$icol][$l];
          $a[$icol][$l] = $dum;
        }
        $dum = $b[$irow];
        $b[$irow] = $b[$icol];
        $b[$icol] = $dum;
      }
      $indxr[$i] = $irow;
      $indxc[$i] = $icol;
      if($a[$icol][$icol] == 0) return "Матрица сингулярна";
      $pivinv = 1 / $a[$icol][$icol];
      $a[$icol][$icol] = 1;
      for($l = 0; $l < $n; $l++) $a[$icol][$l] = $a[$icol][$l] * $pivinv;
      $b[$icol] = $b[$icol] * $pivinv;
      for($ll = 0; $ll < $n; $ll++)
      {
        if($ll != $icol)
        {
          $dum = $a[$ll][$icol];
          $a[$ll][$icol] = 0;
          for($l = 0; $l < $n; $l++)
          {
            $a[$ll][$l] = $a[$ll][$l] - $a[$icol][$l] * $dum;
          }
          $b[$ll] = $b[$ll] - $b[$icol] * $dum;
        }
      }
    }
    for($l = $n -1; $l >= 0; $l--)
    {
      if($indxr[$l] != $indxc[$l])
      {
        for($k = 1; $k < $n; $k++)
        {
          $dum = $a[$k][$indxr[$l]];
          $a[$k][$indxr[$l]] = $a[$k][$indxc[$l]];
          $a[$k][$indxc[$l]] = $dum;
        }
      }
    }
    //$b - решение уравнени¤
   // $a - обратна¤ матрица
    return array($b, $a);

  }

    $ygr=($x*$new1)+($y*$new2)+($x1*$new3)+($y1*$new4)+($x2*$new5)+($y2*$new6)+$z;
	$ygr2=($x*$new11)+($y*$new12)+($x1*$new13)+($y1*$new14)+($x2*$new15)+($y2*$new16)+$z;
	$ygr3=($x*$new21)+($y*$new22)+($x1*$new23)+($y1*$new24)+($x2*$new25)+($y2*$new26)+$z;
     //$ygr=($x*$new1)+($y*$new2)+$z;
	 
	 		if($ov1 or $or1 or $op1 or $pd1 or $pr1 or $on1 or $ot1 or $ov2 or $or2 or $op2 or $pd2 or $pr2 or $on2 or $ot2 or $ov3 or $or3 or $op3 or $pd3 or $pr3 or $on3 or $ot3 or  $ov4 or $or4  or $op4 or $pd4 or $pr4 or $on4 or $ot4 or $ov5 or $or5 or $op5 or $pd5 or $pr5 or $on5 or $ot5 or $new1 or $new2 or $new3 or $new4 or $new5 or $new6 or   $new11 or $new12 or $new13 or $new14 or $new15 or $new16 or  $new21 or $new22 or $new23 or $new24 or $new25 or $new26 !=0){
		 $base = new Base();
		 $base->insert_znach($base->id_user($_SESSION["info"]),$ov1, $or1, $op1, $pd1, $pr1, $on1, $ot1,     $ov2, $or2, $op2, $pd2, $pr2, $on2, $ot2,    $ov3, $or3, $op3, $pd3, $pr3, $on3, $ot3,    $ov4, $or4, $op4, $pd4, $pr4, $on4, $ot4,    $ov5, $or5, $op5, $pd5, $pr5, $on5, $ot5,  $new1,$new2,$new3,$new4,$new5,$new6,   $new11,$new12,$new13,$new14,$new15,$new16,  $new21,$new22,$new23,$new24,$new25,$new26, $ygr, $ygr2, $ygr3);
		}
		
	 ?>

	 <?php
	 echo '<br/> <div class="col-lg-6" style=" font-family:Georgia "> В процессе прогнозирования с помощью научных методов, чистая прибыль на следующие периоды составляет: <br/>';
  		 echo "<br/><B>  На 1-ый день: </B>";
	 echo $ygr;echo "(тыс. грн)<br/>";
	   		 echo "<br/><B>  На 2-ой день: </B>";
	 echo $ygr2;echo "(тыс. грн)<br/>";
	   		 echo "<br/><B>  На 3-ий день: </B>";
	 echo $ygr3;echo "(тыс. грн)<br/>	 <br/></div >";
echo'<div class="col-lg-6" style=" font-family:Georgia ">
<p>Данный метод основывается на итоге выводов, эмпирических данных и обоснованных предположений, представляет аргументированное заключение о направлениях развития в будущем.
</p>
</div>';
	 ?>
 <br><br><br>
<!-- -->

 <?php
 

echo "<br/>";


 

?>



                               <!--//////////////////////////////////////////////////////////// Пример линейчатой диаграммы-->

<div class="container" id="about" name="about">
<div class="row white">
<div class="col-lg-6">

	<script src="https://www.google.com/jsapi"></script>
	<script>

   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(drawChart);
   function drawChart() {
    var data = google.visualization.arrayToDataTable([


     ['Период', 'Выручка(тыс. грн)', 'Расходы по обычной деятельности(тыс. грн)','Процент к уплате(%)','Прочие доходы(тыс. грн)','Прочие расходы(тыс. грн)','Налоги на прибыль(тыс. грн)','Чистая прибыль'],
     ['1-ый день', ov1,  or1,  op1,  pd1, pr1, on1, ot1],
     ['2-ой день', ov2,  or2,  op2,  pd2, pr2, on2, ot2],
     ['3-ий день', ov3,  or3,  op3,  pd3, pr3, on3, ot3],
	 ['4-ый день', ov4,  or4,  op4,  pd4, pr4, on4, ot4],
	 ['5-ый день', ov5,  or5,  op5,  pd5, pr5, on5, ot5]
    ]);
    var options = {
     title: 'Гистограмма полученных данных',
     hAxis: {title: 'Период'},
     vAxis: {title: 'Количественная характеристика'}
    };
    var chart = new google.visualization.ColumnChart(document.getElementById('oil'));
    chart.draw(data, options);
   }


  </script>


  	<script>

   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(drawChart);
   function drawChart() {
    var data = google.visualization.arrayToDataTable([


     ['Период', 'Выручка(тыс. грн)', 'Расходы по обычной деятельности(тыс. грн)','Процент к уплате(%)','Прочие доходы(тыс. грн)','Прочие расходы(тыс. грн)','Налоги на прибыль(тыс. грн)','Чистая прибыль'],
     ['1-ый день', ov1,  or1,  op1,  pd1, pr1, on1, ot1],
     ['2-ой день', ov2,  or2,  op2,  pd2, pr2, on2, ot2],
     ['3-ий день', ov3,  or3,  op3,  pd3, pr3, on3, ot3]
	 ]);
    var options = {
     title: 'Гистограмма спрогнозированных данных',
     hAxis: {title: 'Период'},
     vAxis: {title: 'Количественная характеристика'}
    };
    var chart = new google.visualization.ColumnChart(document.getElementById('oil2'));
    chart.draw(data, options);
   }


  </script>
								</div>


                            </div>

               </div><div id="oil" style="height: 500px; width: 90%; "></div>
			   </br>

      </div><div id="oil2" style="height: 500px; width: 90%; "></div>




<div id="footerwrap">
		<div class="container">
<div id="qoo-counter">
<a title="Счетчик посещений на сайт">
<img src="http://qooi.ru/counter/standard/009.png" alt="Счетчик посещаемости и статистика сайта">
<div id="qoo-counter-visits"></div>
<div id="qoo-counter-views"></div>
</a>

<span style="color:white; font-size: 12px;"><b>«<span id="time">00:00:00</span>»</b> </span>
</div>
<script type="text/javascript" src="http://qoo.by/counter.js"></script>

				<h4>Created by <abbr style="color:#3498db">Kairos Company</abbr> - Copyright 2017</h4>

				
<script type="text/javascript">  
	setInterval(function () {  
	date = new Date(),  
	h = date.getHours(),  
	m = date.getMinutes(),  
	s = date.getSeconds(),  
	h = (h < 10) ? '0' + h : h,  
	m = (m < 10) ? '0' + m : m,  
	s = (s < 10) ? '0' + s : s,  
	document.getElementById('time').innerHTML = h + ':' + m + ':' + s;  
	}, 1000);  
</script>
				
	</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>

  </body>
</html>