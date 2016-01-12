<?php

class LectureList
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
            `".$this->DB->db_name."`.`lecture`
        order by `date`
        ";
        $res = $this->DB->DBConnect()->query( $sql );
        if( $res->num_rows > 0 )
        {
            while( $row = $res->fetch_assoc() )
            {
                array_push( $this->list, new Lecture( $row['id'], $this->DB ) );
            }
        }
    }

    public function getList()
    {
        $out = array();

        foreach( $this->list as $k => $lecture )
        {
            array_push( $out, array(
                    'id' => $lecture->getEntityId(),
                    'name' => $lecture->getName(),
                    'link' => $lecture->getLink()
                )
            );
        }

        return $out;
    }
}

class Lecture
{
    private $id;
    private $name;
    private $date;
    private $link;

    protected $DB = null;

    function __construct( $id, $db )
    {
        $this->DB = $db;
        $this->id = $id;

        $sql = "
        select
            *
        from
            `".$this->DB->db_name."`.`lecture`
        where
            `id` = '".$this->id."'
        limit 1
        ";
        $res = $this->DB->DBConnect()->query( $sql );
        if( $res->num_rows > 0 )
        {
            $row = $res->fetch_assoc();

            $this->name = $row['name'];
            $this->date = $row['date'];
            $this->link = $row['link'];
        }
    }

    public function getEntityId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getLink()
    {
        return $this->link;
    }
}