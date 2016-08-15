<!DOCTYPE html>
<html>
	<head>
		<title>e - Recruitment | Official Gloria Origita Cosmetics</title>
	</head>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css"/>
	<style>
		@font-face {
			font-family: GeosansLight;
			src: url('<?php echo base_url();?>/assets/fonts/GeosansLight.ttf');
		}
		
		body{
			font-family:calibri;
			font-size:12px;
		}
		
		h3{
			font-family:GeosansLight;
			color:#999;
			font-size:2em;
			font-weight:normal;
			float:left;
			margin-left:20px;
			padding-right:10px;
			border-right:1px solid #999;
		}
		
		.layer-background-login{
			background-color: #2b3643;
			width: 100%;
			background-image: url('<?php echo base_url();?>/assets/pattern/world.png');
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
			background-repeat: no-repeat;
			background-size: cover;
		}
		
	</style>
	<body>
		<div class="layer-background-login">
			<div style="align-items:center;display:flex;height:100%;width:100%;">
				<?php 
					$attribut = array("style"=>"width:300px;height:350px;background-color:rgba(255, 255, 255, 0.025);margin:auto;");
					echo form_open('controller_connect/login_act',$attribut);?>
					<div style="width:100%;height:30%;float:left;">
						<div style="display:flex;align-items:center;height:100%;width:100%;">
							<h3>e-Recruitment</h3>
							<span style="float:left;padding-left:10px;font-size:14px;font-family:calibri;font-weight:bold;color:#999;">SIGN IN</span>
						</div>
					</div>
					<div style="width:100%;height:70%;background-color:transparent;float:left;">
						<div style="width:100%;height:25%;float:left;padding-top:2%;">
							<div style="width:15%;height:100%;align-items:center;display:flex;float:left;">
								<span class="fa fa-envelope" style="text-align:right;width:90%;color:#bcbcbc"></span>
							</div>
							<div style="width:85%;height:100%;align-items:center;display:flex;float:left;">
								<input name="username" autocomplete="off" style="float:left;background:transparent;width:80%;outline:none;border:none; border-bottom:1px solid #bcbcbc;margin-left:3%;padding:2% 0px;color:#fff;" placeholder="email or username"/>
							</div>
						</div>
						<div style="width:100%;height:25%;float:left;">
							<div style="width:15%;height:100%;align-items:center;display:flex;float:left;">
								<span class="fa fa-lock" style="font-size:18px;text-align:right;width:90%;color:#bcbcbc"></span>
							</div>
							<div style="width:85%;height:100%;align-items:center;display:flex;float:left;">
								<input name="password" type="password" style="background:transparent;width:80%;outline:none;border:none;border-bottom:1px solid #bcbcbc;margin-left:3%;padding:2% 0px;color:#fff;" placeholder="password"/>
							</div>
						</div>
						<div style="width:100%;height:47%;float:left;text-align:center;">
							<div style="width:100%;height:30%;float:left;text-align:left;">
								<a href="#" style="text-decoration:none;color:#bcbcbc;margin-left:10%;font-family:calibri;font-size:12px;">Forget password ?</a>
							</div>
							<div style="width:100%;height:70%;float:left;">
								<button type="submit" style="background-color:#2b3643;padding:15px 20px;border-radius:2px;color:#ffffff;border:none;cursor:pointer;">Connect</button>
							</div>
						</div>
						<?php 
							if(validation_errors()){
								echo '<div style="font-size: 12px;
										color: #fff;
										width: 100%;
										float: left;
										background-color:rgba(255, 255, 255, 0.025);
										text-align:center;
										margin: 10px auto 10px;">
										<span style="font-size:12px;color:#fff;width:100%;float:left;margin:10px auto 10px;">
										<h4>Warning <span class="fa fa-exclamation-circle"></span></h4>'
										.validation_errors().'</span></div>';
							}
						?>
						<span style="font-size:12px;color:#fff;width:100%;float:left;margin:10px auto 10px;"><?php echo $this->session->flashdata('login_result');?></span>
					</div>
				<?php echo form_close();?>
				<?php 
					
				?>
			</div>
		</div>
	</body>
</html>