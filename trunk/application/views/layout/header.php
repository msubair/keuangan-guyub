<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<style type="text/css" title="currentStyle">
			@import "<?php echo base_url();?>css/style.css";
			@import "<?php echo base_url();?>css/demo_page.css";
			@import "<?php echo base_url();?>css/demo_table.css";
			@import "<?php echo base_url();?>css/demo_table_jui.css";
			@import "<?php echo base_url();?>css/gf-theme/jquery.ui.all.css";
			@import "<?php echo base_url();?>css/demos.css";
		</style>

		<script type="text/javascript" src="<?php echo base_url();?>js/action.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.datepicker.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.datepicker-id.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.button.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.dialog.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/additional-methods.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8rc3.custom.min.js"></script>
		<script type="text/javascript">
		$(function() {
			$("#datepicker").datepicker({
				dateFormat: "yy-mm-dd",
				regional: "id"
			});
		});
		</script>
		<script type="text/javascript">
		$(function() {
			var dates = $('#datepicker-from, #datepicker-to').datepicker({
				defaultDate: "+1w",
				dateFormat: "yy-mm-dd",
				regional: "id",
				changeMonth: true,
				numberOfMonths: 3,
				onSelect: function(selectedDate) {
					var option = this.id == "datepicker-from" ? "minDate" : "maxDate";
					var instance = $(this).data("datepicker");
					var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
					dates.not(this).datepicker("option", option, date);
				}
			});
		});
		</script>
		<script type="text/javascript" charset="utf-8">
		$(function() {
				$('#button-view').button({
					icons: {
						primary: 'ui-icon-document'
					}
				});
				$('#button-edit').button({
					icons: {
						primary: 'ui-icon-pencil'
					}
				});
				$('#button-delete').button({
					icons: {
						primary: 'ui-icon-trash'
					}
				});
				$('#button-addnew').button({
					icons: {
						primary: 'ui-icon-plus'
					}
				});
				$('#button-save').button();
				$('#button-cancel').button();
				$('#button-print').button();
				$('#button-reset').button();
			});
		</script>
		<script type="text/javascript" charset="utf-8">
			var oTable;
			var oDialog;

			$(document).ready(function() {

				oTable = $('#display_table').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				});

				oDialog = $('<div></div>')
					.dialog({
						autoOpen: false,
						title: 'Konfirmasi',
						resizable: false,
						width: 500,
						height: 150,
						modal: true,
						buttons: {
							OK: function() {
								$(this).dialog('close');
							}
						}
					});
			} );

		</script>

	<title><?php echo $title;?></title>
</head>

<body>

<div id="site-wrapper">

	<div id="header">

		<div id="top">
			<div class="left" id="logo">
				<a href="<?php echo site_url();?>home"><img src="<?php echo base_url();?>images/keuangan-guyub-logo.png" alt="" /></a>
			</div>
			<div class="left navigation" id="main-nav">

				<p><a href="http://code.google.com/p/keuangan-guyub/">Aplikasi F/OSS untuk Keuangan UKM Jasa</a></p>

			</div>
			<div class="clearer">&nbsp;</div>
		</div>

		<div class="navigation" id="sub-nav">
			<ul class="user-logout">
				<li class="current-tab"><a href="#">Hi.. <?php echo $this->session->userdata('SESS_FIRST_NAME'); ?> ;) </a></li>
				<li><?php echo anchor('login/logout', 'Logout'); ?>  |</li>
				<li><?php echo anchor('user/edit/'.$this->session->userdata('SESS_USER_ID'), 'Ubah Profil'); ?>  |</li>
			</ul>
			<div class="clearer">&nbsp;</div>
		</div>

	</div>

	<div class="main" id="main-two-columns">

		<div class="left" id="main-content">

			<div class="section">

				<div class="section-content">

					<div class="post">
