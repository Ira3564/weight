<?php
	//создание  mysqli
	$mysqli=false;
	//создаем 2 ф-и

	// первая ф-я - подключение к БД
	function connectDB () {
		// $mysqli глобальная переменная
		 global $mysqli;
		 $mysqli = new mysqli ("localhost", "root", "", "weightbase");
		 //установка кодировки
		 $mysqli->query ("SET NAMES 'utf-8'");
	}

	// вторая ф-я - отключение от БД
	function closeDB () {
		global $mysqli;
		$mysqli->close ();

	}
	//берет наши статьи из БД
	//$id принимаем переменнную из article.php
	function getNews($limit, $id){
		global $mysqli;
		connectDB ();
		if ($id)
			$where ="WHERE  `id` =".$id;
		//ORDER BY `id` DESC" сортировкка статей по убыванию
		$result = $mysqli->query ("SELECT * FROM `news` $where ORDER BY `id` DESC LIMIT $limit");
		 closeDB ();
		 //если у нас нет $id, значит выводит все статьи
		 if (!$id)
		 //передача ф-и 
		 	return resultToArray ($result);
		 else
		 	// делаем одномерный массив из одной статьи
		 	return $result->fetch_assoc();
	}

	function resultToArray ($result){
		$array= array();
		//перебираем ассоциативный массив fetch_assoc() и записываем в новую переменную $array[]
		// пока в масссиве $result есть данные, то мы будем записывать в переменную $array
		while (($row=$result->fetch_assoc()) !=false )
			$array[]=$row;
		//возвращаем
		return $array;
	}
?>