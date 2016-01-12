<?php

class Controller_form extends Controller
{
    function __construct()
    {
        $this->model = new Model_form();
    }

    function action_index()
    {
        $redirect = $_POST['redirect'];
        $type = intval( $_POST['type'] );
        $name = $_POST['customer_name'];
        $phone = $_POST['customer_phone'];
        $email = $_POST['customer_email'];

        if(
            !isset( $type ) ||
            empty( $type ) ||
            !isset( $name ) ||
            empty( $name ) ||
            !isset( $phone ) ||
            empty( $phone ) ||
            !isset( $email ) ||
            empty( $email )
        )
        {
            $_SESSION['error'] = "Вы заполнили не все поля, обязательные для заполнения.";

            header("location: /".$redirect);
            exit;
        }

        switch( $type )
        {
            case 1:
            {
                if( !$this->model->AddCommercialOrder( $name, $phone, $email) )
                {
                    $_SESSION['error'] = "Произошла неизвестная ошибка. Попробуйте повторить запрос позже.";

                    header("location: /".$redirect);
                    exit;
                }

                //$_SESSION['error'] = "Ваш запрос успешно обработан.";
                header("location: /thanks/?text=1");
                exit;
                break;
            }
            case 2:
            {
                if( !$this->model->AddPlanOrder( $name, $phone, $email) )
                {
                    $_SESSION['error'] = "Произошла неизвестная ошибка. Попробуйте повторить запрос позже.";

                    header("location: /".$redirect);
                    exit;
                }

                //$_SESSION['error'] = "Ваш запрос успешно обработан.";
                header("location: /thanks/?text=2");
                exit;
                break;
            }
            case 3:
            {
                $webinar = $_POST['webinar'];

                if(
                    !isset( $webinar ) ||
                    empty( $webinar )
                )
                {
                    $_SESSION['error'] = "Вы не выбрали дату вебинара.";

                    header("location: /".$redirect);
                    exit;
                }

                if( !$this->model->AddWebinarOrder( $name, $phone, $email, $webinar ) )
                {
                    $_SESSION['error'] = "Произошла неизвестная ошибка. Попробуйте повторить запрос позже.";

                    header("location: /".$redirect);
                    exit;
                }

                //$_SESSION['error'] = "Ваш запрос успешно обработан.";
                header("location: /thanks/?text=3");
                exit;
                break;
            }
            case 4:
            {
                $lecture = $_POST['lecture'];

                if(
                    !isset( $lecture ) ||
                    empty( $lecture )
                )
                {
                    $_SESSION['error'] = "Вы не выбрали тему лекции.";

                    header("location: /".$redirect);
                    exit;
                }

                if( !$this->model->AddLectureOrder( $name, $phone, $email, $lecture ) )
                {
                    $_SESSION['error'] = "Произошла неизвестная ошибка. Попробуйте повторить запрос позже.";

                    header("location: /".$redirect);
                    exit;
                }

                //$_SESSION['error'] = "Ваш запрос успешно обработан.";
                header("location: /thanks/?text=4&id=".$lecture);
                exit;
                break;
            }
            case 5:
            {
                if( !$this->model->AddCallOrder( $name, $phone, $email) )
                {
                    $_SESSION['error'] = "Произошла неизвестная ошибка. Попробуйте повторить запрос позже.";

                    header("location: /".$redirect);
                    exit;
                }

                //$_SESSION['error'] = "Ваш запрос успешно обработан.";
                header("location: /thanks/?text=5");
                exit;
                break;
            }
        }

    }
}