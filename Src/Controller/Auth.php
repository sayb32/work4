<?php
namespace Controller;

use Model\Entity\User as User;
use Model\Repository\UserRepository as UserRepository;
    
class Auth{
private static function accountExists($userInBuffer) {
    $userRepository = new UserRepository();
    $userFound = $userRepository->searchByUsernameAndPwd($userInBuffer);
    if ($userFound !== NULL) {
        return $userFound;
    }    
    return NULL;
}
public function login() {
    include HEADER_PATH;
    include LOGIN_PATH; 
    include FOOTER_PATH;
}

public function doLogin() {
    $userInBuffer = new User(
        $_POST['username'],
        $_POST['passField'],
        "",
        "",
        "");
    $userFound = self::accountExists($userInBuffer);
    if ( $userFound !== NULL ) {
        if (strcmp($userFound->getUsername(), 'admin') === 0) {
            include VIEW_ADMIN_PATH;
        } else {
            include VIEW_USER_PATH;
        }
    } else {
        echo "Not welcome back!";
    }
}

public function register() {
    include HEADER_PATH;
    include REGISTER_PATH; 
    include FOOTER_PATH;
}

public function doRegister() {
    $user = new User( 
        $_POST['username'],
        $_POST['passField'],
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email']      
    ); 
   $userRepository = new UserRepository();
   $userRepository->addUser($user);
}

public function forgot() {
    echo "Too bad for you!!";
}

}