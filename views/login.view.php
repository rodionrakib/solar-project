<div class="row">
    <div class="col-sm-5">
        <div class="well">
            <form action="" method="post">
                <fieldset>
                    <legend><i class="fa fa-lock"></i> Secure Sign in</legend>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-sign-in"></i> Sign in
                    </button>
                </fieldset>
            </form>
        </div>
    </div>
    <div class="col-sm-7">
    <?php echo $message ?>
    </div>
</div>