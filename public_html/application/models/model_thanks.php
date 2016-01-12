<?php

class Model_thanks extends Model
{
    public function getLink( $id )
    {
        require_once("orm/db.php");
        $db = new DataBase;

        require_once("orm/lecture.php");
        $lecture = new Lecture( $id, $db );

        return $lecture->getLink();
    }
}