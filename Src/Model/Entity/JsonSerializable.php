<?php
namespace Model\Entity;

interface JsonSerializable {
    public function jsonSerialize();
    
    public function objectIntoJson();
    
}