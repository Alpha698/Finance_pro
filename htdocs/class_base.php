<?php 

require "assets/rb.php";
R::setup( 'mysql:host=db2.ho.ua;dbname=fin',
        'fin', 'pro123_fes' );

		session_start();
		
	// public $dlink;
	// public $ERROR;//Ошибки в БД
	
	
	
	 // public function __construct()
	// {	
		// $host='db2.ho.ua';
		// $user='fin';
		// $pas='pro123_fes';
		// $this->dlink=mysql_connect($host,$user,$pas);
		// if(!$this->dlink)
			// die(mysql_error()); else 
		// mysql_select_db('fin');
	// }
	//
	  //$connect = mysql_connect("db2.ho.ua","fin","pro123_fes") or die(mysql_error());
  //mysql_select_db("fin",$connect);
 
class Base{
	function id_user($login){

$userId= R::findOne('users1', 'login = ?', [$login]);		//find - возможно решит проблему с вторым добавлением

		 	 return $userId->id;
				
	}
	
	function insert_znach($id, $ov1, $or1, $op1, $pd1, $pr1, $on1, $ot1,     $ov2, $or2, $op2, $pd2, $pr2, $on2, $ot2,    $ov3, $or3, $op3, $pd3, $pr3, $on3, $ot3,    $ov4, $or4, $op4, $pd4, $pr4, $on4, $ot4,    $ov5, $or5, $op5, $pd5, $pr5, $on5, $ot5,  $new1,$new2,$new3,$new4,$new5,$new6,   $new11,$new12,$new13,$new14,$new15,$new16,  $new21,$new22,$new23,$new24,$new25,$new26, $ygr, $ygr2, $ygr3)
	{

	$user = R::dispense('test');
		
		$user->id_user = $id;
		
		
		$user->ov1 = $ov1;
		$user->or1 = $or1;
		$user->op1 = $op1;
		$user->pd1 = $pd1;
		$user->pr1 = $pr1;
		$user->on1 = $on1;
		$user->ot1 = $ot1;
	    
		$user->ov2 = $ov2;
		$user->or2 = $or2;
		$user->op2 = $op2;
		$user->pd2 = $pd2;
		$user->pr2 = $pr2;
		$user->on2 = $on2;
		$user->ot2 = $ot2;
		
		$user->ov3 = $ov3;
		$user->or3 = $or3;
		$user->op3 = $op3;
		$user->pd3 = $pd3;
		$user->pr3 = $pr3;
		$user->on3 = $on3;
		$user->ot3 = $ot3;
		
		$user->ov4 = $ov4;
		$user->or4 = $or4;
		$user->op4 = $op4;
		$user->pd4 = $pd4;
		$user->pr4 = $pr4;
		$user->on4 = $on4;
		$user->ot4 = $ot4;
		
		$user->ov5 = $ov5;
		$user->or5 = $or5;
		$user->op5 = $op5;
		$user->pd5 = $pd5;
		$user->pr5 = $pr5;
		$user->on5 = $on5;
		$user->ot5 = $ot5;
		
		$user->new1 = $new1;
		$user->new2 = $new2;
		$user->new3 = $new3;
		$user->new4 = $new4;
		$user->new5 = $new5;
		$user->new6 = $new6;
		
		$user->new11 = $new11;
		$user->new12 = $new12;
		$user->new13 = $new13;
		$user->new14 = $new14;
		$user->new15 = $new15;
		$user->new16 = $new16;
		
		$user->new21 = $new21;
		$user->new22 = $new22;
		$user->new23 = $new23;
		$user->new24 = $new24;
		$user->new25 = $new25;
		$user->new26 = $new26;

		$user->ygr = $ygr;
		$user->ygr2 = $ygr2;
		$user->ygr3 = $ygr3;
		
		 R::store($user);
		
}

	
}
 //$query = mysql_query("Select * from users1 where ov1 = '".$ov1."', ot1 = '".$ot1."', ov2 = '".$ov2."', ot2 = '".$ot2."', ov3 = '".$ov3."', ot3 = '".$ot3."', ov4 = '".$ov4."', ot4 = '".$ot4."', ov5 = '".$ov5."', ot5 = '".$ot5."' ");
 //$user_data = mysql_fetch_array($query);

?>

