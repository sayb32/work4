<?php
namespace Controller\FrontController;

interface FrontControllerInterface
{
    public function setHandler($handler);
    public function setAction($action);
    public function setParams(array $params);
    public function run();
}