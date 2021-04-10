<?php 

function show_page($title,$text,$imglink, $session)
{
    ?>
<!-- разрыв кода -->
<!doctype html>

<head>
    <meta charset="UTF-8">
    <title>Лаба 1</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
</head>

<body>
<header  class="header" id="header">
                <div class="logo">
                    <a href="index.html" class="logo-name">
                        <img src="<?= $imglink?>" class="logo-name-img">
                        <span class="logo-name-text">1С:8.3 Предприятие</span>
                    </a>
                </div>
                <nav class="menu">
                    <a href="#" class="menu-item">Главная</a>
                    <a href="#" class="menu-item">Услуги</a>
                    <a href="#" class="menu-item">Контакты</a>
                </nav>
                <div class="header_burger">
                    <span></span>
                </div>
            </header>
    <div id="content">
        <h1><?= $title?></h1>
        <p><img class = "textImg"src="<?= $imglink?>" alt="картинка"><?= $text?></p>

        <p>Платформа «1С:Предприятие 8.3» — это основа, без которой невозможно использовать ни одно прикладное решение линейки <a href="https://www.1ab.ru/blog/detail/1s-chto-eto-za-programma-korotko-o-glavnom/">«1С»</a>. Фактически это фундамент для установки одной или нескольких конфигураций. Этот принцип является общим для всех версий «1С»: как для самой актуальной — программа «1С» 8.3, так и для предыдущих — система «1С:Предприятие 8.2», 8.0, 7.7 и др.</p>
        <p>На основе платформы программисты «1С» пишут программы (конфигурации) для пользователей. Платформа «1С» очень функциональна, она включает в себя широкий список самых разных возможностей.</p>
        <p>В свою очередь конфигурация — это весь функционал, который обеспечивает работоспособность платформы. Таким образом, первый элемент не может существовать отдельно от второго. Любой программист может доработать прикладное решение под индивидуальные задачи компании, но платформа при этом останется неизменной.</p>
        <table>
            <tr>
                <th>Колонка 1</th>
                <th>Колонка 2</th>
                <th>Колонка 3</th>
            </tr>
            <tr>
                <td>Данные колонки 1</td>
                <td>Данные колонки 2</td>
                <td>Данные колонки 3</td>
            </tr>
            <tr>
                <td>Данные колонки 1</td>
                <td>Данные колонки 2</td>
                <td>Данные колонки 3</td>
            </tr>
            <tr>
                <td>Данные колонки 1</td>
                <td>Данные колонки 2</td>
                <td>Данные колонки 3</td>
            </tr>
        </table>
        <ul>
            <li>Microsoft</li>
            <li>Google</li>
            <li>Apple</li>
            <li>IBM</li>
        </ul>
        <ol>
            <li>Microsoft</li>
            <li>Google</li>
            <li>Apple</li>
            <li>IBM</li>
        </ol>
        <div>
            <img class="image" src="res/Home.jpg" alt="картинка">
            <img class="image" src="res/Home.jpg" alt="картинка">
        </div>
		<div class="slider">
			<img class="image" src="res/sleder1.jpg" alt="картинка">
            <img class="image" src="res/slider2.jpg" alt="картинка">
			<img class="image" src="res/slider3.png" alt="картинка">
            <img class="image" src="res/slider4.png" alt="картинка">
		</div>
    </div>
    <footer>
		Посетителей онлайн: <?= $session;?>
        Copyright 2017
    </footer>
	<script type="text/javascript" src="scripts.js"></script>
</body>

</html>
<?php
    }
    ?>
