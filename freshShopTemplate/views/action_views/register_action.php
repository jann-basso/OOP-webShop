<?php
if (isset($_POST['register'])) {
    $checkError = $registerForm->validateForm();
    if($checkError) {
        echo "Please fill in all the fields.";
    } else {
        $registerForm->createUser();
        echo("<script>location.href = 'index.php?action=signin';</script>");
    }
} 
