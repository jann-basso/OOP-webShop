<?php
use App\Controller\Form;
$title = "Sign In"; ?>

<?php ob_start(); ?>
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="contact-form-left">
                    <h2>SIGN IN</h2>
                    <form action="index.php?action=signinaction" method="POST">
                    <?php $signinForm = new Form($_POST['log-username'], $_POST['log-password'], 'x'); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo $signinForm->input('text', 'log-username', 'Username', 'form-control'); ?>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo $signinForm->input('password', 'log-password', 'Password', 'form-control'); ?>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit-button text-center">
                                    <?php echo $signinForm->submit('submit', 'signin', 'Sign In', 'btn hvr-hover'); ?>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
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
