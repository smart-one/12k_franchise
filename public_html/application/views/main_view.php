<?php

function compilePage( $data = null )
{
    $head = "
    <link rel='stylesheet' type='text/css' href='/css/header.css'>
    <link rel='stylesheet' type='text/css' href='/css/navigation.css'>
    <link rel='stylesheet' type='text/css' href='/css/menu.css'>
    <link rel='stylesheet' type='text/css' href='/css/landing.css'>
    <script type='text/javascript' src='/js/shared.js'></script>
    ";
    $header = "";
    $body = "
    <input type='checkbox' id='idRightMenuOpenBtn' class='right_side_menu_btn'>
    <div class='header_container'>
        <a href='#sec0' class='site_logo'></a>
        <!--label class='right_side_menu_btn' for='idRightMenuOpenBtn' onclick></label-->

        <ul class='contacts'>
            <li>
                <span>Франшиза</span>
                <span class='space'>антикафе</span>
            </li>
            <li>
                <span class='phone'>+7(812)931-56-63</span>
            </li>
            <li class='stretch'></li>
        </ul>
        <h1>«12 комнат»</h1>
    </div>
    <div class='right_menu_container'>
        <h5>меню</h5>

        <h2>о нас</h2>
        <ul class='menu'>
            <li>
                <a href='#sec0'>Презентация</a>
            </li>
            <li>
                <a href='#sec1'>Отличия</a>
            </li>
            <li>
                <a href='#sec2'>Особенности</a>
            </li>
            <li>
                <a href='#sec3'>Как работает</a>
            </li>
            <li>
                <a href='#sec4'>Кому интересно</a>
            </li>
            <li>
                <a href='#sec5'>Мероприятия</a>
            </li>
            <li>
                <a href='#sec6'>Чем привлекаем</a>
            </li>
            <li>
                <a href='#sec7'>Что такое антикафе</a>
            </li>
            <li>
                <a href='#sec8'>Прибыльность</a>
            </li>
        </ul>

        <h2>предложение</h2>
        <ul class='menu'>
            <li>
                <a href='#sec9'>Бизнес-план</a>
            </li>
            <li>
                <a href='#sec10'>Что Вы получаете</a>
            </li>
            <li>
                <a href='#sec11'>Форматы</a>
            </li>
            <li>
                <a href='#sec12'>Вопросы</a>
            </li>
            <li>
                <a href='#sec13'>Наши заведения</a>
            </li>
        </ul>
    </div>
    <label class='right_side_menu_btn' for='idRightMenuOpenBtn' onclick></label>
    <div class='navigation_container'>
        <ul id='idSeenList' class='seen'>
            <li id='idSeen1' class='active'>
                <a href='#sec0'></a>
            </li>
            <li id='idSeen2' class='hidden'>
                <a href='#sec1'></a>
            </li>
            <li id='idSeen3' class='hidden'>
                <a href='#sec2'></a>
            </li>
            <li id='idSeen4' class='hidden'>
                <a href='#sec3'></a>
            </li>
            <li id='idSeen5' class='hidden'>
                <a href='#sec4'></a>
            </li>
            <li id='idSeen6' class='hidden'>
                <a href='#sec5'></a>
            </li>
            <li id='idSeen7' class='hidden'>
                <a href='#sec6'></a>
            </li>
            <li id='idSeen8' class='hidden'>
                <a href='#sec7'></a>
            </li>
            <li id='idSeen9' class='hidden'>
                <a href='#sec8'></a>
            </li>
            <li id='idSeen10' class='hidden'>
                <a href='#sec9'></a>
            </li>
            <li id='idSeen11' class='hidden'>
                <a href='#sec10'></a>
            </li>
            <li id='idSeen12' class='hidden'>
                <a href='#sec11'></a>
            </li>
            <li id='idSeen13' class='hidden'>
                <a href='#sec12'></a>
            </li>
            <li id='idSeen14' class='hidden'>
                <a href='#sec13'></a>
            </li>
        </ul>

        <ul id='idUnseenList' class='unseen'>
            <li id='idUnseen1' class='hidden'>
                <a href='#sec0'></a>
            </li>
            <li id='idUnseen2'>
                <a href='#sec1'></a>
            </li>
            <li id='idUnseen3'>
                <a href='#sec2'></a>
            </li>
            <li id='idUnseen4'>
                <a href='#sec3'></a>
            </li>
            <li id='idUnseen5'>
                <a href='#sec4'></a>
            </li>
            <li id='idUnseen6'>
                <a href='#sec5'></a>
            </li>
            <li id='idUnseen7'>
                <a href='#sec6'></a>
            </li>
            <li id='idUnseen8'>
                <a href='#sec7'></a>
            </li>
            <li id='idUnseen9'>
                <a href='#sec8'></a>
            </li>
            <li id='idUnseen10'>
                <a href='#sec9'></a>
            </li>
            <li id='idUnseen11'>
                <a href='#sec10'></a>
            </li>
            <li id='idUnseen12'>
                <a href='#sec11'></a>
            </li>
            <li id='idUnseen13'>
                <a href='#sec12'></a>
            </li>
            <li id='idUnseen14'>
                <a href='#sec13'></a>
            </li>
        </ul>
    </div>

    <div id='fullpage'>
        <div id='idMainBackground' class='main_background'></div><!-- main_background -->
        <div class='section' id='section0'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Стань владельцем креативного
                        <br>бизнеса: дело для души с точкой
                        <br>безубыточности от 2-х месяцев
                    </h2>
                </div>

                <div class='form_1_container'>
                    <ul class='benefits_list'>
                        <li class='poseshayet'>
                            <p>Посещает 7300 гостей в месяц</p>
                        </li>
                        <li class='prohodimost'>
                            <p>
                                Высокая лояльность. 85% гостей
                                <br>возвращается в течение 3-х месяцев
                            </p>
                        </li>
                        <li class='uspeshnaya'>
                            <p>
                                Успешная бизнес-модель
                                <br>с окупаемостью 9-18 месяцев
                                <br>с четкой аналитикой и программой
                                <br>по управлению заведением
                            </p>
                        </li>
                    </ul>

                    <div class='form_1'>
                        <form id='idGetCommercialOfferForm' action='/form/' method='post'>
                            <input type='hidden' name='redirect' value='#sec0'>
                            <input type='hidden' name='type' value='1'>

                            <span class='title'>Для тех, кто хочет узнать больше</span>
                            <div class='row'>
                                <label>Имя</label>
                                <input id='idCustomerNameInput' type='text' name='customer_name' value=''>
                            </div>
                            <div class='row'>
                                <label>Телефон</label>
                                <input id='idCustomerPhoneInput' type='text' name='customer_phone' value=''>
                            </div>
                            <div class='row'>
                                <label>E-Mail</label>
                                <input id='idCustomerEmailInput' type='text' name='customer_email' value=''>
                            </div>
                            <div class='row submit'>
                                <input id='idGetCommercialOfferSubmit' type='submit' class='inactive' value='Получить коммерческое\nпредложение'>
                            </div>
                        </form>
                    </div><!-- form_1 -->
                </div>

                <div class='next_page_btn_container'>
                    <a href='#sec1'></a>
                </div>
            </div><!-- section_content -->
        </div>
        <div class='section' id='section1'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Чем бизнес антикафе от «12 комнат»
                        <br>отличается от других подобных проектов?
                        <br><span class='green'>Самое проходимое антикафе в России.</span>
                    </h2>
                </div>
                <ul class='benefits_list_2'>
                    <li class='item1'>
                        <p>
                            Проходимость 7300
                            <br>человек в месяц,
                            <br>минимум 85% из них
                            <br>вернутся
                        </p>
                    </li>
                    <li class='item2'>
                        <p>
                            Уникальная система
                            <br>организации
                            <br>пространства,
                            <br>посадки, логистики
                        </p>
                    </li>
                    <li class='item3'>
                        <p>
                            Экономическая модель
                            <br>рентабельного
                            <br>заведения
                            <br>и баланс издержек
                        </p>
                    </li>
                </ul>

                <div class='next_page_btn_container'>
                    <a href='#sec2'></a>
                </div>
            </div><!-- section_content -->
        </div>
        <div class='section' id='section2'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Особенности бизнес-модели «12
                        <br>комнат», которые обеспечивают
                        <br>прибыльность
                    </h2>
                </div>
                <ul class='benefits_list_3'>
                    <li class='item1'>
                        <p>
                            Серьезное маркетинговое
                            <br>исследование после покупки
                            <br>франшизы
                        </p>
                    </li>
                    <li class='item2'>
                        <p>
                            Оригинальная система
                            <br>зонирования и организации
                            <br>пространства.
                        </p>
                    </li>
                    <li class='item3'>
                        <p>
                            Проверенный на практике
                            <br>бизнес-план и система
                            <br>оптимизации расходов
                            <br>и доходов
                        </p>
                    </li>
                    <li class='item4'>
                        <p>
                            Дополнительный сервис
                            <br>и меню с отдельной оплатой
                            <br>вне общего чека
                        </p>
                    </li>
                </ul>

                <h3>
                    Антикафе «12 комнат» – не локальное местечко для узкой компании.
                    <br>Оно привлекает 27 целевых групп – ежемесячно тут проводят
                    <br>время 7300 посетителей.
                </h3>

                <div class='next_page_btn_container'>
                    <a href='#sec3'></a>
                </div>
            </div><!-- section_content -->
        </div>
        <div class='section' id='section3'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Как это работает? Об этом на вебинаре.
                        <br>Записаться на бесплатный вебинар
                        <br>с собственником!
                    </h2>
                </div>

                <div class='form_2'>
                    <form id='idWebinarForm' action='/form/' method='post'>
                        <input type='hidden' name='redirect' value='#sec3'>
                        <input type='hidden' name='type' value='3'>

                        <div class='row'>
                            <label>Имя</label>
                            <input id='idWebinarCustomerNameInput' type='text' name='customer_name' value=''>
                        </div>
                        <div class='row'>
                            <label>Телефон</label>
                            <input id='idWebinarCustomerPhoneInput' type='text' name='customer_phone' value=''>
                        </div>
                        <div class='row'>
                            <label>E-Mail</label>
                            <input id='idWebinarCustomerEmailInput' type='text' name='customer_email' value=''>
                        </div>
                        <div class='row'>
                            <label>Расписание вебинаров</label>
                        </div>

                        <input id='idWebinarSchedule' type='hidden' name='webinar' value=''>
                        <ul id='idWebinarScheduleList' class='schedule'>
    ";
    foreach( $data['webinar'] as $k => $webinar )
    {
        $body .= "
                        <li did='".$webinar['id']."'>
                                <p>
                                    ".$webinar['date']."
                                </p>
                            </li>
        ";
    }
    $body .= "
                        </ul>
                        <div class='row submit'>
                            <input id='idWebinarSubmit' type='submit' class='inactive' value='Записаться на вебинар'>
                        </div>
                    </form>
                </div><!-- form_2 -->

                <div class='next_page_btn_container'>
                    <a href='#sec4'></a>
                </div>
            </div><!-- section_content -->
        </div>

        <div class='section' id='section4'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Кому интересно приходить в «12 комнат»
                        <br>и почему они готовы платить за это?
                    </h2>
                </div>

                <ul class='people_list'>
                    <li>
                        <p>
                            Начинающие
                            <br>предприниматели
                            <br>и фрилансеры
                        </p>
                    </li>
                    <li>
                        <p>
                            Игроки в мафию,
                            <br>ролевые
                            <br>и настольные игры
                        </p>
                    </li>
                    <li>
                        <p>
                            Друзья и коллеги,
                            <br>приятели
                            <br>по интересам
                        </p>
                    </li>
                    <li>
                        <p>
                            Яркие,
                            <br>творческие люди
                            <br>и интеллектуалы
                        </p>
                    </li>
                </ul>

                <!--div class='next_page_btn_container'>
                    <a href='#sec5'></a>
                </div-->
            </div><!-- section_content -->
            <div class='black_line'>
                <div class='content'>
                    <p>
                        Так работает феномен «третьего места» – пространства,
                        <br>куда люди приходят, чтобы вырваться из цепочки
                        <br>«дом-работа-дом», расширить привычный круг общения
                        <br>и научиться чему-то новому.
                    </p>
                    <img src='/img/dom_rabota_dom.png'>
                </div>
            </div>
            <div class='section_content customed'>
                <div class='next_page_btn_container'>
                    <a href='#sec5'></a>
                </div>
            </div><!-- section_content -->
        </div>

        <div class='section' id='section5'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        В антикафе устраивается до 80 мероприятий
                        <br>в месяц, на которые приходят целыми компаниями.
                    </h2>
                </div>
                <ul class='benefits_list_4'>
                    <li>
                        <p>Кинопросмотры</p>
                    </li>
                    <li>
                        <p>Мастер-классы</p>
                    </li>
                    <li>
                        <p>Бизнес-встречи</p>
                    </li>
                    <li>
                        <p>Мафия</p>
                    </li>

                    <li>
                        <p>Настольные игры</p>
                    </li>
                    <li>
                        <p>Квартирники</p>
                    </li>
                    <li>
                        <p>Языковые клубы</p>
                    </li>
                    <li>
                        <p>Тренинги</p>
                    </li>
                </ul>
                <div class='h2_container'>
                    <h2>
                        Мероприятия, празднование Дней Рождений
                        <br>и других праздников дает 6700 бронирований
                        <br>в год.
                    </h2>
                </div>

                <div class='next_page_btn_container'>
                    <a href='#sec6'></a>
                </div>
            </div><!-- section container -->
        </div>
        <div class='section' id='section6'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        В антикафе устраивается до 80 мероприятий
                        <br>в месяц, на которые приходят целыми компаниями.
                    </h2>
                </div>
            </div><!-- section_content -->
            <div class='swiper_line'>
                <div class='content'>
                    <div id='swipe' class='swiper-container'>
                    <div class='swiper-wrapper'>
                        <div class='swiper-slide' style='background-image: url(\"/img/slider/1.jpg\")'>
                            <p>
                                Удобная система оплаты,
                                <br>мультитарифность
                            </p>
                        </div>
                        <div class='swiper-slide' style='background-image: url(\"/img/slider/2.jpg\")'>
                            <p>
                                Много разных комнат, где удобно
                                <br>и компании из 10,
                                <br>и из 40 человек
                            </p>
                        </div>
                        <div class='swiper-slide' style='background-image: url(\"/img/slider/3.jpg\")'>
                            <p>
                                Лучший кофе в городе из зерна
                                <br>свежей обжарки и оригинальное
                                <br>кофейное меню
                            </p>
                        </div>
                        <div class='swiper-slide' style='background-image: url(\"/img/slider/4.jpg\")'>
                            <p>
                                Интересные мероприятия
                                <br>для отдыха и обучения
                            </p>
                        </div>
                        <div class='swiper-slide' style='background-image: url(\"/img/slider/5.jpg\")'>
                            <p>
                                Общество культурных
                                <br>творческих людей
                            </p>
                        </div>
                        <div class='swiper-slide' style='background-image: url(\"/img/slider/6.jpg\")'>
                            <p>
                                Неформальная демократичная
                                <br>обстановка
                            </p>
                        </div>

                    </div>

                    <div class='navigation left'>
                        <div class='wrapper'>
                            <div id='idLeft' class='btn'></div>
                        </div>
                    </div>
                    <div class='navigation right'>
                        <div class='wrapper'>
                            <div id='idRight' class='btn'></div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class='section_content customed'>
                <div class='next_page_btn_container'>
                    <a href='#sec7'></a>
                </div>
            </div><!-- section_content -->
        </div>

        <div class='section' id='section7'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Хотите узнать о том, что такое антикафе
                        <br>и как сделать его прибыльным?
                    </h2>
                </div>

                <div class='form_2 lecture'>
                    <form id='idLectureForm' action='/form/' method='post'>
                        <input type='hidden' name='redirect' value='#sec7'>
                        <input type='hidden' name='type' value='4'>

                        <div class='row'>
                            <label>Имя</label>
                            <input id='idLectureCustomerNameInput' type='text' name='customer_name' value=''>
                        </div>
                        <div class='row'>
                            <label>Телефон</label>
                            <input id='idLectureCustomerPhoneInput' type='text' name='customer_phone' value=''>
                        </div>
                        <div class='row'>
                            <label>E-Mail</label>
                            <input id='idLectureCustomerEmailInput' type='text' name='customer_email' value=''>
                        </div>
                        <div class='row'>
                            <label>Темы лекций</label>
                        </div>
                        <input id='idLectureSchedule' type='hidden' name='lecture' value=''>
                        <ul id='idLectureScheduleList' class='schedule'>
    ";
    foreach( $data['lecture'] as $k => $lecture )
    {
        $body .= "
                            <li lid='".$lecture['id']."'>
                                <p>
                                    ".$lecture['name']."
                                </p>
                            </li>
        ";
    }
    $body .= "
                        </ul>
                        <div class='row submit'>
                            <input id='idLectureSubmit' type='submit' class='inactive' value='Записаться на лекции'>
                        </div>
                    </form>
                </div><!-- form_2 -->

                <div class='next_page_btn_container'>
                    <a href='#sec8'></a>
                </div>
            </div><!-- section_content -->
        </div>

        <div class='section' id='section8'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Как антикафе «12 комнат» стало самым
                        <br>прибыльным в своей нише
                    </h2>
                </div>
                <ul class='benefits_list_5'>
                    <li>
                        <p>Удачное<br>расположение</p>
                    </li>
                    <li>
                        <div></div>
                    </li>
                    <li>
                        <p>Особенная организация<br>пространства</p>
                    </li>
                    <li>
                        <div></div>
                    </li>
                    <li>
                        <p>Легко помещается<br>до 150 людей</p>
                    </li>
                    <li>
                        <p>Индивидуальный подход<br>к каждому</p>
                    </li>
                    <li>
                        <div></div>
                    </li>
                    <li>
                        <p>85% гостей<br>возвращаются</p>
                    </li>
                    <li>
                        <div></div>
                    </li>
                    <li>
                        <p>Посетители рассказывают<br>о нас друзьям</p>
                    </li>
                </ul>
            </div><!-- section_content -->
            <div class='black_line'>
                <div class='content'>
                    <ul>
                        <li>
                            <p>
                                По сравнению
                                <br>с ресторанным бизнесом
                                <br>антикафе
                                <br>в 2-3 раза дешевле
                                <br>открыть и в 3-4 раза
                                <br>быстрее окупить.
                            </p>
                        </li>
                        <li>
                            <p>
                                Точка безубыточности
                                <br>достигается за 2-3 месяца,
                                <br>окупаемость через 9-18
                                <br>месяцев.
                                <br>Среднее кафе
                                <br>или ресторан окупится
                                <br>только через 5-8 лет
                            </p>
                        </li>
                        <li>
                            <p>
                                Антикафе можно открыть
                                <br>достаточно недорого,
                                <br>и впоследствии,
                                <br>вкладывать деньги
                                <br>в улучшения из оборотных
                                <br>средств.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class='section_content customed'>
                <div class='next_page_btn_container'>
                    <a href='#sec9'></a>
                </div>
            </div><!-- section_content -->
        </div>

        <div class='section' id='section9'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Хотите конкретики? Предоставляем
                        <br>подробный бизнес план.
                    </h2>
                </div>
                <div class='form_1'>
                    <form id='idGetPlanOfferForm' action='/form/' method='post'>
                        <input type='hidden' name='redirect' value='#sec9'>
                        <input type='hidden' name='type' value='2'>

                        <div class='row'>
                            <label>Имя</label>
                            <input id='idPlanCustomerNameInput' type='text' name='customer_name' value=''>
                        </div>
                        <div class='row'>
                            <label>Телефон</label>
                            <input id='idPlanCustomerPhoneInput' type='text' name='customer_phone' value=''>
                        </div>
                        <div class='row'>
                            <label>E-Mail</label>
                            <input id='idPlanCustomerEmailInput' type='text' name='customer_email' value=''>
                        </div>
                        <div class='row submit'>
                            <input id='idGetPlanSubmit' type='submit' class='inactive' value='Получить бизнес план'>
                        </div>
                    </form>
                </div><!-- form_1 -->

                <div class='next_page_btn_container'>
                    <a href='#sec10'></a>
                </div>
            </div><!-- section_content -->
        </div>

        <div class='section' id='section10'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Что вы получаете для старта
                        <br>вместе с франшизой:
                    </h2>
                </div>
                <ul class='get_list'>
                    <li>
                        <img wid='1' class='plus_btn' src='/img/plus.png'>
                        <span>
                            Гибкую отлаженную
                            <br>бизнес-модель
                        </span>
                        <img wid='4' class='plus_btn' src='/img/plus.png'>
                        <span>
                            Медиа-планирование и
                            <br>система маркетинга для
                            <br>привлечения посетителей
                        </span>
                        <img wid='7' class='plus_btn' src='/img/plus.png'>
                        <span>
                            Обучение персонала и
                            <br>контроль качества
                            <br>их работы
                        </span>
                    </li>
                    <li>
                        <img wid='8' class='plus_btn' src='/img/plus.png'>
                        <span>
                            Стандарты деятельности от А до Я,
                            <br>рабочие инструкции и чек-листы
                        </span>
                        <img wid='2' class='plus_btn' src='/img/plus.png'>
                        <span>
                            Собственную программу для
                            <br>учета времени гостей и
                            <br>управления антикафе
                        </span>
                        <img wid='5' class='plus_btn' src='/img/plus.png'>
                        <span>
                            Концепцию заведения под
                            <br>помещение и продуманную
                            <br>логистику
                        </span>
                        <img wid='10' class='plus_btn' src='/img/plus.png'>
                        <span>
                            Рекомендации по снижению
                            <br>издержек и подбору оснащения
                        </span>
                    </li>
                    <li>
                        <img wid='3' class='plus_btn' src='/img/plus.png'>
                        <span>
                            Индивидуальную разработку
                            <br>локации и посадки гостей
                        </span>
                        <img wid='6' class='plus_btn' src='/img/plus.png'>
                        <span>
                            Беспрецедентную поддержку
                            <br>в старте и управлении
                            <br>кадрами
                        </span>
                        <img wid='9' class='plus_btn' src='/img/plus.png'>
                        <span>
                            Сбор и анализ подробной
                            <br>статистики для контроля
                            <br>развития бизнеса
                        </span>
                    </li>
                </ul>

                <div class='next_page_btn_container'>
                    <a href='#sec11'></a>
                </div>
            </div><!-- section_content -->
        </div>

        <div class='section' id='section11'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Четыре формата открытия
                        <br>собственного антикафе
                    </h2>
                </div>

                <div class='format_list_container'>
                    <div class='legend_container'>
                        <ul>
                            <li>
                                <p>Роялти</p>
                            </li>
                            <li>
                                <p>вы получаете</p>
                            </li>
                            <li>
                                <p>стоимость</p>
                            </li>
                        </ul>
                    </div>
                    <ul class='format_list'>
                        <li>
                            <span class='type'>формат 1</span>
                            <span class='title'>Консалтинг без покупки<br>франшизы</span>
                            <span class='price'>105 000 - 115 000 - 130 000</span>

                            <span class='getting first'>Аналитику</span>
                            <span class='divider'></span>
                            <span class='getting second'>
                                Консалтинг
                                <br>Пакеты по 3-5-8 консультаций
                            </span>
                            <span class='divider'></span>
                            <span class='getting third'>
                                План решений
                            </span>

                            <span class='getting fourth padding'>
                                Отсутствуют
                            </span>
                        </li>
                        <li>
                            <span class='type'>формат 2</span>
                            <span class='title'>Самостоятельный</span>
                            <span class='price'>350 000</span>

                            <span class='getting first'>Консалтинг</span>
                            <span class='divider'></span>
                            <span class='getting second'>
                                Бизнес бук: стандарты по управлению
                                <br>антикафе, инструкции по запуску,
                                <br>алгоритмы работы
                            </span>
                            <span class='divider'></span>
                            <span class='getting third'>
                                Программное обеспечение для учета
                                <br>гостей
                            </span>

                            <span class='getting fourth'>
                                Для Москвы и Петербурга
                                <br>3% от оборота , но не менее
                                <br>30 000 рублей в месяц
                                <br>Для других городов
                                <br>22 000 рублей в месяц
                            </span>
                        </li>
                        <li>
                            <span class='type'>формат 3</span>
                            <span class='title'>Партнер</span>
                            <span class='price'>800 000</span>

                            <span class='getting first'>
                                Помощь в подборе места и
                                <br>формирование концепции заведения
                                <br>исходя из выбранного места
                            </span>

                            <span class='getting second'>
                                Бизнес бук, бренд бук, сайт,
                                <br>программное обеспечение для учета
                                <br>гостей
                            </span>
                            <span class='divider'></span>
                            <span class='getting third'>
                                Обучение бариста и хостес
                            </span>

                            <span class='getting fourth'>
                                Для Москвы и Петербурга
                                <br>3% от оборота , но не менее
                                <br>30 000 рублей в месяц
                                <br>Для других городов
                                <br>22 000 рублей в месяц
                            </span>
                        </li>
                        <li>
                            <span class='type'>формат 4</span>
                            <span class='title'>Готовый бизнес</span>
                            <span class='price'>От 1 700 000 рублей</span>

                            <span class='getting first'>
                                Помощь в подборе места и
                                <br>формирование концепции заведения
                                <br>исходя из выбранного места
                            </span>
                            <span class='divider'></span>
                            <span class='getting second'>
                                Бизнес бук, бренд бук, сайт,
                                <br>программное обеспечение для учета
                                <br>гостей, обучение бариста и хостес +
                                <br>стажировка в одном из антикафе сети
                            </span>
                            <span class='divider'></span>
                            <span class='getting third'>
                                Дизайн проект
                                <br>Ремонт помещения
                                <br>Разработка мебели
                                <br>Стажировка бариста 4 недели
                                <br>Стажировка хостес 3 недели
                                <br>PR (промо, outdoor, контент)
                            </span>

                            <span class='getting fourth'>
                                Для Москвы и Петербурга
                                <br>3% от оборота , но не менее
                                <br>30 000 рублей в месяц
                                <br>Для других городов
                                <br>22 000 рублей в месяц
                            </span>
                        </li>
                    </ul>
                </div>

                <div class='next_page_btn_container'>
                    <a href='#sec12'></a>
                </div>
            </div><!-- section_content -->
        </div>

        <div class='section' id='section12'>
            <div class='section_content'>
                <div class='h2_container'>
                    <h2>
                        Остались вопросы или хотите узнать
                        <br>больше об условиях франшизы?
                    </h2>
                </div>
                <div class='form_1'>
                    <form id='idGetPlan2OfferForm' action='/form/' method='post'>
                        <input type='hidden' name='redirect' value='#sec12'>
                        <input type='hidden' name='type' value='5'>

                        <div class='row'>
                            <label>Имя</label>
                            <input id='idPlan2CustomerNameInput' type='text' name='customer_name' value=''>
                        </div>
                        <div class='row'>
                            <label>Телефон</label>
                            <input id='idPlan2CustomerPhoneInput' type='text' name='customer_phone' value=''>
                        </div>
                        <div class='row'>
                            <label>E-Mail</label>
                            <input id='idPlan2CustomerEmailInput' type='text' name='customer_email' value=''>
                        </div>
                        <div class='row submit'>
                            <input id='idGetPlan2Submit' type='submit' class='inactive' value='Оставить заявку'>
                        </div>
                    </form>
                </div><!-- form_1 -->

                <div class='next_page_btn_container'>
                    <a href='#sec13'></a>
                </div>
            </div><!-- section_content -->
        </div>

        <div class='section' id='section13'>
            <div class='section_content'>
                <div class='h2_container centered'>
                    <h2>
                        Наши заведения
                    </h2>
                </div>

                <ul class='our_projects'>
                    <li>
                        <a href='http://12komnat.com/' target='_blank' rel='nofollow'>
                            <span>12komnat.com</span>
                        </a>
                    </li>
                    <li>
                        <a href='http://anticafe-ps.ru/' target='_blank' rel='nofollow'>
                            <span>anticafe-ps.ru</span>
                        </a>
                    </li>
                    <li>
                        <a href='http://belylist.ru/' target='_blank' rel='nofollow'>
                            <span>belylist.ru</span>
                        </a>
                    </li>
                </ul>
            </div><!-- section_content -->
        </div>
    </div>
    ";
    if(
        isset( $_SESSION['error'] ) &&
        !empty( $_SESSION['error'] )
    )
    {
        $body .= "
        <div id='idShadow' class='shadow'></div>
            <div id='idMessageContainer' class='message_container'>
        ";
    }
    else
    {
        $body .= "
        <div id='idShadow' class='shadow hidden'></div>
            <div id='idMessageContainer' class='message_container hidden'>
        ";
    }
    $body .= "
        <div class='message_wrapper'>
            <div id='w1' class='window hidden'>
                <div class='close_btn' wid='1'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    Гибкую отлаженную
                    <br>бизнес-модель
                </span>


            </div>
            <div id='w2' class='window hidden'>
                <div class='close_btn' wid='2'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    Собственную программу
                    <br>для учета времени гостей
                    <br>и управления антикафе
                </span>

                <table>
                    <tbody>
                        <tr>
                            <td colspan='3'>
                                <span class='subtitle'>
                                    Учет времени
                                </span>
                                <img class='down' src='/img/msg_arrow_down.png'>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class='subtitle'>
                                    Доходы
                                </span>
                                <img class='down' src='/img/msg_arrow_down.png'>
                            </td>
                            <td style='padding-left: 10px;padding-right: 10px;'>
                                <img src='/img/msg_arrow_right.png'>
                            </td>
                            <td>
                                <p>
                                    Учет всех
                                    <br>дополнительных доходов
                                    <br>(еда, абонементы, кофе с
                                    <br>собой, кальяны)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='3'>
                                <span class='subtitle'>
                                    Расходы
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Финансовый учет
                                </p>
                            </td>
                            <td style='padding-left: 10px;padding-right: 10px;'>
                                <img src='/img/msg_arrow_right.png'>
                            </td>
                            <td>
                                <p>
                                    Статистика по заданному
                                    <br>периоду времени и
                                    <br>критериям, высчитывание
                                    <br>среднего чека, доли
                                    <br>тарифа в посещении
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style='padding-top: 10px;'>
                                <p>
                                    Учет зарплат
                                </p>
                            </td>
                            <td style='padding-top: 10px;padding-left: 10px;padding-right: 10px;'>
                                <img src='/img/msg_arrow_right.png'>
                            </td>
                            <td style='padding-top: 10px;'>
                                <p>
                                    Задачи для рабочей
                                    <br>смены и старшего
                                    <br>персонала и
                                    <br>управляющего
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id='w3' class='window hidden'>
                <div class='close_btn' wid='3'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    Индивидуальную разработку
                    <br>локации и посадки гостей
                </span>

                <span class='subtitle margin'>
                    &#183; Помощь в зонировании и подборе дизайна помещения
                </span>
            </div>
            <div id='w4' class='window hidden'>
                <div class='close_btn' wid='4'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    Медиа-планирование и
                    <br>система маркетинга для
                    <br>привлечения посетителей
                </span>

                <span class='subtitle margin'>
                    &#183;  Целевая аудитория.
                </span>
                <span class='subtitle margin'>
                    &#183;  Проработка лояльности.
                </span>
                <span class='subtitle margin'>
                    &#183;  Инструкция по рекламе и PR
                </span>
                <span class='subtitle margin'>
                    &#183;  Примеры медиа-планов
                </span>
                <span class='subtitle margin'>
                    &#183;  Партнерские отношения
                </span>
            </div>
            <div id='w5' class='window hidden'>
                <div class='close_btn' wid='5'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    Концепцию заведения под помещение
                    <br>и продуманную логистику
                </span>

                <span class='subtitle margin'>
                    &#183;  Анализ региона и маркетинговое исследование
                </span>
                <span class='subtitle margin'>
                    &#183;  Концепция заведения и миссия компании
                </span>
                <span class='subtitle margin'>
                    &#183;  Помощь в подборе, заказе и доставке необходимой мебели от поставщиков
                </span>
                <span class='subtitle margin'>
                    &#183;  Плей-лист
                </span>
            </div>
            <div id='w6' class='window hidden'>
                <div class='close_btn' wid='6'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    Беспрецедентную поддержку
                    <br>в старте и управлении
                    <br>кадрами
                </span>

                <span class='subtitle margin'>
                    &#183; Подбор и аналитика перспективности помещения для Антикафе
                </span>
                <span class='subtitle margin'>
                    &#183; Внутренняя логистика
                </span>
                <span class='subtitle margin'>
                    &#183; Помощь в открытии
                </span>
                <span class='subtitle margin'>
                    &#183; Выезд топ-менеджера
                </span>
                <span class='subtitle margin'>
                    &#183; Выстраивание оргструктуры
                </span>
            </div>
            <div id='w7' class='window hidden'>
                <div class='close_btn' wid='7'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    Обучение персонала и контроль
                    <br>качества их работы
                </span>

                <span class='subtitle margin'>
                    &#183; Инструкция по подбору персонала
                </span>
                <span class='subtitle margin'>
                    &#183; Обучение хостес и бариста
                </span>
                <span class='subtitle margin'>
                    &#183; Техническая карта приготовления
                </span>
                <span class='subtitle margin'>
                    &#183; Меню
                </span>
                <span class='subtitle margin'>
                    &#183; Система мотивации
                </span>
                <span class='subtitle margin'>
                    &#183; Система контроля качества
                </span>
                <span class='subtitle margin'>
                    &#183; Тайный покупатель
                </span>
            </div>
            <div id='w8' class='window hidden'>
                <div class='close_btn' wid='8'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    Стандарты деятельности от А до Я,
                    <br>рабочие инструкции и чек-листы
                </span>

                <span class='subtitle margin'>
                    &#183; Скрипты общения с гостями
                </span>
                <span class='subtitle margin'>
                    &#183; Должностные инструкции
                </span>
            </div>
            <div id='w9' class='window hidden'>
                <div class='close_btn' wid='9'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    Сбор и анализ подробной статистики
                    <br>для контроля развития бизнеса
                </span>

                <span class='subtitle margin'>
                    &#183; Формы отчетности
                </span>
                <span class='subtitle margin'>
                    &#183; Формы учета статистики по расходам и закупкам
                </span>
                <span class='subtitle margin'>
                    &#183; Система аналитики показателей
                </span>
            </div>
            <div id='w10' class='window hidden'>
                <div class='close_btn' wid='10'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    Рекомендации по снижению издержек
                    <br>и подбору оснащения
                </span>

                <span class='subtitle margin'>
                    &#183; Снижение издержек при разовых затратах
                </span>
                <span class='subtitle margin'>
                    &#183; Снижение постоянных издержек
                </span>
                <span class='subtitle margin'>
                    &#183; Увеличение сроков амортизации оборудования
                </span>
                <span class='subtitle margin'>
                    &#183; Экономии на неэффективной рекламе
                </span>
            </div>

    ";
    if(
        isset( $_SESSION['error'] ) &&
        !empty( $_SESSION['error'] )
    )
    {
        $body .= "
            <div id='w12' class='window'>
                <div class='close_btn' wid='12'>
                    <div class='line'></div>
                </div>

                <span class='title'>
                    ".$_SESSION['error']."
                </span>
            </div>
        ";

        unset( $_SESSION['error'] );
    }
    $body .= "
        </div>
    </div>
    ";
    $footer = "";


    return array(
        'head' => $head,
        'header' => $header,
        'body' => $body,
        'footer' => $footer
    );
}