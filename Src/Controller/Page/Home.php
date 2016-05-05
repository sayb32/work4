<?php
namespace Controller\Page;
use Model\Entity\User as User;

class Home {

    function __construct() {
        $user = new User("ss", "sergiu", "rus", "123", "sdjkasd@");
        include "Src/View/User/UserView.php";
    }   

}
