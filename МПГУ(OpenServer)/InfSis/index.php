<?php
    $db = mysqli_connect('localhost', 'admin', '1','university');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="assets/css/style.css">
    <title>Мой сайт</title>
</head>
<body>
<header class = "header">
    <div class="container">
        <div class="header_inner">
            <div class="header_Logo">МПГУ</div>
            <nav class="nav"> 
                <a class ="nav_link" href="/">О нас</a>
                <a class="nav_link" href="http://infsis/subjects">Предметы</a>
                <a class="nav_link" href="http://infsis/teachers">Преподаватели</a>
                <a class="nav_link" href="http://infsis/students">Студенты</a>
                <a class="nav_link" href="http://infsis/groups">Группа</a>
                <a class="nav_link" href="http://infsis/sessions">Сессия</a>
            </nav>
        </div>
    </div>
</header>


<div class="intro"> 
    <div class="container">
        <div class="intro_inner">
            <h2 class=intro_Suptitle>Анапский филиал</h2>
            <h1 class="intro_title">Добро пожаловть в МПГУ</h1>

            <a class="btn" href="#">Узнать больше</a>
        </div>
    </div>

     <div class="slider">
        <div class="container">
            <div class="slider_inner">
            <div class="slider_item active">
                <span class="slider_number">01</span> 
                    О нас  
                </div>
                <div class="slider_item">
                <span class="slider_number">02</span> 
                    Деятельность 
                </div>
                <div class="slider_item">
                <span class="slider_number">03</span> 
                    Факультеты
                    </div>
                <div class="slider_item">
                <span class="slider_number">04</span>
                    Контакты 
                </div>
            </div>  
         </div>
     </div>
</div>

<section class="section">
    <div class="container">

        <div class="section_header">
            <h3 class="section_suptitle">Чем мы занимаемся</h3>
            <h2 class="section_title">История о нас</h2>
            <div class="section_text">
                <p>
                Москоовский педагогический государственный университет — высшее учебное заведение в Москве, включающее 11 институтов, 4 факультета и 5 филиалов. Год основания 1872г.
                </p>
            </div>
        </div>

        <div class="about">
            <div class="about_item">
                <div class="about_img">
                    <img src="assets/images/мпгу.jpeg" alt="">
                </div>
                <div class="about_text">11 институтов</div>
            </div>
            <div class="about_item">
            <div class="about_img">
                    <img src="assets/images/photo5.jpg" alt="">
                </div>
                <div class="about_text">4 факультета</div>
            </div>
            <div class="about_item">
            <div class="about_img">
                    <img src="assets/images/photo3.jpg" alt="">
                </div>
                <div class="about_text">5 филиалов</div>
            </div>
        </div>

    </div>
</section>


<div class = "contacts">
    <div class="container">

        <div class="stat">
            <div class="stat_item">
                <div class="stat_count">7</div>
                <div class="stat_text">Часов затрачено на разработку этого сайта →</div>
            </div>
            <div class="stat_item">
                <div class="stat_count">3,5</div>
                <div class="stat_text">Часа верстки →</div></div>
            <div class="stat_item">
            <div class="stat_count">2,5</div>
                <div class="stat_text">Часа выбор картинок и цвета →</div>
            </div>
            <div class="stat_item">
            <div class="stat_count">1</div>
                <div class="stat_text">Час Создания БД и любования этим сайтом</div>
            </div>
            <div class="stat_item">
            <div class="stat_count">1</div>
                <div class="stat_text">Разработчик: Самирханова Э.Р.</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>