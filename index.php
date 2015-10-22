<!DOCTYPE html>
<html>
    <head>
        <title>Sedona — Index</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic" type='text/css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div class="container">
            <header class="main-header">
                <div class="logo">
                    <img class="logo__image" src="img/logo.png" width="138" height="70" alt="logo">
                </div>

                <nav class="main-nav">
                    <ul class="main-nav__list row--inline">
                        <li class="main-nav__item"><a href="#" class="main-nav__link">Информация</a></li>
                        <li class="main-nav__item main-nav__item--offset"><a href="#" class="main-nav__link">Фото и видео</a></li>
                        <li class="main-nav__item"><a href="#" class="main-nav__link">Карта штата</a></li>
                        <li class="main-nav__item"><a href="hotels.html" class="main-nav__link">Гостиницы</a></li>
                    </ul>
                </nav>

                <div class="promo-block">
                    <img class="promo-block__image" src="img/promo_image.png" width="458" height="352" alt="promo_text">
                </div>
            </header>

            <article class="features">

                <header class="features-header">
                    <h1 class="features-header__title">Седона - небольшой городок в аризоне, заслуживающий большего!</h1>
                    <p class="features-header__text">Рассмотрим 5 причин, по которым седона круе чем гранд каньон!</p>
                </header>

                <div class="row row__photo">
                    <div class="col s-2">
                        <div class="feature feature--blue">
                            <h2 class="feature__title">Настоящий<br> городок</h2>
                            <div class="feature__number">№1</div>
                            <p class="feature__text">Седона не атракцион для туристов,<br> там течет своя жизнь</p>
                        </div>
                    </div>

					<div class="col s-4">
						<figure class="feature-picture">
	                        <img src="img/feature_img_1.jpg" alt="фото городка" class="feature-picture__image">
	                    </figure>
					</div>

                </div>

                <div class="row">
                    <div class="col s-2">
                        <div class="feature feature--icon feature--icon-1">
                            <h2 class="feature__title">Жилье</h2>
                            <p class="feature__text">Рекомендуем пожить в настоящем<br> мотеле, все как в кино!</p>
                        </div>
                    </div>

                    <div class="col s-2">
                        <div class="feature feature--icon feature--icon-2">
                            <h2 class="feature__title">Еда</h2>
                            <p class="feature__text">Всегда заказывай фирменный бургер,<br> вы не разочаруетесь!</p>
                        </div>
                    </div>

                    <div class="col s-2">
                        <div class="feature feature--icon feature--icon-3">
                            <h2 class="feature__title">Сувениры</h2>
                            <p class="feature__text">Не только китайского,<br> но и местного производства!</p>
                        </div>
                    </div>
                </div>

                <div class="row row__photo">
                    <div class="col s-4">
						<figure class="feature-picture">
	                        <img src="img/feature_img_2.jpg" alt="фото моста дьявола" class="feature-picture__image">
	                    </figure>
					</div>

                    <div class="col s-2">
                        <div class="feature feature--blue">
                            <h2 class="feature__title">Там есть<br>мост дьявола</h2>
                            <div class="feature__number">№2</div>
                            <p class="feature__text">Да, понему можно пройти!<br> если конечно вы осмелитесь</p>
                        </div>
                    </div>
                </div>

                <div class="row row--gray">
                    <div class="col s-2">
                        <div class="feature feature--gray">
                            <h2 class="feature__title">Небольшая<br> площадь</h2>
                            <div class="feature__number">№3</div>
                            <p class="feature__text">Все достопримечательности<br> находятся очень близко</p>
                        </div>
                    </div>

                    <div class="col s-2">
                        <div class="feature feature--gray">
                            <h2 class="feature__title">Красивая<br> дорога</h2>
                            <div class="feature__number">№4</div>
                            <p class="feature__text">Ехать в седону из лас-вегаса совсем<br> не скучно</p>
                        </div>
                    </div>

                    <div class="col s-2">
                        <div class="feature feature--gray">
                            <h2 class="feature__title">Мало<br> туристов</h2>
                            <div class="feature__number">№5</div>
                            <p class="feature__text">Большинство едет в гранд каньон<br> и толпится там</p>
                        </div>
                    </div>
                </div>
            </article>

            <section class="search">
                <h2 class="search__title">Заинтересовались?</h2>
                <p class="search__text"> Укажите предлагаемые даты поездки<br>
                и мы покажем вам лучшие предложения гостиниц в седоне</p>
                <a href="form.html" id="btn-search" class="btn-brown btn-brown--search">Поиск гостиницы в седоне</a>
            </section>

            <div class="map-container">
                <div class="map">
                    <iframe src="https://www.google.com/maps/d/embed?mid=z_ag3SntiUhA.kKlLlNH9OgY0" width="100%" height="100%"></iframe>

                </div>

                <div class="popup_form">
                    <form action="#" method="post">
                        <div class="popup_form__stroke">
                            <label for="date-in" class="popup_form__label">Дата Заезда:</label>
                            <input class="popup_form__input-date" type="text" name="date-in" id="date-in" autofocus value="24 апреля 2015">
                            <i class="popup_form__icon icon-calendar"></i>
                        </div>

                        <div class="popup_form__stroke">
                            <label for="date-out" class="popup_form__label">Дата выезда:</label>
                            <input  class="popup_form__input-date" type="text" name="date-out" id="date-out" value="4 июля 2014">
                            <i class="popup_form__icon icon-calendar"></i>
                        </div>

                        <div class="popup_form__stroke popup_form__stroke--half">
                            <label class="popup_form__label" for="adult">Взрослые:</label>
                            <i class="icon-plus"></i>
                            <input type="text" name="adult" class="popup_form__input-number" value="2">
                            <i class="popup_form__icon icon-minus"></i>
                        </div>

                        <div class="popup_form__stroke popup_form__stroke--half">
                            <label class="popup_form__label popup_form__label--min" for="kids"> Дети:</label>
                            <i class="icon-plus"></i>
                            <input type="text" name="kids" class="popup_form__input-number" value="0">
                            <i class="popup_form__icon icon-minus"></i>
                        </div>

                        <button type="submit" class="btn-blue btn-blue--form">Найти</button>
                    </form>
                </div>

                <footer class="main-footer main-footer--index row row--inline text-center">
                    <div class="col s-2">
                        <a class="hashtag" href="#">#visitsedona</a>
                    </div>

                    <div class="col s-2">
                        <div class="social">
                            <a class="social-item icon-twitter" href="#"></a>
                            <a class="social-item icon-facebook" href="#"></a>
                            <a class="social-item icon-youtube" href="#"></a>
                        </div>
                    </div>

                    <div class="col s-2">
                        <div class="made-by">website by <a class="made-by__link" href="#"><img src="img/logo_html.png" class="made-by__image" alt=""></a></div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="js/jquery-2.1.4.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
