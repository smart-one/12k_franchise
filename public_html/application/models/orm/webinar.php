<?php

class WebinarList
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
            `".$this->DB->db_name."`.`webinar`
        order by `date`
        ";
        $res = $this->DB->DBConnect()->query( $sql );
        if( $res->num_rows > 0 )
        {
            while( $row = $res->fetch_assoc() )
            {
                array_push( $this->list, new Webinar( $row['id'], $this->DB ) );
            }
        }
    }

    private function monthToStr( $month )
    {
        switch( $month )
        {
            case 1:
            {
                return "января";
                break;
            }
            case 2:
            {
                return "февраля";
                break;
            }
            case 3:
            {
                return "марта";
                break;
            }
            case 4:
            {
                return "апреля";
                break;
            }
            case 5:
            {
                return "мая";
                break;
            }
            case 6:
            {
                return "июня";
                break;
            }
            case 7:
            {
                return "июля";
                break;
            }
            case 8:
            {
                return "августа";
                break;
            }
            case 9:
            {
                return "сентября";
                break;
            }
            case 10:
            {
                return "октября";
                break;
            }
            case 11:
            {
                return "ноября";
                break;
            }
            case 12:
            {
                return "декабря";
                break;
            }
        }

        return "";
    }

    private function convertDate( $timestamp )
    {
        $day = date( "d", $timestamp );
        $month = date( "m", $timestamp );
        $year = date( "Y", $timestamp );

        $hour = date("H", $timestamp);
        $minutes = date("i", $timestamp);

        $dateStr = "
        ".$day." ".$this->monthToStr( $month )."
        <br>".$year." года
        <br>".$hour."-".$minutes."
        ";

        return $dateStr;
    }

    public function getList()
    {
        $out = array();

        foreach( $this->list as $k => $webinar )
        {
            array_push( $out, array(
                    'id' => $webinar->getEntityId(),
                    'date' => $this->convertDate( $webinar->getDate() )
                )
            );
        }

        return $out;
    }
}

class Webinar
{
    private $id;
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
            `".$this->DB->db_name."`.`webinar`
        where
            `id` = '".$this->id."'
        limit 1
        ";
        $res = $this->DB->DBConnect()->query( $sql );
        if( $res->num_rows > 0 )
        {
            $row = $res->fetch_assoc();

            $this->date = $row['date'];
        }
    }

    public function getEntityId()
    {
        return $this->id;
    }
    public function getDate()
    {
        return $this->date;
    }
}