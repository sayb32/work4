<?php
include_once 'autoloader.php';
require_once 'config.php';

//use Controller\Page\Controller as Controller;
use Controller\FrontController\FrontController as FrontController;
use Controller\Auth as Auth;
use Model\Repository\UserRepository as UserRepository;

session_start();
//require "Src/Controller/Page/Controller.php";
//new Controller();
$auth = new Auth($userRepository);
$frCtrl = new FrontController();
$frCtrl->run();

 