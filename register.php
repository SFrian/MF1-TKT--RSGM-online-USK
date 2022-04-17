<section id="register-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <h1>User Authentication system.</h1>
                        <h3>Register</h3>
                        <br>
                            
                        <?php if(isset($result)) echo $result; ?>
                        <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
                    </div>
                    <div class="col-md-6 col-md-offset-3 text-center">

                        <form class="form-horizontal" action="" method="POST">
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input class="form-control" type="text" placeholder="Your email address" name="email">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input class="form-control" type="text" placeholder="username" name="username" >
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <input class="form-control" type="password" placeholder="password" name="password">
                                </div>
                            </div>
                            <div class="form-group col-md-12 button text-center">
                                <input name="registerBtn" type="submit" value="Register" class="btn btn-primary btn-lg">
                                    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php include_once'includes/footer.php'; ?>