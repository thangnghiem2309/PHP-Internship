<?php
    interface ElectronicDeviceInterface
    {
        public function turnOn();
        public function turnOff();
        public function getPowerUsage();
    }
?>