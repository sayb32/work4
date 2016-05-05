<?php
namespace Model\Repository;

use Model\Entity\User as User;

class UserRepository {
public function __construct() {
    if (file_exists(DB_PATH . DB_NAME) === false ) {
        $admin = new User( 
            'admin',
            'admin',
            'Sergiu',
            'Rus',
            'rus.sergiu.adrian@gmail.com'
        ); 
        $admin->setAdminRole('admin');
        $admin = serialize($admin);
        $adminArray[] = $admin;
        file_put_contents(DB_PATH . DB_NAME , json_encode($adminArray, true));
    } 
}

public function fetchDatabase() {
    return json_decode($this->readDatabase(), true);
}

public function readDatabase() {
    return file_get_contents(DB_PATH . DB_NAME);
}

public function addUser($newUser) {
    $users = $this->fetchDatabase();
    array_push($users, serialize($newUser));
    file_put_contents(DB_PATH . DB_NAME, json_encode($users, true));
}
/**
 * Unserialize the serialized objects (users)
 * 
 * @return array of Users as Objects
 */
public function getUsers() {
    $usersFromDb = array(); 
    $dataFromDb = $this->fetchDatabase();
    foreach($dataFromDb as $serUser) {
        array_push($usersFromDb, unserialize($serUser));
    }
    return $usersFromDb;
}
/**
 * 
 * @param type $userInBuffer
 * @return boolean true if found
 */
public function searchByUsernameAndPwd($userInBuffer) {
    $users = $this->getUsers(); 
    foreach($users as $user) {
        if ( strcmp($user->getUsername(), $userInBuffer->getUsername()) === 0) {
            if ( strcmp($user->getPassword(), $userInBuffer->getPassword()) === 0) {
            return $user;
            }
        }
    }
    return NULL;
}
}