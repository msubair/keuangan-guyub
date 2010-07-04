<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	
	<link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="Guyub" />
	<style type="text/css" title="currentStyle">
		@import "<?php echo base_url();?>css/style.css";
		@import "<?php echo base_url();?>css/gf-theme/jquery.ui.all.css";
		@import "<?php echo base_url();?>css/demos.css";
	</style>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.button.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.min.js"></script>

	<script type="text/javascript" charset="utf-8">
		$(function() {
			$('#button-login').button({
				icons: {
					primary: 'ui-icon-person'
				}
			});

			$('#login_form').validate({
				errorLabelContainer: "#error",
				wrapper: "li",
				rules:
				{
					username: "required",
					password: "required"
				}
			});
		});
	</script>
	<title>Halaman Login</title>
</head>

<body>

<div id="site-wrapper">

	<div id="header">

		<div id="top">

			<div class="left" id="logo">
				<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/keuangan-guyub-logo.png" alt="" /></a>
			</div>

			<div class="left navigation" id="main-nav">

				<p><a href="http://code.google.com/p/keuangan-guyub/">Aplikasi Keuangan Open Source untuk UKM Jasa</a></p>

			</div>

			<div class="clearer">&nbsp;</div>

		</div>

	</div>

	<div class="main" id="main-two-columns">

		<div class="left" id="main-content">

			<div class="section">

				<div class="section-content">

					<div class="post">

						<div class="post-title">
							<h2>
								<?php
									if( $this->session->userdata('SESS_LOGIN_STATEMENT') )
									{
										echo $this->session->userdata('SESS_LOGIN_STATEMENT');
										$this->session->unset_userdata('SESS_LOGIN_STATEMENT');
									}
									else
									{
										echo "Selamat Datang ;)";
									}
								?>
							</h2>
						</div>

						<div class="post-body">

							<p>&nbsp;</p>

							<p class="large">Untuk dapat mengakses aplikasi ini Anda harus login terlebih dahulu.</p>

							<p>Silahkan masukkan Username dan Password Anda dengan benar, dimana khusus untuk Password berlaku aturan case sensitive.</p>

						</div>

					</div>

					<div class="clearer">&nbsp;</div>

				</div>

			</div>

			<div class="clearer">&nbsp;</div>

		</div>

		<div class="right sidebar" id="sidebar">

			<div class="section">

			<?php
				echo form_open('login/login_exec', 'id="login_form"');

				echo "<div id='error' class='error-message' ";

				if($this->session->userdata('ERRMSG_ARR'))
				{
					echo ">";
					echo $this->session->userdata('ERRMSG_ARR');
					$this->session->unset_userdata('ERRMSG_ARR');
				}
				else
				{
					echo "style='display:none'>";
				}

				echo "</div>";

					echo '<p>';
					echo form_label('Username','username');
					echo '<br/>';

					$data['name'] = $data['id'] = 'username';
					$data['class'] = 'text';
					$data['title'] = "Username harus diisi";
					echo form_input($data);

					echo '</p>';

					echo '<p>';
					echo form_label('Password','password');
					echo '<br/>';

					$data['name'] = $data['id'] = 'password';
					$data['title'] = "Password harus diisi";
					echo form_password($data);

					echo '</p>';

					$submit['name'] = 'submit';
					$submit['id'] = 'button-login';
					$submit['type'] = 'submit';
					$submit['content'] = 'Login';
					echo form_button($submit);

				echo form_close();
			?>

			</div>

		</div>

		<div class="clearer">&nbsp;</div>

	</div>

	<div id="footer">

		<div class="left" id="footer-left">

			<img src="<?php echo base_url();?>images/logo-small.png" alt="" class="left" />

			<p>&copy; <a href="http://guyub.co.id">Guyub Teknologi Nusantara</a> - 2010</p>

			<div class="clearer">&nbsp;</div>

		</div>

		<div class="right" id="footer-right">

			<p class="large"><a href="http://www.gnu.org/licenses/gpl.html">GPL</a> <span class="text-separator">|</span> <a href="http://keuangan.guyub.co.id/kredit/">Kredit</a> <span class="text-separator">|</span> <strong><a href="http://code.google.com/p/keuangan-guyub/issues/list">LaporBugs</a></strong> <span class="text-separator">|</span> <strong><a href="http://groups.google.com/group/keuangan-guyub">MailingList</a></strong> <span class="text-separator">|</span> <a href="http://keuangan.guyub.co.id">Blog</a> <span class="text-separator">|</span> <a href="http://www.facebook.com/pages/Keuangan-Guyub/122152827795291">Fb</a> <span class="text-separator">|</span> <a href="http://twitter.com/keuanganguyub">Tw</a> <span class="text-separator"></p>

		</div>

		<div class="clearer">&nbsp;</div>

	</div>

</div>

</body>
</html>
