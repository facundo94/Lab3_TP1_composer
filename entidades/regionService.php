<?php
    include_once './entidades/service.php';
    include_once './entidades/iService.php';
    class regionService extends service implements iService{
        public function get($name){
            service::countServiceCalls();
            return $this->restCountries->byRegion($name);
        }
    }
?>