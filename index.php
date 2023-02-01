<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php 
include "pages/header.php";
?>
<section class="body_back">
    <!-- Картинка слева -->
    <div class="body_back_image">
        <div class="content_in_image">
            <h3>Привет ! <i class="fas fa-allergies"></i> 
            Этот сайт был создан для того , чтобы делиться своими мыслями на тему игр , программирования , музыки и подобного . 
            У нас есть сервер Minecraft , и есть сервер MTA . Если у тебя есть идеи , что можно добавить на сервера - расскажи <i class="far fa-comment"></i> (ссылка на подать пост) .
            Если ты еще заходил на наш сервер - не теряй времени , мы будем рады <i class="far fa-smile-wink"></i>  (ссылка на сервера). 
        </h3>
        </div>
    </div>
    <!-- Посты -->
    <div class="contain">
        <div class="body_content">
            <p class="text_p text"> <i class="fas fa-headset"> user</i></p>
            <h4 class="text_h4 text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque dolor ut nisi corrupti excepturi ullam fugiat sit tempora molestias minus.</h4>
            <h5 class="text_h5 text">17.08.2021</h5>
        </div>
        <div class="body_content body_content_m">
            <p class="text_p text"> <i class="fas fa-headset"> user</i></p>
            <h4 class="text_h4 text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem mollitia ea voluptas odit minima sapiente ipsa perspiciatis praesentium laudantium dolorum.</h4>
            <h5 class="text_h5 text">17.08.2021</h5>
        </div>
    </div>
    <div class="contain second_content">
        <div class="body_content">
            <p class="text_p text"> <i class="fas fa-headset"> user</i></p>
            <h4 class="text_h4 text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque dolor ut nisi corrupti excepturi ullam fugiat sit tempora molestias minus.</h4>
            <h5 class="text_h5 text">17.08.2021</h5>
        </div>
        <div class="body_content body_content_m">
            <p class="text_p text"> <i class="fas fa-headset"> user</i></p>
            <h4 class="text_h4 text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem mollitia ea voluptas odit minima sapiente ipsa perspiciatis praesentium laudantium dolorum.</h4>
            <h5 class="text_h5 text">17.08.2021</h5>
        </div>
    </div>
</section>

<!-- Добавил БД , вывод постов начинай-->
<section class="body_back_two">
    <div class="new">
        <h1>Что нового ?</h1>
        <div class="wn_flex">
            <div class="whats_new">
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit. 
                    Obcaecati similique at quod eum!
                    Distinctio nesciunt ipsum, nisi 
                    corporis aliquam possimus.</p>
                <a href="">
                    <img src="img/w_new/main-bg.jpg" alt="#">
                </a>
                <h5>Sokolov Andrey</h5>
            </div>
            <div class="whats_new">
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit. 
                    Obcaecati similique at quod eum!
                    Distinctio nesciunt ipsum, nisi 
                    corporis aliquam possimus.</p>
                <a href="">
                    <img src="img/w_new/main-bg.jpg" alt="#">
                </a>
                <h5>Sokolov Andrey</h5>
            </div>
            <div class="whats_new">
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit. 
                    Obcaecati similique at quod eum!
                    Distinctio nesciunt ipsum, nisi 
                    corporis aliquam possimus.</p>
                <a href="">
                    <img src="img/w_new/main-bg.jpg" alt="#">
                </a>
                <h5>Sokolov Andrey</h5>
            </div>
        </div>
    </div>
    
</section>
<section class="body_back">
    <div class="vid_aud">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/s-CqHHcVUb0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="audio">
        <audio controls src="music/[37andUp] Rompasso - Body Talk (Extended Mix) [Low bass by NID].mp3"></audio>
        <audio controls src="music/[37andUp] Rompasso - Body Talk (Extended Mix) [Low bass by NID].mp3"></audio>
    
        <audio controls src="music/[37andUp] Rompasso - Body Talk (Extended Mix) [Low bass by NID].mp3"></audio>
    
        <audio controls src="music/[37andUp] Rompasso - Body Talk (Extended Mix) [Low bass by NID].mp3"></audio>
    
        <audio controls src="music/[37andUp] Rompasso - Body Talk (Extended Mix) [Low bass by NID].mp3"></audio>
    </div>
    </div>
</section>
<!-- Experiments -->
<section>
<!-- inline -->
    <!-- Вывести в alert -->
    <!-- <button onclick="alert('clicked!')">js insert</button> -->
<!-- internal -->
    <script>
        // alert('Massage')
    </script>
     
<!-- External -->
    <!-- <script src="script.js"></script> -->
</section>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="path-to-the-file/splide.min.js"></script>
</body>
</html>