<?php
    class Logger
    {
        private $logs=array(); // Массив логов.
        
        private $textLog; // Сообщение в логе.
        private $dateLog; // Время/Дата лога.
		private $countogs = 0; // Количество строк логов.

        public function __construct($text)
		{
            $this->textLog = $text;
            $this->dateLog = date('Y-m-d G:i:s');
        }

        public function showText()
		{
            return $this->textLog;
        }
        
        public function showDate()
		{
            return $this->dateLog;
        }
        
        public function adLog($tableName)
		{            
            if(mysql_query("INSERT INTO ".$tableName." (Text,Date) VALUES('".$this->textLog."','".$this->dateLog."')")){            
                return 'Сохранение прошло успешно.<br>';
            } else {
                return 'Не сохранилось.<br>';
            }
        }
        
        public function checkLogs($tableName)
		{
            $result = mysql_query("SELECT * FROM ".$tableName);
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
                $this->logs[$this->countogs] = "[".$row['Date']."] ".$row['Text']."<br>";
				$this->countogs++;
            }
            echo 'Элементов в массиве: '.count($this->logs).'<br>';
            mysql_free_result($result);
        }
        
        public function showLogs()
		{    
            for ($i = 0; $i <= count($this->logs); $i++) {
                echo $this->logs[$i];
            }
        }
    }    
?>