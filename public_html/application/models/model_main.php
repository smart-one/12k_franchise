<?php

class Model_main extends Model
{
    public function get_data()
    {
        require_once("orm/db.php");
        $db = new DataBase;

        require_once("orm/webinar.php");
        $webinarList = new WebinarList( $db );

        require_once("orm/lecture.php");
        $lectureList = new LectureList( $db );

        $out = array();

        $out['webinar'] = $webinarList->getList();
        $out['lecture'] = $lectureList->getList();

        return $out;
    }
}