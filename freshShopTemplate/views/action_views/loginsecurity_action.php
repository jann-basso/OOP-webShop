<?php
use App\Controller\User;
$updateProfile = new User($_POST['upd-username'], $_POST['upd-password'], $_POST['upd-mobilenumber']);
$updateProfile->updateUserProfile();
$updateProfile->setUserSession();
?>

<?php $title = "Login and Security - Updated"; ?>

<?php ob_start(); ?>
<div class="my-5 p-3 text-center">
    <?php echo "Thank you " . ucfirst($_SESSION['username']) . ",your was profile updated :)"; ?>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>