<?php
namespace App\Controller;
use App\Model\Model;

class Newsletter extends Model {
    public function submitNewsletter($id_user, $email_newsletter) {
        $this->setNewsletter($id_user, $email_newsletter);
    }

    public function updateUserNewsletter($user_id, $updateNewsletter) {
        $this->updateNewsletter($user_id, $updateNewsletter);
    }
}