<?php include 'header.php'; ?>
            <header class="main-header-hotels">
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

                <div class="check-block clearfix">
                    <div class="hotel-container">
                        <div class="check-form">
                            <form action="#" method="post">
                                <div class="check-form-block">
                                    <h3 class="check-form-block__name">Инфраструктура</h3>
                                    <div class="check-form-block__line">
                                        <input type="checkbox" checked name="pool" id="pool">
                                        <label for="pool">Бассейн</label><br/>
                                    </div>
                                    <div class="check-form-block__line">
                                        <input type="checkbox" name="parking" id="parking">
                                        <label for="parking">Парковка</label><br/>
                                    </div>
                                    <div class="check-form-block__line">
                                        <input type="checkbox" name="wi-fi" id="wi-fi">
                                        <label for="wi-fi">Wi-Fi</label>
                                    </div>
                                </div>

                                <div class="check-form-block">
                                    <h3 class="check-form-block__name">Тип жилья</h3>
                                    <div class="check-form-block__line">
                                        <input type="checkbox" checked name="hotel" id="hotel">
                                        <label for="hotel">Гостиница</label><br/>
                                    </div>
                                    <div class="check-form-block__line">
                                        <input type="checkbox" checked name="motel" id="motel">
                                        <label for="motel">Мотель</label><br/>
                                    </div>
                                    <div class="check-form-block__line">
                                        <input type="checkbox" name="apartments" id="apartments">
                                        <label for="apartments">Wi-Fi</label>
                                    </div>
                                </div>

                                <div class="range-filter">
                                    <h3 class="range-filter__name">Стоимость в сутки (р):</h3>
                                    <div class="range-filter__controls">
                                        <div class="range-filter__inputs">
                                            <input class="range-filter__price" id="min-price" type="text" value="от 0">
                                            <input class="range-filter__price" id="max-price" type="text" value="до 3000">
                                        </div>
                                        <div class="range-filter__scale">
                                            <!--<div class="range-filter__scale"><div style="width:70%;" class="range-filter--bar"></div></div>
                                            <div class="range-filter__toggle range-filter--min-toggle"></div>
                                            <div class="range-filter__toggle range-filter--max-toggle"></div>-->
                                        </div>
                                    </div>
                                        <input type="submit" class="range-filter__btn" value="Показать">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row row--hotel">
                <div class="hotel-container output clearfix">
                    <div class="output__result">
                        <p class="h2">Найдено: 3</p>
                    </div>
                    <ul class="output__sort">
                        <li class="output__item">Сортировка:</li>
                        <li class="output__item">
                            <a href="" class="output__link output__link--active">По цене</a>
                        </li>
                        <li class="output__item">
                            <a href="" class="output__link">По типу</a>
                        </li>
                        <li class="output__item">
                            <a href="" class="output__link">По рейтингу</a>
                        </li>
                    </ul>
                    <div class="output__arrows">
                        <i class="icon-up-dir icon-up-dir--active"></i>
                        <i class="icon-down-dir"></i>
                    </div>
                </div>
            </div>

            <div class="row row--hotel">
                <div class="hotel-container">
                    <div class="hotel-picture">
                        <img class="hotel-picture__image" src="img/hotel_photo_1.jpg" width="135" height="90" alt="hotel's photo">
                    </div>

                    <div class="hotel-info">
                        <h2 class="hotel-info__name">Amara Resort & SPA</h2>
                        <div class="hotel-info__block hotel-info__block--small">
                            <span class="hotel-info__type">Гостиница</span>
                            <a class="btn-blue btn-blue--hotel">Подробнее</a>
                        </div>
                        <div class="hotel-info__block hotel-info__block--big">
                            <span class="hotel-info__type">От 3500 р.</span>
                            <a class="btn-brown btn-brown--hotel">Забронировать</a>
                        </div>
                    </div>

                    <div class="rating">
                        <div class="rating__stars">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                        </div>
                        <div class="rating__point">
                            Рейтинг: 8,5
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row--hotel">
                <div class="hotel-container clearfix">
                    <div class="hotel-picture">
                        <img class="hotel-picture__image" src="img/hotel_photo_1.jpg" width="135" height="90" alt="hotel's photo">
                    </div>

                    <div class="hotel-info">
                        <h2 class="hotel-info__name">Amara Resort & SPA</h2>
                        <div class="hotel-info__block hotel-info__block--small">
                            <span class="hotel-info__type">Гостиница</span>
                            <a class="btn-blue btn-blue--hotel">Подробнее</a>
                        </div>
                        <div class="hotel-info__block hotel-info__block--big">
                            <span class="hotel-info__type">От 3500 р.</span>
                            <a class="btn-brown btn-brown--hotel">Забронировать</a>
                        </div>
                    </div>
                    <div class="rating">
                        <div class="rating__stars">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                        </div>
                        <div class="rating__point">
                            Рейтинг: 8,5
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row--hotel">
                    <div class="hotel-container clearfix">
                        <div class="hotel-picture">
                            <img class="hotel-picture__image" src="img/hotel_photo_1.jpg" width="135" height="90" alt="hotel's photo">
                        </div>

                        <div class="hotel-info">
                            <h2 class="hotel-info__name">Amara Resort & SPA</h2>
                            <div class="hotel-info__block hotel-info__block--small">
                                <span class="hotel-info__type">Гостиница</span>
                                <a class="btn-blue btn-blue--hotel">Подробнее</a>
                            </div>
                            <div class="hotel-info__block hotel-info__block--big">
                                <span class="hotel-info__type">От 3500 р.</span>
                                <a class="btn-brown btn-brown--hotel">Забронировать</a>
                            </div>
                    </div>
                    <div class="rating">
                        <div class="rating__stars">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                        </div>
                        <div class="rating__point">
                            Рейтинг: 8,5
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer main-footer row row--inline text-center">
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
        </div>

        <script src="js/jquery-2.1.4.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
