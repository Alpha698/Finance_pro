<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
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
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
	
	<style>
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
	

	
p { 
	font-family: Georgia;
	font-size: 25px;
}

form {
  font-family: Georgia;
  font-size: 25px;
  border: 1px solid #D4DADB;
  padding: 0 5px;
  border-radius: 5px;
  background-color: white;
}

fieldset {
  padding: 0;
  margin: 0;
  margin: 15px 0;
  border: none;
}

label {
  width: 220px;
  font-size: 18px;
  display: inline-block;
}

form input {
  border: 1px solid #C1C1C1;
  padding: 3px 5px;
  margin: 7px;
  font-weight: bolder;
  width: 160px;
}

form input:valid + span {
  content: url(http://htmlbook.ru/example/images/ok.png);
}

form input:invalid + span {
  content: url(http://www.clker.com/cliparts/4/3/1/f/1195436930767206781not_ok_mark_h_kon_l_vdal_01.svg);
  height: 5px;
  vertical-align: middle;
}




	</style>
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  
    <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><!-- //////////////////кпопка для выпадающего меню-->
            <span class="icon icon-menu" style="font-size:30px; color:#3498db;"></span><!-- //////////////////vector-->
          </button>
        <!--  <a href="#home"><img src="\assets\img\logostext.png" style=" margin: -0.1% -1% -0.1% -1%; width: 12%"/></a>-->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html" class="smoothScroll">Главная</a></li>
			<li> <a href="index.html" class="smoothScroll">О нас</a></li>
			<!--<li> <a href="#services" class="smoothScroll"> Services</a></li>-->
			<li> <a href="main.html" class="smoothScroll">Прогноз</a></li>
			<!--<li> <a href="#portfolio" class="smoothScroll"> Portfolio</a></li>-->
			<!--<li> <a href="#blog" class="smoothScroll"> Blog</a></li> style="margin: 0% -175% 0% 1%;" -->
			<li> <a href="index.html" class="smoothScroll">Контакты</a></li>
			<li> <a href="about.php" class="smoothScroll">Личный кабинет</a></li>
			<li> <a href="login.php" >Войти</a></li>
			<li> <a href="signup.php"  style="">Регистрация</a></li>
			
		
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
  
 

			<div class="container">
			<div class="row">	
			</br>		</br> </br>
			<p style="font-family: Georgia;font-size: 24px;text-align: center;">Страница регистрации</p><hr>
			
<div class="col-lg-6 callout">

<form action="/signup.php" id='send' method='POST'>
  <fieldset>
    <label>Ваш логин: </label>
    <input size="18" type='text' name='login' placeholder='Логин' value="<?php echo @$data['login'];?>" required><span></span>
    <br>
    <label>Ваше предприятия: </label>
    <input size="18" type='text' name='name' placeholder='Имя' value="<?php echo @$data['name'];?>" required><span></span>
    <br>
  </fieldset>
  <fieldset>
    <label>Ваша эл. почта: </label>
    <input size="18" type='email' name='email' placeholder='Эл. почта' value="<?php echo @$data['email'];?>" required><span></span>
    <br>
    <label>Ваш пароль: </label>
    <input size="18" type='password' name='password' placeholder='Пароль' value="<?php echo @$data['password'];?>" required><span></span>
    <br>
    <label>Повторите пароль:</label>
    <input size="18" type='password' name='password_2' placeholder='Пароль' value="<?php echo @$data['password_2'];?>" required><span></span>

  </fieldset>
 <!-- <fieldset>
    <label>Введите значение с картинки:</label><br>
	
    <img style="  width: 160px;" src="https://c22blog.files.wordpress.com/2010/10/input-black.gif"> 
    <input size="18" type='text' name='capcha' placeholder='Число' required>
  </fieldset> 
  -->
  &nbsp <div class="g-recaptcha" data-sitekey="6LcyUiEUAAAAAC7Aqm0-EpUzQ4Kd0RRHZS-u0T8j"></div>

  <button type="sumbit" name="do_signup" class="knopka16" style="background-color: white; font-family:Georgia; font-size: 80%;" form='send'><b>Зарегистрироваться</b></button>
</form>

 
</div>




</br>		</br>	
<div class="col-lg-6 callout">

 <?php 
 //секретный ключ 6LcyUiEUAAAAABVgBbfMPeRpW9NIU5U4gP24TP8V
 //g-recaptcha-response
 //https://www.google.com/recaptcha/admin#site/337728050?setup
require "class_base.php";
//require_once "recaptchalib.php";


$data = $_POST;
if(isset($data['do_signup']))
{

  $errors = array();
if ( trim ($data['login']) == '')
{
  $errors[] = '<div style="color: red;  padding: 0 3%;">Invalid login!</div>';  
}

if ( trim ($data['name']) == '')
{
  $errors[] = '<div style="color: red;  padding: 0 3%;">Invalid name!</div>';  
}

if ( trim ($data['email']) == '')
{
  $errors[] = '<div style="color: red;  padding: 0 3%;">Invalid Email!</div>';  
}

if  ($data['password'] == '' )
{
  $errors[] = '<div style="color: red;  padding: 0 3%;">Invalid pass!</div>';  
}

if( $data['password_2'] != $data['password'])
{
  $errors[] = '<div style="color: red;  padding: 0 3%;">Invalid pass2!</div>';  
}
if (R::count('users1', "login = ?", array($data['login']))>0)
{
  $errors[] = '<div style="color: red;  padding: 0 3%;">Login already exist</div>';

}
if (R::count('users1', "email = ?", array($data['email']))>0)
{
  $errors[] = '<div style="color: red;  padding: 0 3%;">email already exist</div>';

}

if (empty($errors) )
{
$user = R::dispense('users1');
$user->login = $data['login'];
$user->username = $data['name'];
$user->email = $data['email'];
$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
R::store($user);
echo '<div style="color: green; padding: 0 3%;">Вы успешно зарегистрированы.<br>Можете перейти на <a href="login.php"><u>страницу авторизации</u></a> .</div>';
} else
{ echo '<div style="color: red; padding: 0 3%;">'.array_shift($errors).'</div>';
}

}
	?>
	</div>
	
</div>
</div></div>
</div>

</br>
<hr>	
</br></br>
</br>

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