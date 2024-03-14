@extends('warframe')

@section('styles')
@endsection
@section('main')
    @vite('resources/css/index.css')
    <section class="hero">
        <h1 class="hero-title-1 text-gray-200">Городская клиническая</h1>
        <h1 class="hero-title-2">Больница</h1>
        <img class="hero-img" src="assets/main-hero.jpg">
        <div class="hero-hot-line">
            <p class="hero-hot-line-text">Горячая линия</p>
            <a href="tel:">+7 (977) 407-10-45</a>
            <button onclick="Livewire.dispatch('openModal',  { component: 'record-modal-form' })"
                    class="primary-btn btn-recording">
                Записаться на прием
            </button>
        </div>
    </section>
    @include('components.index.news')

    <section class="about">
        <div class="about-main">
            <p class="about-hint">О медицинском центре</p>
            <h2>Клиническая больница им. святого Луки</h2>

            <p class="about-col-3-4">Задача организации, в особенности же рамки и место обучения кадров позволяет
                выполнять
                важные задания по разработке новых предложений. </p>
            <p class="about-col-2-3">Повседневная практика показывает, что консультация с широким активом представляет
                собой
                интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач.</p>
            <p class="about-col-2-2">Значимость этих проблем настолько очевидна, что начало повседневной работы по
                формированию позиции позволяет
                оценить значение позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и богатый
                опыт реализация намеченных</p>
            <p class="about-col-3-3">плановых заданий позволяет выполнять важные задания по разработке дальнейших
                направлений развития. Повседневная практика показывает, что сложившаяся структура организации
                способствует
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

    @livewire('record-modal-form')
@endsection
