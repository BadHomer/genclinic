<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/css/header.css'])

</head>
<body>
<header>
    <a href="" class=""><img class="header-logo" src="assets/plus.svg"> </a>
    <nav class="header-navbar">
        <a class="header-navbar-item" href="">Новости</a>
        <a class="header-navbar-item" href="">Специалисты</a>
        <a class="header-navbar-item" href="">Вакансии</a>
        <a class="header-navbar-item" href="">Контакты</a>
    </nav>
    <button class="header-search">
        <img class="header-logo" src="assets/Search.svg">
    </button>
</header>

<section class="hero">
    <h1 class="hero-title-1">Городская клиническая</h1>
    <h1 class="hero-title-2">Больница</h1>
    <img class="hero-img" src="assets/main-hero.jpg">
    <div class="hero-hot-line">
        <p class="hero-hot-line-text">Горячая линия</p>
        <a href="tel:">+7 (977) 407-10-45</a>
        <button class="primary-btn btn-recording">
            Записаться на прием
        </button>
    </div>
</section>
<section class="news">
    <h2>Новости</h2>
    <div class="news-cards-container">
        <div class="news-card">
            <img src="assets/news-temp.jpg">
            <div class="news-card-title-date">
                <h3>Заголовок</h3>
                <p class="news-card-date">25.08.2024</p>
            </div>
            <p>
                Идейные соображения высшего порядка, а также укрепление и развитие структуры требуют определения и
                уточнения систем массового участия.
            </p>
        </div>
        <div class="news-card">
            <img src="assets/news-temp.jpg">
            <div class="news-card-title-date">
                <h3>Заголовок</h3>
                <p class="news-card-date">25.08.2024</p>
            </div>
            <p>
                Идейные соображения высшего порядка, а также укрепление и развитие структуры требуют определения и
                уточнения систем массового участия.
            </p>
        </div>
        <div class="news-card">
            <img src="assets/news-temp.jpg">
            <div class="news-card-title-date">
                <h3>Заголовок</h3>
                <p class="news-card-date">25.08.2024</p>
            </div>
            <p>
                Идейные соображения высшего порядка, а также укрепление и развитие структуры требуют определения и
                уточнения систем массового участия.
            </p>

        </div>

    </div>
    <a href="" class="primary-btn more-btn">Посмотреть все</a>
</section>

<section class="about">
    <div class="about-main">
        <p class="about-hint">О медицинском центре</p>
        <h2>Клиническая больница им. святого Луки</h2>

        <p class="about-col-3-4">Задача организации, в особенности же рамки и место обучения кадров позволяет выполнять
            важные задания по разработке новых предложений. </p>
        <p class="about-col-2-3">Повседневная практика показывает, что консультация с широким активом представляет собой
            интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач.</p>
        <p class="about-col-2-2">Значимость этих проблем настолько очевидна, что начало повседневной работы по
            формированию позиции позволяет
            оценить значение позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и богатый
            опыт реализация намеченных</p>
        <p class="about-col-3-3">плановых заданий позволяет выполнять важные задания по разработке дальнейших
            направлений развития. Повседневная практика показывает, что сложившаяся структура организации способствует
            подготовки и реализации систем массового участия. </p>
        <div class="about-img-c">
            <img src="assets/about-img-1.jpg">
            <img src="assets/about-img-2.jpg">
            <img class="about-main-big-img" src="assets/about-img-3.jpg">
        </div>
    </div>
</section>

<section class="specs">
    <h2>Специалисты</h2>
    <div class="specs-container">
        <div class="specs-card">
            <h3>ФИО</h3>
            <p class="specs-specialization">Специализация</p>
            <img src="assets/news-temp.jpg">

        </div>
        <div class="specs-card">
            <h3>ФИО</h3>
            <p class="specs-specialization">Специализация</p>
            <img src="assets/news-temp.jpg">
        </div>
        <div class="specs-card">
            <h3>ФИО</h3>
            <p class="specs-specialization">Специализация</p>
            <img src="assets/news-temp.jpg">
        </div>
        <div class="specs-card">
            <h3>ФИО</h3>
            <p class="specs-specialization">Специализация</p>
            <img src="assets/news-temp.jpg">
        </div>

    </div>
    <a href="" class="primary-btn more-btn">Посмотреть все</a>
</section>

<footer>
    <div class="footer-container">
        <div class="footer-navbar">
            <div class="footer-navbar-item">
                <a href="">Новости</a>
                <a href="">Специалисты</a>
            </div>
            <div class="footer-navbar-item">
                <p>Горячая линия</p>
                <a class="navbar-tel" href="">+7 (977) 407-10-45</a>
            </div>
            <div class="footer-navbar-item">
                <a href="">Вакансии</a>
                <a href="">Контакты</a>
            </div>
        </div>
        <a class="primary-btn btn-recording footer-btn-recording">Записаться на прием</a>
    </div>
    <a href="">Политика конфиденциальности</a>
</footer>
</body>
</html>
