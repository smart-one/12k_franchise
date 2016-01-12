<?php

class OrderList
{
    private $list = array();

    protected $DB = null;

    function __construct( $db )
    {
        $this->DB = $db;

        $sql = "
        select
            `id`
        from
            `".$this->DB->db_name."`.`order`
        order by `date` DESC
        ";
        $res = $this->DB->DBConnect()->query( $sql );
        if( $res->num_rows > 0 )
        {
            while( $row = $res->fetch_assoc() )
            {
                array_push( $this->list, new Order( $row['id'], $this->DB ) );
            }
        }
    }

    public function getList()
    {
        $out = array();

        foreach( $this->list as $k => $order )
        {
            $type = $order->getType();
            $orderText = "";
            switch( $type )
            {
                case 1:
                {
                    $orderText = "Заказ на коммерческое предложение.";
                    break;
                }
                case 2:
                {
                    $orderText = "Заказ на бизнес-план.";
                    break;
                }
                case 3:
                {
                    require_once("webinar.php");
                    $webinar = new Webinar( $order->getWebinarId(), $this->DB );

                    $orderText = "Запись на вебинар (".date("Y-m-d H:i", $webinar->getDate()).")";
                    break;
                }
                case 4:
                {
                    require_once("lecture.php");
                    $lecture = new Lecture( $order->getLectureId(), $this->DB );

                    $orderText = "Запись на лекцию \"".$lecture->getName()."\"";
                    break;
                }
                case 5:
                {
                    $orderText = "Заказ на обратный звонок.";
                    break;
                }
            }

            array_push( $out, array(
                    'id' => $order->getEntityId(),
                    'date' => date("Y-m-d H:i:s", $order->getDate()),
                    'text' => $orderText,
                    'name' => $order->getName(),
                    'phone' => $order->getPhone(),
                    'email' => $order->getEmail()
                )
            );
        }

        return $out;
    }
}

class Order
{
    private $id;
    private $type;
    private $name;
    private $phone;
    private $email;
    private $lecture_id;
    private $webinar_id;
    private $date;

    protected $DB = null;

    function __construct( $id, $db )
    {
        $this->DB = $db;
        $this->id = $id;

        $sql = "
        select
            *
        from
            `".$this->DB->db_name."`.`order`
        where
            `id` = '".$this->id."'
        limit 1
        ";
        $res = $this->DB->DBConnect()->query( $sql );
        if( $res->num_rows > 0 )
        {
            $row = $res->fetch_assoc();

            $this->type = $row['type'];
            $this->name = $row['name'];
            $this->phone = $row['phone'];
            $this->email = $row['email'];
            $this->lecture_id = $row['lecture_id'];
            $this->webinar_id = $row['webinar_id'];
            $this->date = $row['date'];
        }
    }

    public function setType( $value )
    {
        $this->type = $value;
    }
    public function setName( $value )
    {
        $this->name = $value;
    }
    public function setPhone( $value )
    {
        $this->phone = $value;
    }
    public function setEmail( $value )
    {
        $this->email = $value;
    }
    public function setWebinarId( $value )
    {
        $this->webinar_id = $value;
    }
    public function setLectureId( $value )
    {
        $this->lecture_id = $value;
    }

    public function getEntityId()
    {
        if( $this->id == 0 )
        {
            return mysqli_insert_id( $this->DB->DBConnect() );
        }
        return $this->id;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getLectureId()
    {
        return $this->lecture_id;
    }
    public function getWebinarId()
    {
        return $this->webinar_id;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function Save()
    {
        //$lastId = mysqli_insert_id( $this->DB->DBConnect() );
//echo $lastId;exit;
        $sql = "
        insert into
            `".$this->DB->db_name."`.`order`
        (
            `id`,
            `type`,
            `name`,
            `phone`,
            `email`,
            `date`,
            `lecture_id`,
            `webinar_id`
        )
        values
        (
            '".$this->id."',
            '".$this->type."',
            '".$this->name."',
            '".$this->phone."',
            '".$this->email."',
            '".time()."',
            '".$this->lecture_id."',
            '".$this->webinar_id."'
        )
        on duplicate key update
            `type` = '".$this->type."',
            `name` = '".$this->name."',
            `phone` = '".$this->phone."',
            `email` = '".$this->email."',
            `lecture_id` = '".$this->lecture_id."',
            `webinar_id` = '".$this->webinar_id."'
        ";
        $res = $this->DB->DBConnect()->query( $sql );

        return $res;
    }
}