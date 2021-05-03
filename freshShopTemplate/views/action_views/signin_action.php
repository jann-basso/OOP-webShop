<?php
if(isset($_POST['signin'])) {
    $checkError = $signinForm->validateForm();
    if($checkError) {
        echo "Please fill in all the fields.";
    } else {
        $signinForm->setUserSession();
        echo("<script>location.href = 'index.php';</script>");
    }
}