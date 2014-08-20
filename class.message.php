<?php
    class Message
    {
        private $time;
        private $subject;
        private $comment;
        private $userid;

        public function setTime()
        {
            $this->time = time();
        }

        public function setSubject($subject)
        {
            $this->subject = $subject;
        }

        public function setComment()
        {

        }

        public function setUserId()
        {

        }

    }

?>