<?php
use App\Controller\Form;
$title = "Register"; ?>

<?php ob_start(); ?>
<div class="contact-box-main">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12 col-sm-12">
                <div class="contact-form-left">
                    <h2>REGISTER</h2>
                    <form action="index.php?action=registeraction" method="POST" >
                    <?php $registerForm = new Form($_POST['new-username'], $_POST['new-password'], $_POST['new-mobile']); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo $registerForm->input('text', 'new-username', 'Define Username', 'form-control'); ?>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo $registerForm->input('password', 'new-password', 'Define Password', 'form-control'); ?>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo $registerForm->input('text', 'new-mobile', 'Mobile Number','form-control'); ?>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit-button text-center">
                                    <?php echo $registerForm->submit('submit', 'register', 'Register', 'btn hvr-hover'); ?>
                                    <div id="msgRegister" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div>
                            <?= $registerForm->validateForm(); ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
