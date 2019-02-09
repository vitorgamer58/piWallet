<?php if (!defined("IN_WALLET")) { die("Auth Error"); } ?>
                <h1><?php echo $lang['PAGE_HEADER']; ?></h1>
                <?php
                if (!empty($error))
                {
                    echo "<p style='font-weight: bold; color: red;'>" . $error['message']; "</p>";
                }

?>
<div class="modal fade modal-mini modal-primary" id="captchaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header justify-content-center">
					<div class="modal-profile">
						<i class="now-ui-icons users_circle-08"></i>
					</div>
				</div>
				<div class="modal-body">
					<p>You need to solve captcha!</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#login"><?php echo $lang['FORM_LOGIN']; ?></a></li>
    <li><a data-toggle="tab" href="#register"><?php echo $lang['FORM_SIGNUP']; ?></a></li>
  </ul>
  <div class="tab-content">
    <div id="login" class="tab-pane fade in active">
                <p><?php echo $lang['FORM_LOGIN']; ?></p>
                <form action="index.php" autocomplete="off" method="POST" class="clearfix">
                    <input type="hidden" name="action" value="login" />
                    <div class="col-md-2"><input type="text" class="form-control" name="username" placeholder="<?php echo $lang['FORM_USER']; ?>"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="password" placeholder="<?php echo $lang['FORM_PASS']; ?>"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="auth" placeholder="<?php echo $lang['FORM_2FA']; ?>"></div>
                    <div class="col-md-2"><button type="submit" class="btn btn-default"><?php echo $lang['FORM_LOGIN']; ?></button></div>
<br>
                    <div class="g-recaptcha" data-sitekey="6LcUVJAUAAAAAH6dsEkHFHj1LAWuezxBwUjOeCpU"></div>
                    <br>
                </form>
            </div>
                <br />
    <div id="register" class="tab-pane fade">
                <p><?php echo $lang['FORM_CREATE']; ?></p>
                <form action="index.php" autocomplete="off" method="POST" class="clearfix">
                    <input type="hidden" name="action" value="register" />
                    <div class="col-md-2"><input type="text" class="form-control" name="username" placeholder="<?php echo $lang['FORM_USER']; ?>"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="password" placeholder="<?php echo $lang['FORM_PASS']; ?>"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="confirmPassword" placeholder="<?php echo $lang['FORM_PASSCONF']; ?>"></div>
                    <div class="col-md-2"><button type="submit" class="btn btn-default"><?php echo $lang['FORM_SIGNUP']; ?></button></div>
                    <br>
                    <div class="g-recaptcha" data-sitekey="6LcUVJAUAAAAAH6dsEkHFHj1LAWuezxBwUjOeCpU"></div>
                </form>
           </div>
     </div>
</div>
<br>
<p>Web Wallet 100% Secure</p>
<ul>
<li>HTTPS encryption</li>
<li>2FA Protection</li>
<li>ReCaptcha Anti-Bot</li>
<li>Database Encrypted with MD5</li>
</ul>
