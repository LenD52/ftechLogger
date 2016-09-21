<?php
    class connectDB
    {
        private $dblocation = "localhost";   
        private $dbname = "logftech";   
        private $dbuser = "root";   
        private $dbpasswd = "";  
        private $db; 

        public function __construct(){
            $this->db = mysql_connect($this->dblocation, $this->dbuser, $this->dbpasswd);   
            if (!$this->db){   
                echo "К сожалению, не доступен сервер mySQL.";   
			    exit();   
            }   
            if (!mysql_select_db($this->dbname,$this->db)){   
                echo "К сожалению, не доступна база данных.";   
                exit();   
            }    
        }
    }
?>