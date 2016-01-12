<?php

function compilePage( $data = null )
{
    $head = "
    <style>
    div.container
    {
        display: table;
        background-color: transparent;
        width: 100%;
        height: 100%;
        position: relative;
        margin: 0;
        padding: 0;
    }
    div.container div.wrapper
    {
        display: table-cell;
        background-color: transparent;
        width: 100%;
        height: 100%;
        position: relative;
        margin: 0;
        padding: 0;

        vertical-align: middle;
        text-align: center;
    }
    div.container div.wrapper
    div.window
    {
        display: inline-block;
        background-color: #c4c4c4;
        width: 400px;
        height: auto;
        position: relative;
        margin: 0;
        padding: 0;

        box-sizing: border-box;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    </style>
    ";
    $header = "";
    $body = "
    <div class='container'>
        <div class='wrapper'>
            <div class='window'>
    ";
    if(
        isset($_SESSION['error']) &&
        !empty($_SESSION['error'])
    )
    {
        $body .= "<h3>".$_SESSION['error']."</h3>";

        unset( $_SESSION['error'] );
    }
    $body .= "
                <form action='/admin/login/' method='post'>
                    <h2>ADMINISTRATOR</h2>
                    <label>login:</label>
                    <input type='text' name='login' value=''>
                    <br><br>
                    <label>password:</label>
                    <input type='password' name='password' value=''>
                    <br><br>
                    <input type='submit' value='enter'>
                </form>
            </div>
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