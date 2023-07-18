<?php

trait AgeGroup{
    protected $minAge;
    protected $maxAge;

    public function getMinAge(){
        return $this->minAge;
    }

    public function getMaxAge(){
        return $this->maxAge;
    }

    public function getAgeInterval(){
        return $this->minAge . '-' . $this->maxAge ;
    }
}