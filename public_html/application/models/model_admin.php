<?php

class Model_admin extends Model
{
    public function checkLoginPassword( $login, $password )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        $login = mysqli_real_escape_string( $db->DBConnect(), $login );
        $password = mysqli_real_escape_string( $db->DBConnect(), $password );

        $sql = "
        select
            `id`
        from
            `".$db->db_name."`.`user`
        where
            `login` = '".$login."'
        and
            `password` = '".md5($password)."'
        limit 1
        ";
        $res = $db->DBConnect()->query( $sql );
        if( $res->num_rows > 0 )
        {
            $row = $res->fetch_assoc();
            if( $row )
            {
                return true;
            }
        }

        return false;
    }

    public function getOrderList()
    {
        require_once("orm/db.php");
        $db = new DataBase;

        require_once("orm/order.php");
        $orderList = new OrderList( $db );

        $out = array();

        $out['elements'] = $orderList->getList();

        return $out;
    }

    public function deleteOrder( $id )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        $sql = "
        delete from
            `".$db->db_name."`.`order`
        where
            `id` = '".$id."'
        ";
        $res = $db->DBConnect()->query( $sql );
    }

    public function deleteWebinar( $id )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        $sql = "
        delete from
            `".$db->db_name."`.`webinar`
        where
            `id` = '".$id."'
        ";
        $res = $db->DBConnect()->query( $sql );
    }

    public function addWebinar( $dateStr )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        $date = strtotime( $dateStr );

        $sql = "
        insert into
            `".$db->db_name."`.`webinar`
        ( `date` )
        value
        ( '".$date."')
        ";
        $res = $db->DBConnect()->query( $sql );
    }


    public function getWebinarList()
    {
        require_once("orm/db.php");
        $db = new DataBase;

        require_once("orm/webinar.php");
        $webinarList = new WebinarList( $db );

        $out = array();

        $out['elements'] = $webinarList->getList();

        return $out;
    }


    public function deleteLecture( $id )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        $sql = "
        delete from
            `".$db->db_name."`.`lecture`
        where
            `id` = '".$id."'
        ";
        $res = $db->DBConnect()->query( $sql );
    }
    public function addLecture( $name, $link )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        $sql = "
        insert into
            `".$db->db_name."`.`lecture`
        (
            `name`,
            `date`,
            `link`
        )
        values
        (
            '".$name."',
            '".time()."',
            '".$link."'
        )
        ";
        $res = $db->DBConnect()->query( $sql );
    }

    public function getLectureList()
    {
        require_once("orm/db.php");
        $db = new DataBase;

        require_once("orm/lecture.php");
        $lectureList = new LectureList( $db );

        $out = array();

        $out['elements'] = $lectureList->getList();

        return $out;
    }
}