<?php
/**
 * Created by PhpStorm.
 * User: lulu
 * Date: 2016-08-21
 * Time: 01:26
 */

class DB  {

    private $host ='localhost';
    private $username ='root';
    private $password ='';
    private $database ='digikan';
    private $db;

    public function __construct($host = null, $username = null, $password = null, $database = null){
        if($host != null){
            $this->host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        try{
            $this->db = new PDO('mysql:host='.$this->host.':dbname='.$this->database, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING

            ));
        }catch(PDOException $e){
            die('<h1>Impossible de se connecter a la base de donnee</h1>');
        }
    }

    public function query($sql){
        $req =$this->db->prepare($sql);
        $req->execute();
        var_dump($req->fetchAll(PDO::FETCH_OBJ));
    }
}
