<?php
namespace App\Controller;

class IssetSession {
    public function issetSession($redirection) {
        if(!isset($_SESSION['user_id']) AND !isset($_SESSION['username']) AND !isset($_SESSION['password'])) {
            echo $redirection;
        }
    }
}