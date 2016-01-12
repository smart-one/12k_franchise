<?php

class Controller_admin extends Controller
{
    function __construct()
    {
        $this->model = new Model_admin();
        $this->view = new View();
    }

    function action_login()
    {
        if(
            isset( $_SESSION['auth'] ) &&
            !empty( $_SESSION['auth'] ) &&
            $_SESSION['auth'] == 'admin'
        )
        {
            header("location: /admin/");
            exit;
        }

        if(
            isset( $_POST['login'] ) &&
            isset( $_POST['password'] )
        )
        {
            $login = $_POST['login'];
            $password = $_POST['password'];

            if( $this->model->checkLoginPassword( $login, $password ) )
            {
                $_SESSION['auth'] = "admin";

                header("location: /admin/");
                exit;
            }
            else
            {
                $_SESSION['error'] = "Неверный логин и/или пароль.";

                header("location: /admin/login/");
                exit;
            }
        }

        $this->view->generate('admin_login_view.php', 'template_view.php');
    }

    function action_logout()
    {
        unset( $_SESSION['auth'] );

        header("location: /admin/login/");
        exit;
    }

    function action_index()
    {
        if(
            !isset( $_SESSION['auth'] ) ||
            empty( $_SESSION['auth'] )
        )
        {
            header("location: /admin/login");
            exit;
        }

        $data = $this->model->getOrderList();
        $this->view->generate('admin_view.php', 'template_view.php', $data);
    }

    function action_delete()
    {
        if(
            !isset( $_SESSION['auth'] ) ||
            empty( $_SESSION['auth'] )
        )
        {
            header("location: /admin/login");
            exit;
        }

        $id = intval( $_GET['id'] );

        $this->model->deleteOrder( $id );

        header("location: /admin/");
        exit;
    }

    function action_webinar()
    {
        if(
            !isset( $_SESSION['auth'] ) ||
            empty( $_SESSION['auth'] )
        )
        {
            header("location: /admin/login");
            exit;
        }

        if(
            isset( $_GET['id'] ) &&
            !empty( $_GET['id'] )
        )
        {
            $id = intval( $_GET['id'] );
            $this->model->deleteWebinar( $id );

            header("location: /admin/webinar/");
            exit;
        }

        if(
            isset( $_POST['add_webinar'] ) &&
            !empty( $_POST['add_webinar'] )
        )
        {
            $this->model->addWebinar( $_POST['add_webinar'] );

            header("location: /admin/webinar/");
            exit;
        }

        $data = $this->model->getWebinarList();
        $this->view->generate('admin_webinar_view.php', 'template_view.php', $data);
    }

    function action_lecture()
    {
        if(
            !isset( $_SESSION['auth'] ) ||
            empty( $_SESSION['auth'] )
        )
        {
            header("location: /admin/login");
            exit;
        }

        if(
            isset( $_GET['id'] ) &&
            !empty( $_GET['id'] )
        )
        {
            $id = intval( $_GET['id'] );
            $this->model->deleteLecture( $id );

            header("location: /admin/lecture/");
            exit;
        }

        if(
            isset( $_POST['add_lecture'] ) &&
            !empty( $_POST['add_lecture'] )
        )
        {
            $this->model->addLecture( $_POST['add_lecture'], $_POST['add_link'] );

            header("location: /admin/lecture/");
            exit;
        }

        $data = $this->model->getLectureList();
        $this->view->generate('admin_lecture_view.php', 'template_view.php', $data);
    }
}