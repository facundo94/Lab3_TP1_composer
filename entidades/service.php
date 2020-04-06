<?php
    require_once dirname(dirname(__FILE__)) . '\vendor\autoload.php';
    use NNV\RestCountries;
    class Service
    {
        protected $restCountries;
        private static $callCount = 0;

        public function __construct(){
            $this->restCountries = new RestCountries;
        }

        public static function countServiceCalls(){
            self::$callCount++;
        }

        public static function getCallCount(){
            return self::$callCount;
        }
    }
?>