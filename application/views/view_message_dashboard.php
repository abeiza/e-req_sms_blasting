			<style>
				table{
					border:none;
					border-collapse:collapse;
					width:100%;
				}
				
				table thead tr td, table tbody tr td{
					border-bottom:1px solid #e1e1e1;
					padding:10px;
				}
				
				table tfoot tr td{
					padding:10px;
				}
				
				.menu-sms li:hover{
					background-color:transparent;
				}
				
				.menu-sms li{
					padding-bottom:20px;
					position:relative;
				}
				
				.menu-sms li:hover .drop{
					visibility:visible;
					margin-top:20px;
					transition:opacity 0.5s linear;
					opacity:1;
				}
				
				.menu-sms li ul{
					visibility:hidden;
					position:absolute;
					background-color:#fff;
					box-shadow:rgba(0, 0, 0, 0.0470588) 0px 2px 2px 0px, rgba(0, 0, 0, 0.156863) 0px 3px 1px -2px, rgba(0, 0, 0, 0.117647) 0px 1px 5px 0px;
					opacity:0;
				}
				
				.menu-sms li ul li{
					padding:15px 20px;
				}
				
				.menu-sms li ul li:hover{
					background-color:#f1f1f1;
				}
				
				a{
					color:#999;
					text-decoration:none;
				}
			</style>
			<div style="width:82.5%;float:left;height:100%;background-color:#ffffff;overflow:auto;">
				<div style="width:100%;height:53px;border-bottom:1px solid #e7ecf1;padding-top:53px;display:flex;align-items:center;color:#666">
					<div style="width:50%;text-align:left;">
						<div style="padding:0px 20px;">Home <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Messages</div>
					</div>
					<div style="width:50%;text-align:right;">
						<div style="padding:0px 20px;"><?php echo date('l, F jS Y');?></div>
					</div>
				</div>
				<div style="width:100%;float:left;border-bottom:1px solid #e7ecf1;color:#666;background-position-y:-441px;background-position-x:-583px;background-image:url('<?php echo base_url();?>assets/pattern/worl-white.png');background-color:#fff;">
					<div style="padding:20px;">
						<h1 style="margin-bottom:5px;">Messages</h1>
						<ul class="menu-sms" style="float:left;">
							<li><span>Manage Contact & SMS Blast</span><span style="margin:0px 10px;" class="fa fa-angle-down"></span>
								<ul class="drop">
									<a href="<?php echo base_url();?>index.php/controller_message/dashboard/"><li><span class="fa fa-dashboard"></span><span style="padding:0px 10px;">Dashboard</span></li></a>
									<a href="<?php echo base_url();?>index.php/controller_message/threads/"><li><span class="fa fa-envelope"></span><span style="padding:0px 10px;">Inbox</span></li></a>
									<a href="<?php echo base_url();?>index.php/controller_message/create/"><li><span class="fa fa-edit"></span><span style="padding:0px 10px;">Create Message</span></li></a>
									<a href="<?php echo base_url();?>index.php/controller_message/outbox/"><li><span class="fa fa-send"></span><span style="padding:0px 10px;">Send Message</span></li></a>
									<a href="<?php echo base_url();?>index.php/controller_message/contact/"><li><span class="fa fa-book"></span><span style="padding:0px 10px;">Contact</span></li></a>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div style="width:100%;float:left;color:#666;background-color:#F4F4F4;">
						<div style="overflow:hidden;width:30%;margin:1.5%;height:150px;border:1px solid #e1e1e1;float:left;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.05),0 3px 1px -2px rgba(0,0,0,.16),0 1px 5px 0 rgba(0,0,0,.12);">
							<div style="padding:20px;">
								<h2>Inbox Message</h2>
								<h1 style="float:left;margin-top:-10px;font-weight:normal;font-size:48px;"><?php echo $c_inbox->num_rows();?></h1><div style="margin-top:10px;float:left;margin-left:10px;">This Month</div>
							</div>
							<div class="fa fa-envelope-o" style="font-size:130px;float: right;margin-top: -64px;margin-right: -9px;color:#f1f1f1"></div>
						</div>
						
						<div style="overflow:hidden;width:30%;margin:1.5%;height:150px;border:1px solid #e1e1e1;float:left;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.05),0 3px 1px -2px rgba(0,0,0,.16),0 1px 5px 0 rgba(0,0,0,.12);">
							<div style="padding:20px;">
								<h2>Outbox Message</h2>
								<h1 style="float:left;margin-top:-10px;font-weight:normal;font-size:48px;"><?php echo $c_outbox->num_rows();?></h1><div style="margin-top:10px;float:left;margin-left:10px;">This Month</div>
							</div>
							<div class="fa fa-send-o" style="font-size:130px;float: right;margin-top: -64px;margin-right: -9px;color:#f1f1f1"></div>
						</div>
							
						<div style="overflow:hidden;width:30%;margin:1.5%;height:150px;border:1px solid #e1e1e1;float:left;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.05),0 3px 1px -2px rgba(0,0,0,.16),0 1px 5px 0 rgba(0,0,0,.12);">
							<div style="padding:20px;">
								<h2>My Contact</h2>
								<h1 style="float:left;margin-top:-10px;font-weight:normal;font-size:48px;"><?php echo $c_contact->num_rows();?></h1><div style="margin-top:10px;float:left;margin-left:10px;">Count of Contact</div>
							</div>
							<div class="fa fa-bookmark-o" style="font-size:130px;float: right;margin-top: -64px;margin-right: -9px;color:#f1f1f1"></div>
						</div>
				</div>
			</div>