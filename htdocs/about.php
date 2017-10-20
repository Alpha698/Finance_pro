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
    
	
	<style>
	a.button13 {
  display: inline-block;
  width: 16em;
  font-size: 80%;
  color: rgba(255,255,255,.9);
  text-shadow: #2e7ebd 0 1px 2px;
  text-decoration: none;
  text-align: center;
  line-height: 1.3;
  white-space: pre-line;
  padding: .6em 0;
  border: 1px solid;
  border-color: #60a3d8 #2970a9 #2970a9 #60a3d8;
  border-radius: 6px;
  outline: none;
  background: #60a3d8 linear-gradient(#89bbe2, #60a3d8 50%, #378bce);
  box-shadow: inset rgba(255,255,255,.5) 1px 1px;
  vertical-align:super;
 
}
a.button13:first-line{
  font-size: 170%;
  font-weight: 700;
}
a.button13:hover {
  color: rgb(255,255,255);
  background-image: linear-gradient(#9dc7e7, #74afdd 50%, #378bce);
}
a.button13:active {
  color: rgb(255,255,255);
  border-color: #2970a9;
  background-image: linear-gradient(#5796c8, #6aa2ce);
  box-shadow: none;
}
	

	</style>
	
	<style>

table {
  border-collapse: collapse;
  width: 100%;
}
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
</style>
	
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

  
</br>

		<?php
		  include("class_base.php");
		
if ( isset( $_SESSION['logged_user'] )  ) {

echo '

		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
			<div class="row">
				<div class="col-lg-4 callout">
					<span class="icon icon-user"></span>		
				<!-- col-lg-4 --></br>
			<p align="left">	
					Логин:<l style="color:green;">';
				echo $_SESSION["logged_user"]->login;
				echo'</br>
					</l>Название предприятия:<l style="color:green;">';
				echo $_SESSION["logged_user"]->username;
				echo'</br>
					</l>Email:<l style="color:green;">';
				echo $_SESSION["logged_user"]->email;
				echo'</br>
				    </l>Дата и время регистрации:</br>
			</p>
				</div>
					
				<div class="col-lg-4 callout">
						<span class="icon icon-download"></span>
					<h2 style=" font-family:Georgia ">Скачать файл</h2>
					<p>Скачать файл с вашимы данными и статистикой предприятия</p>
				</div><!-- col-lg-4 -->	
				
				<div class="col-lg-4 callout">
					<a href="logout.php"><span class="icon icon-exit"></span></a>
					<a href="logout.php"><h2 style=" font-family:Georgia ">Выйти</h2></a>
					<a href="logout.php"><p>Выйти со своей учетной записи </p></a>
				</div><!-- col-lg-4 -->	
			</div><!-- row -->
		</div><!-- greywrap -->
		
		<div class="col-lg-7 callout">
					<p>Ваши ранее введенные данные для прогнозирования:</p></br></br></br>
				</div><!-- col-lg-4 -->	
		';
		
	$base1 =new Base();

	$trans = R::findAll('test','id_user=?',[$base1->id_user($_SESSION['info'])]); //id_user_id??? не возможность бекапа -_-
   $estates = array() ; 
	echo'     <div class="navbar-collapse collapse">

	
	<table border="1" align="center" style="border-collapse: collapse; width: 100%;">	
	     <thead>
   <tr align="center"><th> </th>
    <th align="center">Выручка<br>(тыс. грн)</th>
    <th align="center">Расходы по обычной деятельности<br>(тыс. грн)</th>		
    <th align="center">Процент к уплате<br>(%)</th>
    <th align="center">Прочие доходы<br>(тыс. грн)</th>
	<th align="center">Прочие расходы<br>(тыс. грн)</th>
	<th align="center">Налоги на прибыль<br>(тыс. грн)</th>
	<th align="center">Чистая прибыль или убыток<br>(тыс. грн)</th>
   </tr>
      </thead>
	  <tr><td>1 День: </td> ';
    foreach ($trans as $tr)
    {
        array_push($estates, $tr->ov1 ) ;
   		
    }
	
	for($i=0;$i<=count($estates);$i++){
		echo("</td><td>".array_pop($estates));
	}
	
	    $estates_or1 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_or1, $tr->or1) ;
   		
    }
	
	for($i=0;$i<=count($estates_or1);$i++){
		echo(" </td><td> ".array_pop($estates_or1));
	}
	
	 $estates_op1 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_op1, $tr->op1) ;
   		
    }
	
	for($i=0;$i<=count($estates_op1);$i++){
		echo(" </td><td> ".array_pop($estates_op1));
	}
	
	 $estates_pd1 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_pd1, $tr->pd1) ;
 		
    }
	
	for($i=0;$i<=count($estates_pd1);$i++){
		echo(" </td><td> ".array_pop($estates_pd1));
	}

	 $estates_pr1 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_pr1, $tr->pr1) ;
 		
    }
	
	for($i=0;$i<=count($estates_pr1);$i++){
		echo("  </td><td>".array_pop($estates_pr1));
	}	
	
	 $estates_on1 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_on1, $tr->on1) ;
   		
    }
	
	for($i=0;$i<=count($estates_on1);$i++){
		echo("  </td><td>".array_pop($estates_on1));
	}
	
	
	 $estates_ot1 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ot1, $tr->ot1) ;
   		
    }
	
	for($i=0;$i<=count($estates_ot1);$i++){
		echo(" </td><td>".array_pop($estates_ot1));
	}
		echo "</td></tr>";
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	echo"<tr><td>2 День: </td> ";
	
	    $estates_ov2 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ov2, $tr->ov2 ) ;
  		
    }
	
	for($i=0;$i<=count($estates_ov2);$i++){
		//print_r($estates);
		echo("  </td><td>  ".array_pop($estates_ov2));
	}
	
	    $estates_or2 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_or2, $tr->or2) ;
   		
    }
	
	for($i=0;$i<=count($estates_or2);$i++){
		//print_r($estates);
		echo("  </td><td>  ".array_pop($estates_or2));
	}
	
	 $estates_op2 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_op2, $tr->op2) ;
   		
    }
	
	for($i=0;$i<=count($estates_op2);$i++){
		//print_r($estates);
		echo("  </td><td>  ".array_pop($estates_op2));
	}
	
	 $estates_pd2 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_pd2, $tr->pd2) ;
 		
    }
	
	for($i=0;$i<=count($estates_pd2);$i++){
		//print_r($estates);
		echo("  </td><td>  ".array_pop($estates_pd2));
	}

	 $estates_pr2 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_pr2, $tr->pr2) ;
 		
    }
	
	for($i=0;$i<=count($estates_pr2);$i++){
		//print_r($estates);
		echo("  </td><td>  ".array_pop($estates_pr2));
	}	
	
	 $estates_on2 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_on2, $tr->on2) ;
   		
    }
	
	for($i=0;$i<=count($estates_on2);$i++){
		//print_r($estates);
		echo("  </td><td>  ".array_pop($estates_on2));
	}
	
	
	 $estates_ot2 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ot2, $tr->ot2) ;
   		
    }
	
	for($i=0;$i<=count($estates_ot2);$i++){
		//print_r($estates);
		echo("   </td><td> ".array_pop($estates_ot2));
	}
	
			echo "</td></tr>";
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	echo"<tr><td>3 День: </td> ";
	
	    $estates_ov3 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ov3, $tr->ov3 ) ;
   		
    }
	
	for($i=0;$i<=count($estates_ov3);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_ov3));
	}
	
	    $estates_or3 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_or3, $tr->or3) ;
   		
    }
	
	for($i=0;$i<=count($estates_or3);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_or3));
	}
	
	 $estates_op3 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_op3, $tr->op3) ;
   		
    }
	
	for($i=0;$i<=count($estates_op3);$i++){
		//print_r($estates);
		echo("  </td><td> ".array_pop($estates_op3));
	}
	
	 $estates_pd3 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_pd3, $tr->pd3) ;
 		
    }
	
	for($i=0;$i<=count($estates_pd3);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_pd3));
	}

	 $estates_pr3 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_pr3, $tr->pr3) ;
 		
    }
	
	for($i=0;$i<=count($estates_pr3);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_pr3));
	}	
	
	 $estates_on3 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_on3, $tr->on3) ;
   		
    }
	
	for($i=0;$i<=count($estates_on3);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_on3));
	}
	
	
	 $estates_ot3 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ot3, $tr->ot3) ;
   		
    }
	
	for($i=0;$i<=count($estates_ot3);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_ot3));
	}
	
			echo "</td></tr>";
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	echo"<tr><td>4 День: </td> ";
	
	    $estates_ov4 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ov4, $tr->ov4 ) ;
   		
    }
	
	for($i=0;$i<=count($estates_ov4);$i++){
		//print_r($estates);
		echo("  </td><td> ".array_pop($estates_ov4));
	}
	
	    $estates_or4 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_or4, $tr->or4) ;
   		
    }
	
	for($i=0;$i<=count($estates_or4);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_or4));
	}
	
	 $estates_op4 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_op4, $tr->op4) ;
   		
    }
	
	for($i=0;$i<=count($estates_op4);$i++){
		//print_r($estates);
		echo("  </td><td> ".array_pop($estates_op4));
	}
	
	 $estates_pd4 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_pd4, $tr->pd4) ;
 		
    }
	
	for($i=0;$i<=count($estates_pd4);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_pd4));
	}

	 $estates_pr4 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_pr4, $tr->pr4) ;
 		
    }
	
	for($i=0;$i<=count($estates_pr4);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_pr4));
	}	
	
	 $estates_on4 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_on4, $tr->on4) ;
   		
    }
	
	for($i=0;$i<=count($estates_on4);$i++){
		//print_r($estates);
		echo("  </td><td> ".array_pop($estates_on4));
	}
	
	
	 $estates_ot4 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ot4, $tr->ot4) ;
   		
    }
	
	for($i=0;$i<=count($estates_ot4);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_ot4));
	}
	
	
			echo "</td></tr>";
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	echo"<tr><td>5 День: </td> ";
	
	    $estates_ov5 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ov5, $tr->ov5 ) ;
   		
    }
	
	for($i=0;$i<=count($estates_ov5);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_ov5));
	}
	
	    $estates_or5 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_or5, $tr->or5) ;
   		
    }
	
	for($i=0;$i<=count($estates_or5);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_or5));
	}
	
	 $estates_op5 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_op5, $tr->op5) ;
   		
    }
	
	for($i=0;$i<=count($estates_op5);$i++){
		//print_r($estates);
		echo("  </td><td> ".array_pop($estates_op5));
	}
	
	 $estates_pd5 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_pd5, $tr->pd5) ;
 		
    }
	
	for($i=0;$i<=count($estates_pd5);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_pd5));
	}

	 $estates_pr5 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_pr5, $tr->pr5) ;
 		
    }
	
	for($i=0;$i<=count($estates_pr5);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_pr5));
	}	
	
	 $estates_on5 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_on5, $tr->on5) ;
   		
    }
	
	for($i=0;$i<=count($estates_on5);$i++){
		//print_r($estates);
		echo("  </td><td> ".array_pop($estates_on5));
	}
	
	 $estates_ot5 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ot5, $tr->ot5) ;
   		
    }
	
	for($i=0;$i<=count($estates_ot5);$i++){
		//print_r($estates);
		echo(" </td><td>  ".array_pop($estates_ot5));
	}
	
				echo "</td></tr></table></div><br>";
	echo"Таблица с будущей статистикой предприятия";
	
	$estates_new1 = array() ; 
	echo '     <div class="navbar-collapse collapse">

	<table border="1" align="center" style="border-collapse: collapse; width: 100%;">	
	     <thead>
   <tr align="center"><th> </th>
    <th align="center">Выручка<br>(тыс. грн)</th>
    <th align="center">Расходы по обычной деятельности<br>(тыс. грн)</th>		
    <th align="center">Процент к уплате<br>(%)</th>
    <th align="center">Прочие доходы<br>(тыс. грн)</th>
	<th align="center">Прочие расходы<br>(тыс. грн)</th>
	<th align="center">Налоги на прибыль<br>(тыс. грн)</th>
	<th align="center">Чистая прибыль<br>(тыс. грн)</th>
   </tr>
      </thead>
	  <tr><td>1 День: </td> ';
    foreach ($trans as $tr)
    {
        array_push($estates_new1, $tr->new1 ) ;
   		
    }
	
	for($i=0;$i<=count($estates_new1);$i++){
		echo("</td><td>".array_pop($estates_new1));
	}
	
	    $estates_new2 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new2, $tr->new2) ;
   		
    }
	
	for($i=0;$i<=count($estates_new2);$i++){
		echo(" </td><td> ".array_pop($estates_new2));
	}
	
	 $estates_new3 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new3, $tr->new3) ;
   		
    }
	
	for($i=0;$i<=count($estates_new3);$i++){
		echo(" </td><td> ".array_pop($estates_new3));
	}
	
	 $estates_new4 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new4, $tr->new4) ;
 		
    }
	
	for($i=0;$i<=count($estates_new4);$i++){
		echo(" </td><td> ".array_pop($estates_new4));
	}

	 $estates_new5 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new5, $tr->new5) ;
 		
    }
	
	for($i=0;$i<=count($estates_new5);$i++){
		echo("  </td><td>".array_pop($estates_new5));
	}	
	
		 $estates_new6 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new6, $tr->new6) ;
 		
    }
	
	for($i=0;$i<=count($estates_new6);$i++){
		echo("  </td><td>".array_pop($estates_new6));
	}
	
				 $estates_ygr = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ygr, $tr->ygr) ;
 		
    }
	
	for($i=0;$i<=count($estates_ygr);$i++){
		echo("  </td><td>".array_pop($estates_ygr));
	}
	

		echo"<tr><td>2 День: </td> ";
		$estates_new11 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new11, $tr->new11 ) ;
   		
    }
	
	for($i=0;$i<=count($estates_new11);$i++){
		echo("</td><td>".array_pop($estates_new11));
	}
	
	    $estates_new12 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new12, $tr->new12) ;
   		
    }
	
	for($i=0;$i<=count($estates_new12);$i++){
		echo(" </td><td> ".array_pop($estates_new12));
	}
	
	 $estates_new13 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new13, $tr->new13) ;
   		
    }
	
	for($i=0;$i<=count($estates_new13);$i++){
		echo(" </td><td> ".array_pop($estates_new13));
	}
	
	 $estates_new14 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new14, $tr->new14) ;
 		
    }
	
	for($i=0;$i<=count($estates_new14);$i++){
		echo(" </td><td> ".array_pop($estates_new14));
	}

	 $estates_new15 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new15, $tr->new15) ;
 		
    }
	
	for($i=0;$i<=count($estates_new15);$i++){
		echo("  </td><td>".array_pop($estates_new15));
	}	
	
		 $estates_new16 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new16, $tr->new16) ;
 		
    }
	
	for($i=0;$i<=count($estates_new16);$i++){
		echo("  </td><td>".array_pop($estates_new16));
	}
	
			 $estates_ygr2 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ygr2, $tr->ygr2) ;
 		
    }
	
	for($i=0;$i<=count($estates_ygr2);$i++){
		echo("  </td><td>".array_pop($estates_ygr2));
	}
	
	
	
		echo"<tr><td>3 День: </td> ";
		$estates_new21 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new21, $tr->new21 ) ;
   		
    }
	
	for($i=0;$i<=count($estates_new21);$i++){
		echo("</td><td>".array_pop($estates_new21));
	}
	
	    $estates_new22 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new22, $tr->new22) ;
   		
    }
	
	for($i=0;$i<=count($estates_new22);$i++){
		echo(" </td><td> ".array_pop($estates_new22));
	}
	
	 $estates_new23 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new23, $tr->new23) ;
   		
    }
	
	for($i=0;$i<=count($estates_new23);$i++){
		echo(" </td><td> ".array_pop($estates_new23));
	}
	
	 $estates_new24 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new24, $tr->new24) ;
 		
    }
	
	for($i=0;$i<=count($estates_new24);$i++){
		echo(" </td><td> ".array_pop($estates_new24));
	}

	 $estates_new25 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new25, $tr->new25) ;
 		
    }
	
	for($i=0;$i<=count($estates_new25);$i++){
		echo("  </td><td>".array_pop($estates_new25));
	}	
	
		 $estates_new26 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_new26, $tr->new26) ;
 		
    }
	
	for($i=0;$i<=count($estates_new26);$i++){
		echo("  </td><td>".array_pop($estates_new26));
	}
	
			 $estates_ygr3 = array() ; 
    foreach ($trans as $tr)
    {
        array_push($estates_ygr3, $tr->ygr3) ;
 		
    }
	
	for($i=0;$i<=count($estates_ygr3);$i++){
		echo("  </td><td>".array_pop($estates_ygr3));
	}
	
						echo "</td></tr></table></div>";//	echo "</td></tr>";
	
	
	
	echo'
	
		<!-- ==== ABOUT ==== -->
		<div class="container" id="about" name="about">
			<div class="row white">
			
				<div class="col-lg-6">
							<p>В сети появляется все больше программных продуктов, которые работают в режиме онлайн или десктоп и которые позволяют пользователям моделировать деятельность различных отраслей и масштабов. Разработка системы прогнозирования финансового состояния предприятий на примере WEB приложения – это создание методов и объединение их в единый программный продукт, для бизнес - планирования и оценки инвестиционных проектов. 
				<!--	--></div><!-- col-lg-6 -->
				
				<div class="col-lg-6">
							<p>Такие программы также позволяют предугадать и подобрать стратегию развития от небольших венчурных компаний до холдинговых структур. Актуальность разрабатываемого приложения состоит в том, что планирование является объективной необходимостью, так как используется в целях обеспечения более высокого уровня роста и развития финансовой структуры предприятия или производства.
				<!--	--></div><!-- col-lg-6 -->
					<br>
			</div><!-- row -->
		</div><!-- container -->
		

		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 centered">

					</div>
					
				</div><!-- row -->
			</div>
			<br>
			<br>
		</div><!-- greywrap -->
		
		<!-- ==== SECTION DIVIDER3 -->

		

			<div class="container">
			<div class="row">	
			
				
			</div><!-- /row -->
			<br>
			<br>
		</div><!-- /container -->


		
		<div class="container" id="contact" name="contact">
			<div class="row">
			<br>
				
				<h1 class="centered" style=" font-family:Georgia "></h1>
				<hr>
				<br>
				<br>
				<div class="col-lg-4">
					<h3></h3>
					<p>
					</p>
				</div><!-- col -->
				
				<div class="col-lg-4">

				</div><!-- col -->
				
				<div class="col-lg-4">
				</div><!-- col -->

			</div><!-- row -->
		
		</div><!-- container -->
		
';

}
else{
  echo '

		<div class="container" id="about" name="about">
			<div class="row white">
			
				<h1 class="centered" >Для просмотра данной страницы необходимо пройти авторизацию.</h1>
				<hr>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
			</div><!-- row -->
		</div><!-- container -->
  ';
}
		?>
		
		


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