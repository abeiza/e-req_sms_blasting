<!DOCTYPE html>
<html>	
	<head>
		<title>e-Recruitment | Official Gloria Origita Cosmetics</title>
	</head>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css"/>
	<style>
			body{
				font-family:calibri;
				font-size:14px;
			}
			
			input, textarea, select{
				margin:5px;
				padding:5px;
				border:none;
				border-bottom:1px solid #999;
				outline:none;
				background-color:transparent;
			}
			
			.container-fluit{
				//background-color:#f9f9f9;
				position:absolute;
				width:100%;
				//height:100%;
				top:0;
				left:0;
			}
			
			.container-fluit .layer-scroll{
				background-color:transparent;
				float:left;
				width:100%;
				height:100%;
			}
			
			.container-fluit .layer-scroll .layer-work{
				margin:5%;
				width:80%;
				padding:0px 5%;
				//background-color:#fff;
				float:left;
				//box-shadow: 0 2px 2px 0 rgba(0,0,0,.05),0 3px 1px -2px rgba(0,0,0,.16),0 1px 5px 0 rgba(0,0,0,.12);
				color:#999;
			}
			
			.container-fluit .layer-scroll .layer-header{
				background-color:#fafafa;
				border-bottom:1px solid rgba(204,204,204,.41);
				border-top:1px solid rgba(204,204,204,.41);
				padding:0px 10%;
				position:fixed;
				width:100%;
				z-index:999;
			}
			
			.container-fluit .layer-scroll .layer-footer{
				background-color:#666;
				padding:20px 10%;
				float:left;
				width:100%;
			}
			
			hr{
				border:none;
				border-bottom:1px solid #f1f1f1;
				margin:20px 0px;
			}
			
			.active{
				border:none;
				border-bottom:3px solid #8dc43f;
			}
			
			.group-text{
				padding:10px 0px;
			}
			
			.group-text label{
				padding-top:5px;
			}
			
			.button{
				width:100px;
				text-decoration:none;
				text-align:center;
			}
		</style>
	<body>
	    <?php date_default_timezone_set('Asia/Jakarta')?>
		<div class="container-fluit">
			<div class="layer-scroll">
				<div class="layer-header">
					<h2>&nbsp;</h2>
				</div>
				<div class="layer-work" style="text-align:center;margin-top:150px;">
					<div>
						<i class="fa fa-check-circle" style="font-size:80px;color:#8dc43f"></i>
						<h1>Terima Kasih Telah Mengirimkan CV Anda !!</h1>
						<div style="width:50%;margin:20px auto;">
							<span>Tim kami akan Tinjau cv Anda dalam waktu kurang lebih 2 - 4 minggu dari batas waktu penyerahan dan kemudian kami akan menghubungi Anda melalui email atau telepon.</span>
						</div>
							<a href="http://www.goc.co.id/home/career/" style="padding:10px 0px;"><i class="fa fa-long-arrow-left"></i> Kembali ke Website</a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</body>
</html>