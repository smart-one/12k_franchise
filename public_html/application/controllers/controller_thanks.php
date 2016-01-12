<?php

class Controller_thanks extends Controller
{
    function __construct()
    {
        $this->view = new View();
        $this->model = new Model_thanks();
    }

    function action_index()
    {
        $data['text'] = 1;
        if(
            isset( $_GET['text'] ) &&
            !empty( $_GET['text'] )
        )
        {
            $data['text'] = intval($_GET['text']);
        }

        if( $data['text'] == 4 )
        {
            $data['link'] = "http://youtube.com/?gl=RU&hl=ru";
            if(
                isset( $_GET['id'] ) &&
                !empty( $_GET['id'] )
            )
            {
                $data['link'] = $this->model->getLink( intval( $_GET['id'] ) );
            }

        }

        $this->view->generate('thanks_view.php', 'template_view.php', $data);
    }
}