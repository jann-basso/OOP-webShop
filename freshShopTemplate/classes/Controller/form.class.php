<?php 
namespace App\Controller;

class Form extends User {
    //private $errors;

    public function input($inputType, $inputName, $text, $classinfo) {
        return
        "<label for='{$inputName}'>{$text}</label><br>
        <input type='{$inputType}' name='{$inputName}' class='{$classinfo}'><br>";
    }

    public function submit($inputType, $inputName, $text, $classinfo) {
        return
        "<button type='{$inputType}' name='{$inputName}' class='{$classinfo}'>{$text}</button>";
    }

    public function validateForm() {
        return $this->checkifEmpty();
    }

    private function checkifEmpty() {
        if(empty($this->username) OR empty($this->password) OR empty($this->mobile_number)) {
            $error = true;
        } else {
            $error = false;
        }
        //return $this->errors = $error;
        return $error;
    }
}