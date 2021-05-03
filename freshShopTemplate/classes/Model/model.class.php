<?php
namespace App\Model;

class Model extends Database {
    /****************************************************
                        database - users
    *****************************************************/
    // used in class User --> createUser()
    protected function setUser($username, $password, $mobile_number, $email_newsletter) {
        $sql = "INSERT INTO users(username, password, mobile_number, email_newsletter)
                VALUES(:username, :password, :mobile_number, :email_newsletter)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(
            'username'=>$username,
            'password'=>$password,
            'mobile_number'=>$mobile_number,
            'email_newsletter'=>$email_newsletter
        ));
    }

    // used in class User --> checkUser()
    protected function getUser($username, $password) {
        $sql = "SELECT * FROM users WHERE username=? and password=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($username, $password));

       $results = $stmt->fetchAll();
       return $results;
    }

    // used in class User --> updateUser()
    protected function updateUser($updatedUsername, $updatedPassword, $updatedMobileNum) {
        $sql = "UPDATE users SET username=:username, password=:password, mobile_number=:mobile_number WHERE user_id=:user_id ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(
            'username'=>$updatedUsername,
            'password'=>$updatedPassword,
            'mobile_number'=>$updatedMobileNum,
            'user_id'=>$_SESSION['user_id']
        ));
    }

    protected function updateNewsletter($user_id, $updateNewsletter) {
        $sql = "UPDATE users SET email_newsletter=:email_newsletter WHERE user_id=:user_id ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(
            'email_newsletter'=>$updateNewsletter,
            'user_id'=>$user_id
        ));
    }
    

    /****************************************************
                    database - newsletter
    *****************************************************/
    // used in class Newsletter --> submitNewsletter()
    protected function setNewsletter($id_user, $email_newsletter) {
        $sql = "INSERT INTO newsletter(id_user, email_newsletter)
                VALUES(:id_user, :email_newsletter)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(
            'id_user'=>$id_user,
            'email_newsletter'=>$email_newsletter
        ));
    } 

    /****************************************************
                    database - products
    *****************************************************/
    protected function getProducts() {
        $sql = "SELECT * FROM products";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

    protected function rowCountProducts() {
        $sql = "SELECT COUNT(*) FROM products";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

    protected function getSpecificProduct($id) {
        $sql = "SELECT * FROM products WHERE product_id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($id));
        return $stmt;
    }

}


