			<div style="width:17.5%;float:left;height:100%;background-color:#364150;color:#fff;">
				<div style="width:100%;height:150px;float:left;padding-top:53px;display:flex;align-items:center;background:#f1f1f1 url('<?php echo base_url();?>/assets/pattern/bg.jpg');background-size:cover;">
					<div style="width:100%;height:100%;background-color:#000;opacity:0.5">
						<div style="width:43%;height:100%;border-radius:100px;float:left;margin-left:7%;display:flex;align-items:center;">
							<div style="width:100px;height:100px;background-image: url('<?php echo base_url().'uploads/user/original/'.$this->session->userdata('user_pict');?>');background-size:cover;border-radius:100%;">
							</div>
						</div>
						<div style="width:43%;height:100%;background-color:transparent;float:left;margin-right:7%;display:flex;align-items:center;">
							<div style="width:100%;float:left;">
								<div style="float:left;margin-left:5%;;width:95%;'"><?php echo $this->session->userdata('user_first');?>&nbsp;<?php echo $this->session->userdata('user_last');?></div>
								<div style="float:left;font-size:12px;margin-left:5%;width:95%;"><div style="width:8px;height:8px;border-radius:100px;background-color:green;margin-right:5px;margin-top:3px;float:left;"></div><div style="float:left;'">Online</div></div>
							</div>
						</div>
					</div>
				</div>
				<div style="width:100%;float:left;">
				<style>
					ul li{
						list-style:none;
						transition: all 0.5s ease-out;
					}
					
					ul{
						margin:0px;
					}
					
					ul li:hover{
						background-color:#2C3542;
						transition: all 0.5s ease-in;
						cursor:pointer;
					}
					
					ul{
						padding:0px;
					}
					
					ul li div{
						padding:20px;
					}
					
					body{
						font-family:calibri;
						font-size:14px;
					}
					
					.active{
						background-color:#2C3542;
					}
				</style>
					<ul>
						<li class="active">
							<a href="<?php echo base_url();?>index.php/controller_dashboard/" style="text-decoration:none;color:#fff;">
							<div>
								<span class="fa fa-home" style="padding:0px 10px"></span>Dashboard
								<span class="fa fa-angle-right" style="float:right;"></span>
							</div>
							</a>
						</li>
						<!--<li>
							<a href="<?php //echo base_url();?>index.php/controller_user_activity/" style="text-decoration:none;color:#fff;">
							<div>
								<span class="fa fa-users" style="padding:0px 10px"></span>User Activity
								<span class="fa fa-angle-right" style="float:right;"></span>
							</div>
							</a>
						</li>-->
						<li>
							<a href="<?php echo base_url();?>index.php/controller_message/" style="text-decoration:none;color:#fff;">
							<div>
								<span class="fa fa-comments-o" style="padding:0px 10px"></span>Message
								<span class="fa fa-angle-right" style="float:right;"></span>
							</div>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/controller_posting/" style="text-decoration:none;color:#fff;">
							<div>
								<span class="fa fa-tag" style="padding:0px 10px"></span>Posting
								<span class="fa fa-angle-right" style="float:right;"></span>
							</div>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/controller_user_application/" style="text-decoration:none;color:#fff;">
							<div>
								<span class="fa fa-file-o" style="padding:0px 10px"></span>User Application
								<span class="fa fa-angle-right" style="float:right;"></span>
							</div>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/controller_settings/" style="text-decoration:none;color:#fff;">
							<div>
								<span class="fa fa-gear" style="padding:0px 10px"></span>Settings
								<span class="fa fa-angle-right" style="float:right;"></span>
							</div>
							</a>
						</li>
					</ul>
					<div style="margin:10px;font-size:12px;bottom:0;left:0;position:absolute;">
						<span class="fa fa-usb"></span>Develop by Evan Abeiza
					</div>
				</div>
			</div>
			