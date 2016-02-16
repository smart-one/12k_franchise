<?php

class Model_form extends Model
{
    public function AddCommercialOrder( $name, $phone, $email )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        require_once("orm/order.php");
        $order = new Order( 0, $db );

        $order->setType(1);
        $order->setName( $name );
        $order->setPhone( $phone );
        $order->setEmail( $email );

        $messageText = "
        Заказ на отправку коммерческого предложения.
        Имя: ".$name."\n
        Телефон: ".$phone."\n
        Email: ".$email."\n
        ";

        $saveRes = $order->Save();
        if( $saveRes )
        {
            $this->sendEmail( $order->getEntityId(), $messageText);
        }

        return $saveRes;
    }

    public function AddPlanOrder( $name, $phone, $email )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        require_once("orm/order.php");
        $order = new Order( 0, $db );

        $order->setType(2);
        $order->setName( $name );
        $order->setPhone( $phone );
        $order->setEmail( $email );

        $messageText = "
        Заказ на отправку бизнес-плана.
        Имя: ".$name."\n
        Телефон: ".$phone."\n
        Email: ".$email."\n
        ";

        $saveRes = $order->Save();
        if( $saveRes )
        {
            $this->sendEmail( $order->getEntityId(), $messageText);
        }

        return $saveRes;
    }

    public function AddCallOrder( $name, $phone, $email )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        require_once("orm/order.php");
        $order = new Order( 0, $db );

        $order->setType(5);
        $order->setName( $name );
        $order->setPhone( $phone );
        $order->setEmail( $email );

        $messageText = "
        Заказ на обратный звонок.
        Имя: ".$name."\n
        Телефон: ".$phone."\n
        Email: ".$email."\n
        ";

        $saveRes = $order->Save();
        if( $saveRes )
        {
            $this->sendEmail( $order->getEntityId(), $messageText);
        }

        return $saveRes;
    }

    public function AddWebinarOrder( $name, $phone, $email, $webinar )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        require_once("orm/order.php");
        $order = new Order( 0, $db );

        $order->setType(3);
        $order->setName( $name );
        $order->setPhone( $phone );
        $order->setEmail( $email );
        $order->setWebinarId( $webinar );


        require_once("orm/webinar.php");
        $webinarObject = new Webinar( $webinar, $db );

        $messageText = "
        Заказ на вебинар (".date("Y-m-d H:i", $webinarObject->getDate()).").
        Имя: ".$name."\n
        Телефон: ".$phone."\n
        Email: ".$email."\n
        ";

        $saveRes = $order->Save();
        if( $saveRes )
        {
            $this->sendEmail( $order->getEntityId(), $messageText);
        }

        return $saveRes;
    }

    public function AddLectureOrder( $name, $phone, $email, $lecture )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        require_once("orm/order.php");
        $order = new Order( 0, $db );

        $order->setType(4);
        $order->setName( $name );
        $order->setPhone( $phone );
        $order->setEmail( $email );
        $order->setLectureId( $lecture );

        require_once("orm/lecture.php");
        $lectureObject = new Lecture( $lecture, $db );

        $messageText = "
        Заказ на лекцию (".$lectureObject->getName().").
        Имя: ".$name."\n
        Телефон: ".$phone."\n
        Email: ".$email."\n
        ";

        $saveRes = $order->Save();
        if( $saveRes )
        {
            $this->sendEmail( $order->getEntityId(), $messageText);
        }

        return $saveRes;
    }

    private function sendEmail( $orderId, $messageText )
    {
        $email = "manager@1-fk.ru";
        $from = "info@12komnat.com";

        $subject = '=?UTF-8?B?' . base64_encode("заказ №".$orderId) . '?=';

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";
        $headers .= "From: ".$from."\r\n";

        mail( $email, $subject, $messageText, $headers);
    }
}