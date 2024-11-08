<?php
    class accModel{
        public $conn;
        function __construct(){
            $this->conn=connect_db();
        }
        function checkAcc($user,$pass){
            // $pass=sha1($pass);
            $sql="SELECT * FROM acc where user='$user' and pass='$pass'";
            return $this->conn->query($sql)->rowCount();
        }
    }

?>