<!DOCTYPE html>
<html lang="en">
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
  font-size: 18px;
}

form {
  font-family: Georgia;
  font-size: 25px;
  border: 1px solid #D4DADB;
  padding: 0 5px;
  border-radius: 5px;
  background-color: white;
}


							
							
	</style>
	
  </head>
  <?php 
session_start();
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
  
    ?>
    <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
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

		<div class="container" id="about" name="about">
			<div class="row white">

</br>		</br>
<p style="font-size: 24px;text-align: center;font-family: Georgia">Страница авторизации</p>
			  <hr>
			<div class="col-lg-6 callout">
			<p style=" font-family:Georgia " >  Введите ваши регистрационные данные для входа в ваш личный кабинет.</p>


<form action= "/login.php" method="POST">
  <p> &nbsp <strong>Логин</strong>:</p>
  &nbsp <input type="text" placeholder='Логин' name="login" size="18" value="<?php echo @$data['login'];?>">


  <p> &nbsp <strong>Пароль</strong>:</p>
  &nbsp <input type="password" placeholder='Пароль' name="password" size="18" value="<?php echo @$data['password'];?>">
 

<div class="container" style=" font-family:Georgia; margin: 0% 0% 0% -20%;  " align="left">
		<div class="row" >	
								
					<p align="left">
					<button type="sumbit" name="do_login" class="knopka16" style="background-color: white; font-family:Georgia; font-size: 100%;"><b>Вход</b></button>
					</p>


				
			<br>
		</div><!-- /container -->
</div>	


</form>
			</div>
			
</br>	</br>		</br>		</br>		

	<div class="col-lg-6 callout">
<?php 
require "class_base.php";

$data = $_POST;
if(isset($data['do_login']))
{
	$errors =array();
	$user = R::findOne('users1','login=?',array($data['login']));
	if($user)
	{
		if(password_verify($data['password'], $user->password))
		{
 $_SESSION['logged_user'] = $user;
 $_SESSION['info'] = $user->login;
 	 
 echo '<div style="color: green;">Вы вошли под именем ' ;echo $_SESSION['logged_user']->login;
 echo '. Можете перейти на <a href="/">Главную</a> страницу.</div>'; 
 		}

		else {
  $errors[] = 'Invalid pass!';  

		}
	}
else
{
	$errors[] = 'user not found';
}

if ( ! empty($errors) )
   {
      echo '<div style="color: red;"><br>'.array_shift($errors).'</div>';
   }
}


?>
</div>

			</div><!-- row -->
		</div><!-- container -->

<br>
		
<hr>	
</br></br></br>

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
