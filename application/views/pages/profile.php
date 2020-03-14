<div id="main" role="main">
	<div id="ribbon">
		<span class="ribbon-button-alignment">
			<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
				<i class="fa fa-refresh"></i>
			</span>
		</span>
		<ol class="breadcrumb">
			<li>Home</li><li>Profil</li>
		</ol>
	</div>
	<br>
	<div id="content">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-12">
				<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Profil <span>> My Dashboard</span></h1>
				<div class="row">
					<div class="col-sm-12">
						<div class="well well-sm">
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="well well-light well-sm no-margin no-padding">
										<div class="row">
											<div class="col-sm-12">
												
												
												<hr>
												<h3 class="text-center"> Style </h3>
												<section id="smart-styles">
													<a href="<?php echo base_url("profile/style/0") ?>" id="smart-style-0" class="btn btn-block btn-xs txt-color-white margin-right-5" style="background-color:#4E463F;"> <?php echo $this->session->userdata["ses_tema"]["theme"] == 0 ? '<i class="fa fa-check fa-fw" id="skin-checked"></i>' : "" ?>Smart Default</a>
													<a href="<?php echo base_url("profile/style/1") ?>" id="smart-style-1" class="btn btn-block btn-xs txt-color-white" style="background:#3A4558;"> <?php echo $this->session->userdata["ses_tema"]["theme"] == 1 ? '<i class="fa fa-check fa-fw" id="skin-checked"></i>' : "" ?>Dark Elegance</a>
													<a href="<?php echo base_url("profile/style/2") ?>" id="smart-style-2" class="btn btn-xs btn-block txt-color-darken margin-top-5" style="background:#fff;"> <?php echo $this->session->userdata["ses_tema"]["theme"] == 2 ? '<i class="fa fa-check fa-fw" id="skin-checked"></i>' : "" ?>Ultra Light</a>
													<a href="<?php echo base_url("profile/style/3") ?>" id="smart-style-3" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background:#f78c40"> <?php echo $this->session->userdata["ses_tema"]["theme"] == 3 ? '<i class="fa fa-check fa-fw" id="skin-checked"></i>' : "" ?>Google Skin</a>
													<a href="<?php echo base_url("profile/style/4") ?>" id="smart-style-4" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background: #bbc0cf; border: 1px solid #59779E; color: #17273D !important;"> <?php echo $this->session->userdata["ses_tema"]["theme"] == 4 ? '<i class="fa fa-check fa-fw" id="skin-checked"></i>' : "" ?>PixelSmash</a>
													<a href="<?php echo base_url("profile/style/5") ?>" id="smart-style-5" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background: rgba(153, 179, 204, 0.2); border: 1px solid rgba(121, 161, 221, 0.8); color: #17273D !important;"> <?php echo $this->session->userdata["ses_tema"]["theme"] == 5 ? '<i class="fa fa-check fa-fw" id="skin-checked"></i>' : "" ?>Glass</a>
													<a href="<?php echo base_url("profile/style/6") ?>" id="smart-style-6" class="btn btn-xs btn-block txt-color-white margin-top-6" style="background: #2196F3; border: 1px solid rgba(0, 0, 0, 0.3); color: #FFF !important;"> <?php echo $this->session->userdata["ses_tema"]["theme"] == 6 ? '<i class="fa fa-check fa-fw" id="skin-checked"></i>' : "" ?>MaterialDesign</a>
												</section>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
