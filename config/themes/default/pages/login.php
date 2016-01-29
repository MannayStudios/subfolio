<div id="lock">

	<div class="login_header">
    <h1><?php echo SubfolioLanguage::get_text('authenticationrequired_title');?></h1>
    <h2><?php echo SubfolioLanguage::get_text('authenticationrequired_subtitle');?></h2>
  </div>

	<?php if ($login_failed) { ?>
		<div class="login_feedback">
			<b><?php echo SubfolioLanguage::get_text('error');?></b>: <?php echo SubfolioLanguage::get_text('invalid_user_password'); ?>
		</div>
	<?php } ?>

	<form action="/login" method="post" name="protection">
		<input type="hidden" name="login" value="login">
		<div class="login_field">
			<input type="text" value="" id="username" name="username" class="field" tabindex="1" placeholder="<?php echo SubfolioLanguage::get_text('username');?>" />
		</div>
		<script type="text/javascript">
			document.getElementById('username').focus();
		</script>
		<div class="login_field">
			<input type="password"  value="" id="password" name="password" class="field" tabindex="2" placeholder="<?php echo SubfolioLanguage::get_text('password');?>" />
		</div>

		<!-- <div class="checkbox">
			<input id="remember_me" type="checkbox" value="1" name="remember" tabindex="4" CHECKED />
			<label for="remember_me"><?php echo SubfolioLanguage::get_text('remember_my_login');?></label>
		</div> -->
		<div class="subButton copy">
			<input id="contact_submit" type="submit" value="<?php echo SubfolioLanguage::get_text('submit');?>" name="commit"/>
		</div>

	</form>

</div>