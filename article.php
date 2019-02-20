<!DOCTYPE html>
<html>
<head>
<?php 
    require_once "function/function.php";
    // в сылке передаем значение кот-е хотим найти ["id"] 
    $news= getNews (1, $_GET["id"]);
    $title =$news["title"];
    require_once "blocks/head.php";
?>

</head>
<body >

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brad"> 
            <img src="img/logo.png">
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto justify-content-around">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Контакты</a>
                </li>    
            </ul>
        </div>
    </div>
    </div>
</nav>


<div class="container-fluid text-container">
<div class="container">
     
    
        <div class="row photo-row">
            
 <?php
 //вывод массива
            echo '<div class="col-lg-12"><h1>'.$news["title"].'</h1>
                <p>'.$news["full_text"].'</p> 
            </div>';
?>

        </div>
 </div>
</div>

    <?php require_once "blocks/footer.php"?>
<script src="js/main.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>