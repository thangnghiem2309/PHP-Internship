<?php
    class animal{
        public $ten;
        public $mausac;
        public function __construct($ten, $mausac)
        {
            $this->ten = $ten;
            $this->mausac = $mausac;
        }
        public function tiengkeu()
        {
            echo "$this->ten đang kêu";  
        }
    }
?>