<?php

function compilePage( $data = null )
{
    $head = "
    <link rel='stylesheet' type='text/css' href='/css/admin_style.css'>
    <script type='text/javascript'>
        $(document).ready(function()
        {
            $('.delete_btn').click(function(e)
            {
                e.preventDefault();
                e.stopPropagation();

                if( confirm('Действительно удалить?') )
                {
                    window.location = $(this).attr('href');
                }
            });
        });
    </script>
    ";
    $header = "";
    $body = "
    <div class='page_container'>
        <div class='page_wrapper'>
            <ul class='main_menu'>
                <li>
                    <a href='/admin/'>Заказы</a>
                </li>
                <li>
                    <a href='/admin/webinar'>Вебинары</a>
                </li>
                <li>
                    <a class='active' href='/admin/lecture'>Лекции</a>
                </li>
                <li>
                    <a href='/admin/logout'>Выйти</a>
                </li>
            </ul>

            <div class='add_form'>
                <form action='/admin/lecture' method='post'>
                    <label>Чтобы добавить лекцию введите её тему</label>
                    <input type='text' name='add_lecture' value=''>
                    <label>и ссылку на видео</label>
                    <input type='text' name='add_link' value=''>
                    <input type='submit' value='добавить'>
                </form>
            </div>

            <table>
                <tr>
                    <td>Идентификатор</td>
                    <td>Тема лекции</td>
                    <td>Ссылка</td>
                    <td>Удалить</td>
                </tr>
    ";
    foreach( $data['elements'] as $k => $value )
    {
        $body .= "
        <tr>
            <td>".$value['id']."</td>
            <td>".$value['name']."</td>
            <td>".$value['link']."</td>
            <td><a class='delete_btn' href='/admin/lecture/?id=".$value['id']."'>Удалить</a></td>
        </tr>
        ";
    }
    $body .= "
            </table>
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