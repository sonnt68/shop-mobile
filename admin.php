<?php 
	session_start();
	include "config.php";
	include "model/model.php";
	$session = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
	if(!$session)
		include("controller/frontend/controller_login.php");
	else{
		checkAdmin($session);
	}
	function checkAdmin ($session) {
		$model=new model();
		$role = $model->get_a_record("select role from User where username='$session' ");
		if($role->role == "admin"){
			$controller=isset($_GET["controller"])?$_GET["controller"]:"";
			$controller="controller/backend/controller_$controller.php";
			include("view/backend/home.php");
			return;
		}
		echo "Bạn không có quyền vào đây!";
	}
 ?>