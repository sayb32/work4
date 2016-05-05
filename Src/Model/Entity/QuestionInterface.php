<?php
namespace Model\Entity;

interface QuestionInterface {

    public function getText();
    public function getAnswers();
    public function getRightAnswers();
    public function getType();
    public function getId();
}
