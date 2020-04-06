<?php
    include_once './entidades/service.php';
    class capitalService extends service implements iService{
        public function get($name){
            service::countServiceCalls();
            return $this->restCountries->byCapitalCity($name);
        }
    }
?>