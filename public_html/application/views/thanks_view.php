<?php

function compilePage( $data = null )
{
    $head = "
    <link rel='stylesheet' type='text/css' href='/css/header.css'>
    <link rel='stylesheet' type='text/css' href='/css/navigation.css'>
    <link rel='stylesheet' type='text/css' href='/css/menu.css'>
    <link rel='stylesheet' type='text/css' href='/css/landing.css'>
    ";
    $header = "";
    $body = "
    <input type='checkbox' id='idRightMenuOpenBtn' class='right_side_menu_btn'>
    <div class='header_container'>
        <a href='/' class='site_logo'></a>
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
                <a href='#sec0'>Бизнес-план</a>
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
            <!--li>
                <a href='#sec'>Аналитика</a>
            </li-->
            <li>
                <a href='#sec10'>История успеха</a>
            </li>
            <li>
                <a href='#sec11'>Что Вы получаете</a>
            </li>
            <li>
                <a href='#sec12'>Форматы</a>
            </li>
            <li>
                <a href='#sec13'>Вопросы</a>
            </li>
        </ul>
    </div>
    <label class='right_side_menu_btn' for='idRightMenuOpenBtn' onclick></label>

        <div class='section' id='section10'>
            <div class='section_content'>
    ";
    switch( $data['text'] )
    {
        case 2:
        {
            $body .= "
            <div class='h2_container'>
                <h2>
                    Благодарим за проявленный интерес
                    <br>к франшизе антикафе от «12 комнат».
                    <br>В ближайшее время с вами свяжется
                    <br>менеджер и направит бизнес план на
                    <br>указанный электронный адрес.
                </h2>
            </div>
            <div class='h4_container'>
                <h4>
                    Приглашаем послушать лекции
                    <br>о формате антикафе
                </h4>
            </div>
            <a class='youtube' href='http://youtube.com/?gl=RU&hl=ru' target='_blank' rel='nofollow'>youtube</a>
            ";
            break;
        }
        case 3:
        {
            $body .= "
            <div class='h2_container'>
                <h2>
                    Благодарим за проявленный интерес
                    <br>к франшизе антикафе от «12 комнат».
                    <br>В ближайшее время с вами свяжется
                    <br>менеджер для уточнения деталей
                    <br>участия в вебинаре.
                </h2>
            </div>
            <div class='h4_container'>
                <h4>
                    Приглашаем послушать лекции
                    <br>о формате антикафе
                </h4>
            </div>
            <a class='youtube' href='http://youtube.com/?gl=RU&hl=ru' target='_blank' rel='nofollow'>youtube</a>
            ";

            break;
        }
        case 4:
        {
            $body .= "
            <div class='h2_container'>
                <h2>
                    Благодарим за проявленный интерес
                    <br>к франшизе антикафе от «12 комнат».
                    <br>Чтобы посмотреть выбранную лекцию
                    <br>перейдите по ссылке
                </h2>
            </div>
            <div class='h4_container'>
                <h4>
                    Приглашаем послушать лекции
                    <br>о формате антикафе
                </h4>
            </div>
            <a class='youtube' href='".$data['link']."' target='_blank' rel='nofollow'>youtube</a>
            ";
            break;
        }
        default:
        {
            $body .= "
            <div class='h2_container'>
                <h2>
                    Благодарим за проявленный интерес
                    <br>к франшизе антикафе от «12 комнат».
                    <br>В ближайшее время с вами свяжется
                    <br>менеджер и направит коммерческое
                    <br>предложение на указанный адрес
                    <br>электронной почты.
                </h2>
            </div>
            <div class='h4_container'>
                <h4>
                    Приглашаем послушать лекции
                    <br>о формате антикафе
                </h4>
            </div>
            <a class='youtube' href='http://youtube.com/?gl=RU&hl=ru' target='_blank' rel='nofollow'>youtube</a>
            ";
        }
    }
    $body .= "



            </div><!-- section_content -->
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