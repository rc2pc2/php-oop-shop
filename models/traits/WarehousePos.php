<?php

trait WarehousePos{
    public $laneNo;
    public $shelfNo;

    public function getPosition(){
        return "$this->laneNo, $this->shelfNo";
    }
}