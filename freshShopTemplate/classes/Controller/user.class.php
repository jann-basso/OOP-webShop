<?php
namespace App\Controller;
use App\Model\Model;

class User extends Model {
    protected $username;
    protected $password;
    protected $mobile_number;

    public function __construct($username, $password, $mobile_number) {
        $this->username = $username;
        $this->password = $password;
        $this->mobile_number = $mobile_number;
    }

    //create user
    public function createUser() {
        $this->setUser($this->username, $this->password, $this->mobile_number, '');
    }

    //start session
    public function setUserSession() {
        $match = $this->getUser($this->username, $this->password);
        if ($match) {
            $_SESSION['user_id'] = $match[0]['user_id'];
            $_SESSION['username'] = $match[0]['username'];
            $_SESSION['password'] = $match[0]['password']; 
            $_SESSION['mobile_number'] = $match[0]['mobile_number'];
            $_SESSION['email_newsletter'] = $match[0]['email_newsletter'];
        } 
    }

     //update user profile
     public function updateUserProfile() {
        $this->updateUser($this->username, $this->password, $this->mobile_number);
    }
}