<?php

class UI
{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $mysqli;


    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'roo';
        $this->pass = '';
        $this->db = 'login_register';
        $this->mysqli =  new mysqli($this->host,$this->user,$this->pass,$this->db) or die($this->mysqli->error);

    }

    //ne radi
    public function login()
    {

    }
    //ne radi
    public function register()
    {

    }

}