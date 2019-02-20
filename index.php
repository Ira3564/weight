<!DOCTYPE html>
<html>
<head>
<?php 
	require_once "function/function.php";
	$title ="ЯХудею";
	require_once "blocks/head.php";
	$news= getNews (3);
?>

</head>
<body >

	<?php require_once "blocks/header.php"?>

<div class="container-fluid main-container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/fon.jpg" class="d-block w-100"  alt="Первый слайд">
    </div>
    <div class="carousel-item">
      <img  src="img/font.jpg" class="d-block w-100" alt="Второй слайд">
    </div>
    </div>
</div>
</div>
<div class="container-fluid text-container" >
<div class="container">
	 <div class="row">
	 	<div class="col-12 " id="information">
            <h1>Путь к идеальному телу</h1>
        </div>
	 </div>
	
        <div class="row photo-row">

 <?php
		for ($i=0; $i<count($news); $i++){
			if($i==0)
				echo"<div class=\"col-lg-12\">";
			else
				echo " <div class=\"col-lg-6\">";
			echo '<img class="img-fluid" src="img/'.$news[$i]["id"].'.jpg" alt="Упражнения '.$news[$i]["id"].'" title="Комплекс упражнений '.$news[$i]["id"].'">
                <h2>'.$news[$i]["title"].'</h2>
                <p>'.$news[$i]["intro_text"].'</p>
                    <a  href="article.php?id='.$news[$i]["id"].'">
                    	<button class="main-button">Подробнее</button>
                    </a>  
            </div>';
		}


	?>
        </div>
 </div>
</div>

  <a href="#" class="back-to-top"></a>


	<?php require_once "blocks/footer.php"?>

</body>
</html>