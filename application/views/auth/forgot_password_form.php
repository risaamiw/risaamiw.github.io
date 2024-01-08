<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'class' => 'form-control',
	'placeholder' => 'Email',
	'maxlength'	=> 80,
	'size'	=> 30,
	'autocomplete' => 'off'
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>CSIRT-INTI</title>

	<meta name="description" content="IMSIS | PT Industri Telekomunikasi Indoenesia"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta charset="utf-8"/>
	<meta property="og:locale" content="en_US"/>
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="IMSIS | PT Industri Telekomunikasi Indoenesia"/>
	<meta property="og:url" content="https://my.inti.co.id/reseller/"/>
	<meta property="og:site_name" content="IMSIS Reseller | PT Industri Telekomunikasi Indoenesia"/>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ini-inti.png" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="<?php echo base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?php echo base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->

	<!--end::Main-->
	<script>
		var hostUrl = "<?php echo base_url(); ?>assets/";
	</script>
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?php echo base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="<?php echo base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="<?php echo base_url(); ?>assets/js/custom/widgets.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>


<body id="kt_body" class="page-auth" style="background-color:#150544">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
			<!--begin::Content-->
			<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
			
				<!--end::Logo-->
				<!--begin::Wrapper-->
				<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

					<?php echo form_open($this->uri->uri_string(), array('class' => 'form w-100', 'novalidate' => 'novalidate', 'id' => 'kt_sign_in_form')); ?>
					<!--begin::Heading-->
					<div class="text-center mb-8">
						<!--begin::Title-->
						<h1 class="text-dark mb-3">Lupa Katasandi?</h1>
						<!--end::Title-->
						<!--begin::Link-->
						<div class="text-gray-400 fw-bold fs-4">
							Kembali ke halaman <?php echo anchor('/Auth/login/', 'Masuk', array('class' => 'link-primary fw-bolder')); ?>
						</div>
						<!--end::Link-->
					</div>
					<!--begin::Heading-->
					<div class="fv-row mb-3">
						<label class="form-label fs-6 fw-bolder text-dark">Email</label>
						<?php echo form_input($login, array('class' => 'form-control form-control-lg form-control-solid', 'autocomplete' => 'off')); ?>

						<span style="color:red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']]) ? $errors[$login['name']] : ''; ?></span>
					</div>
					<!-- /.col -->
					<div class="text-center">
						<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5" style="background-color: rgb(21, 5, 68); color:white;">Dapatkan Katasandi Baru</button>
					</div>
					<!-- /.col -->
					<?php echo form_close(); ?>
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
</body>

</html>
