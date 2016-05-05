<?php
// userul din Entity are acces la json
// 
// validUser(id, pw)

namespace Model\Entity;

class User implements JsonSerializable{
    /**
     * Create the Object User with relevant arguments
     * 
     * @param type $username
     * @param type $password
     * @param type $firstName
     * @param type $lastName
     * @param type $email
     * @param type $role
     */
    function __construct(
        $username,
        $password,
        $firstName,
        $lastName,
        $email,
        $role = 1      
    ) {
        $this->id = uniqid();
        $this->username = $username;
        $this->password = $this->encipher($password, HASH, true);
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->role = $role;
    }
    public function jsonSerialize() {
        return get_object_vars($this);
    }
    
    public function objectIntoJson() {
       return json_encode($this->jsonSerialize());
    }
    
    public function getId() {
        return $this->id;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getRole() {
        return $this->role;
    }
    public function setAdminRole($password) {
        if ( strcmp($password, $this->encipher(RANDOM_WORD, HASH, true)) === 0) {
            $this->role = 0;
        }
    }
    function encipher($src, $key, $is_encode)
{
    $key = strtoupper($key);
    $src = strtoupper($src);
    $dest = '';
 
    /* strip out non-letters */
    for($i = 0; $i <= strlen($src); $i++) {
        $char = substr($src, $i, 1);
        if(ctype_upper($char)) {
            $dest .= $char;
        }
    }
 
    for($i = 0; $i <= strlen($dest); $i++) {
        $char = substr($dest, $i, 1);
        if(!ctype_upper($char)) {
            continue;
        }
        $dest = substr_replace($dest,
            chr (
                ord('A') +
                ($is_encode
                   ? ord($char) - ord('A') + ord($key[$i % strlen($key)]) - ord('A')
                   : ord($char) - ord($key[$i % strlen($key)]) + 26
                ) % 26
            )
        , $i, 1);
    }
 
    return $dest;
}

    private $id;
    private $username;
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    private $role;
    
}
