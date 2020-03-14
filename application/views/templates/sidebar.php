<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">
	<!-- User info -->
	<div class="login-info">
		<span > <!-- User image size is adjusted inside CSS, it should stay as it -->
			<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut" style="">
				<img  src="<?php echo base_url('assets/templates/');?>img/15.png" alt="me" style="object-position:50% 40%;object-fit: cover;height: 27px;width: 27px;" class="online"  />
				<span>
					<?php // echo strtoupper($this->session->userdata['ses_asisten']['ast_kode']); ?>
				</span>
				<i class="fa fa-angle-down"></i>
			</a>	
		</span>
	</div>
	<!-- end user info -->
	<!-- NAVIGATION : This navigation is also responsive-->
	<nav>
		<!--
		NOTE: Notice the gaps after each icon usage <i></i>..
		Please note that these links work a bit different than
		traditional href="" links. See documentation for details.
		-->
		<ul>
			<li <?php // echo (in_array($this->uri->segment(1),array('AssistantDashboard')) ? 'class="active"': ''); ?>>
				<a href="<?php echo base_url("Dashboard"); ?>" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
			</li>
			<li <?php // echo (in_array($this->uri->segment(1),array('AssistantAttendance','AssistantSubtitution')) ? 'class="active open"': 'class="top-menu-invisible"'); ?>>
				<a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Data Guru</span></a>
				<ul <?php // echo (in_array($this->uri->segment(1),array('AssistantAttendance','AssistantSubtitution')) ? 'style="display: block;"': ''); ?>>
					<li <?php // echo ($this->uri->segment(1) == 'AssistantAttendance' ? 'class="active"' : 'class=""') ?>>
						<a href="<?php echo base_url("Training");?>"><i class="fa fa-lg fa-fw fa-list"></i><span class="menu-item-parent">Data Training</span></a>
					</li>
					<li <?php // echo ($this->uri->segment(1) == 'AssistantSubtitution' ? 'class="active"' : 'class=""') ?>>
						<a href="<?php echo base_url("Testing");?>"><i class="fa fa-lg fa-fw fa-file-text"></i><span class="menu-item-parent">Data Testing</span></a>
					</li>
				</ul>
			</li>
			<li <?php // echo (in_array($this->uri->segment(1),array('AssistantDashboard')) ? 'class="active"': ''); ?>>
				<a href="<?php echo base_url("Test"); ?>" title="Test"><i class="fa fa-lg fa-fw fa-check"></i> <span class="menu-item-parent">Test</span></a>
			</li>
			<li <?php // echo (in_array($this->uri->segment(1),array('AssistantDashboard')) ? 'class="active"': ''); ?>>
				<a href="<?php echo base_url("Hasil"); ?>" title="Hasil"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Hasil Klasifikasi</span></a>
			</li>	
			
		</ul>
	</nav>
	<span class="minifyme" data-action="minifyMenu">
		<i class="fa fa-arrow-circle-left hit"></i>
	</span>
</aside>
<!-- END NAVIGATION -->
