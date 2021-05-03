<?php $title = "Login and Security"; ?>

<?php ob_start(); ?>
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="contact-form-left">
                    <h2>LOGIN AND SECURITY</h2>
                    <p class="lead mb-4">Update your personal information below.</p>
                    <form action="index.php?action=loginsecurityaction" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="upd-username">Update Username</label>
                                    <input type="text" name="upd-username" value="<?= $_SESSION['username']; ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="upd-password">Update Password </label>
                                    <input type="password" name="upd-password" value="<?= $_SESSION['password']; ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="upd-mobilenumber">Update Mobile Number</label>
                                    <input type="text" name="upd-mobilenumber" value="<?= $_SESSION['mobile_number']; ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit-button">
                                    <button type='submit' name='updateprofile' class="btn hvr-hover">Update Profile</button>
                                    <div class="h3 text-center hidden"></div>
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