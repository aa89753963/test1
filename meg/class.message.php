<?php 
    class Message
    {
        private $time;
        private $summary;
        private $name;

        public function setTime()
        {
            $this->time = time();
        }
        public function setSummary($summary)
        {
            $this->summary = $summary;
        }
        public function setName($name)
        {
            $this->name = $name;
        }
        public function add()
        {
            
        }
    }