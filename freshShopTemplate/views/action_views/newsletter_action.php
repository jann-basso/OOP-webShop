<?php
use App\Controller\Newsletter;
if (isset($_POST['submitnewsletter'])) {
    $new_newsletter = new Newsletter();
    if(isset($_SESSION['user_id'])) {
        $new_newsletter->submitNewsletter($_SESSION['user_id'], $_POST['email-newsletter']);
        $new_newsletter->updateUserNewsletter($_SESSION['user_id'], $_POST['email-newsletter']);
    } else {
        $new_newsletter->submitNewsletter('', $_POST['email-newsletter']);
    }
    header('location: index.php');
}
