<?php 
    class Db
    {
        private $link;
        public $summary;
        public $time;
        public $name;

        function __construct()
        {
            $this->link = mysql_connect('localhost', 'root', 'root');
            mysql_query('set names utf8');
            mysql_select_db('test');
        }
        public function setTime()
        {
            $this->time = time();
        }
        public function insert($name, $summary, $time)
        {
            $sql = "INSERT INTO `test`.`comment` ( `title`, `summary`, `time`) VALUES ('$this->name', '$this->summary', $this->time);";
            mysql_query($sql);
        }
    }