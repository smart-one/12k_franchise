<?php

class DataBase
{
    public $db_name = "opttorgkru_12kfr";

    protected $db = null;

    private $host = "localhost";
    private $user = "opttorgkru_12kfr";
    private $password = "12kfr_2016";


    public function DBConnect()
    {
        if(!$this->db)
        {
            $this->db = mysqli_connect($this->host, $this->user, $this->password);
            mysqli_set_charset($this->db,"utf8");
        }

        return $this->db;
    }
}