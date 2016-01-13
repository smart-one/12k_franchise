<?php

class DataBase
{
    protected $db = null;
    protected $host;
    protected $user;
    protected $password;
    public $db_name;

    public function __construct()
    {
        $this->host = Config::get('db.host');
        $this->user = Config::get('db.user');
        $this->password = Config::get('db.password');
        $this->db_name = Config::get('db.name');
    }

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