<?php
	session_start();
	header("Content-Type:text/html;charset=UTF-8");

	require_once("config.php");
	require_once("classes/ACore.php");

	if(isset($_GET['option'])) {                         
		$class = trim(strip_tags($_GET['option'])); // если параметры были переданы - читаем их
	}
	else {
		$class = 'main';    // иначе в качестве параметра указываем класс, отображающий класс по умолчанию  
	}

	if (file_exists("classes/".$class.".php")) {     //если файл существует, 
		///
		include("classes/".$class.".php");   //то подключаем его
		if(class_exists($class)) {  // проверяем существует ли указанный класс
		
			$obj = new $class; // если да - создаем объект данного класса
			$obj->get_body();
		}
		else {
			exit("<p style = 'color: red'>Неправильные  данные для входа</p>"); 
		}
	}
	else {
		exit("<p style = 'color: red'>Wrong Adress адрес</p>"); 
	}
?>