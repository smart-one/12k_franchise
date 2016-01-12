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
                    <a class='active' href='/admin/'>Заказы</a>
                </li>
                <li>
                    <a href='/admin/webinar'>Вебинары</a>
                </li>
                <li>
                    <a href='/admin/lecture'>Лекции</a>
                </li>
                <li>
                    <a href='/admin/logout'>Выйти</a>
                </li>
            </ul>

            <table>
                <tr>
                    <td>Идентификатор</td>
                    <td>Дата поступления</td>
                    <td>Имя</td>
                    <td>Телефон</td>
                    <td>Email</td>
                    <td>Описание заказа</td>
                    <td>Удалить</td>
                </tr>
    ";
    foreach( $data['elements'] as $k => $value )
    {
        $body .= "
        <tr>
            <td>".$value['id']."</td>
            <td>".$value['date']."</td>
            <td>".$value['name']."</td>
            <td>".$value['phone']."</td>
            <td>".$value['email']."</td>
            <td>".$value['text']."</td>
            <td><a class='delete_btn' href='/admin/delete/?id=".$value['id']."'>Удалить</a></td>
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