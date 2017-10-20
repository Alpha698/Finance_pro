<?php
  include("class_base.php");
   echo('<script>$("#check").prop("disabled",true);</script>');
      if (isset($_SESSION['info']))
    {  // Если пусты, то мы не выводим ссылку

     echo('<script>$("#check").prop("disabled",false);</script>');
	 }
 

	$ov1 = $_GET['ov1'];     //попробовать сменить на $_POST
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

	//	if(isset($_GET['op5']){
		 $base = new Base();
		 $base->insert_znach($base->id_user($_SESSION["info"]),$ov1, $or1, $op1, $pd1, $pr1, $on1, $ot1,     $ov2, $or2, $op2, $pd2, $pr2, $on2, $ot2,    $ov3, $or3, $op3, $pd3, $pr3, $on3, $ot3,    $ov4, $or4, $op4, $pd4, $pr4, $on4, $ot4,    $ov5, $or5, $op5, $pd5, $pr5, $on5, $ot5);

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
	 ?>
	 <div class="centered1">
	 <?php
	 echo "<br/><B>  Чистая прибыль или убыток на следующие периоды составляет: </B><br/>";
  		 echo "<br/><B>  На 1-ый период: </B>";
	 echo $ygr;echo "(тыс. грн)<br/>";
	   		 echo "<br/><B>  На 2-ой период: </B>";
	 echo $ygr2;echo "(тыс. грн)<br/>";
	   		 echo "<br/><B>  На 3-ий период: </B>";
	 echo $ygr3;echo "(тыс. грн)<br/>";

	 ?>
	 </div >
	 <?php
	     // $ygr=($x*$new12)+($y*$new22)+$z;
  		// echo "<br/><B>Второй период: </B>";
	// echo $ygr;echo "<br/>";
	     // $ygr=($x*$new13)+($y*$new23)+$z;
  		// echo "<br/><B>Третий период: </B>";
	// echo $ygr;echo "<br/>";

	// echo "<br/>//////////////////////////////////////////////////////////////////////////////////////<br/>";
	// $srsum_x1=$sum_x1/$kolvo;				echo $srsum_x1;			echo "<br/>";
	// $srsum_x2=$sum_x2/$kolvo;				echo $srsum_x2;			echo "<br/>";
	// $srsum_y=$sum_y/$kolvo;					echo $srsum_y;			echo "<br/>";
	// $srksum_x1=$ksum_x1/$kolvo;			echo $srksum_x1;		echo "<br/>";
	// $srksum_x2=$ksum_x2/$kolvo;			echo $srksum_x2;		echo "<br/>";
	// $srksum_y=$ksum_y/$kolvo;				echo $srksum_y;			echo "<br/>";
	// $srsum_x1x2=$sum_x1x2/$kolvo;		echo $srsum_x1x2;		echo "<br/>";
	// $srsum_x1y=$sum_x1y/$kolvo;			echo $srsum_x1y;		echo "<br/>";
	// $srsum_yx2=$sum_yx2/$kolvo;			echo $srsum_yx2;		echo "<br/>";
	// echo "<br/>//////////////////////////////////////////////////////////////////////////////////////<br/>";
	// $cc=(($srksum_x2-($srsum_x2*$srsum_x2))*($srksum_y-($srsum_y*$srsum_y)));
	// $r_x1y=($srsum_x1y-($srsum_x1*$srsum_y))/sqrt(($srksum_x1-($srsum_x1*$srsum_x1))*($srksum_y-($srsum_y*$srsum_y)));
// echo $r_x1y;echo "<br/>";
	// $r_x2y=($srsum_x2y-($srsum_x2*$srsum_y))/sqrt (($srksum_x2-($srsum_x2*$srsum_x2))*($srksum_y-($srsum_y*$srsum_y)));
// echo $r_x2y;echo "<br/>";
	// $r_x1x2=($srsum_x1x2-($srsum_x1*$srsum_x2))/sqrt(($srksum_x2-($srsum_x2*$srsum_x2))*($srksum_x1-($srsum_x1*$srsum_x1)));
// echo $r_x1x2;echo "<br/>";
	// $r_xy=1-((1+(2*$r_x1x2*$r_x1y*$r_x2y)-($r_x1x2*$r_x1x2)-($r_x1y*$r_x1y)-($r_x2y*$r_x2y))/(1-($r_x1x2*$r_x1x2)));
// echo $r_xy;echo "<br/>";
echo "<br/>";


if ( isset( $_SESSION['logged_user'] )  ) {

echo '<div style="color: green;">Вы вошли под именем ' ;echo $_SESSION['logged_user']->login;
echo $_SESSION['info'];

}
else{
  echo 'Для прогнозирования нужно авторизироваться ';
}
?>
