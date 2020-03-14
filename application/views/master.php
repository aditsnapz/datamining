<!DOCTYPE html>
<html lang="en-us">
	<?php $this->load->view('templates/head.php'); ?>
	<body class="<?php echo "smart-style-".$this->session->userdata["ses_tema"]["theme"] ?>">
		<?php $this->load->view('templates/header.php'); ?>
		<?php $this->load->view('templates/sidebar.php'); ?>
		<?php $this->load->view('pages/'.$page.'.php',$content); ?>
		<?php $this->load->view('templates/footer.php'); ?>
		<?php $this->load->view('templates/shortcut.php'); ?>
		<?php $this->load->view('templates/script.php'); ?>
	</body>
</html>
