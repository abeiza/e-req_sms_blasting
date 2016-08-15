			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
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
				
				.pagination li{
					float:left;
					margin:3px;
					border:1px solid #e1e1e1;
					border-radius:3px;
				}
				
				.pagination li a{
					text-decoration:none;
					color:#999;
					width:100%;
					height:100%;
					float:left;
					padding:5px 10px;
					
				}
				
				.pagination ul li:hover{
					border:1px solid #f1f1f1;
					background-color:#f1f1f1;
					color:#fff;
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
			<script>
			$(function() {	
				$("#insert_item").click(function(){
					$.ajax({
						url:"<?php echo base_url();?>index.php/controller_message/insert_data/",
						data:{
							id:$("#id").val(),
							name:$("#name").val(),
							number:$("#number").val()
						},
						dataType:'json',
						cache:false,
						type: "POST",
						success:function(data){
							if(data.status == 'Sukses'){
								alert_success_contact();
							}else{
								alert(data.status);
							}
						}
					});
				});
			});
			</script>
			<style>
				.button{
					float:left;
					padding:10px;
					//border:2px solid #55a747;
					background-color:#55a747;
					border-radius:3px;
					color:#fff;
					font-weight:600;
					margin:10px 3px;
					width:50px;
					text-align:center;
					cursor:pointer;
				}
			
				.group-text label{
					font-size:12px;
					float:left;
					width:100%;
				}
				
				.group-text{
					width:100%;
					float:left;
					margin:10px 0px;
				}
				
				input, textarea, select{
					border:none;
					border-bottom:1px solid #999;
					padding:5px 10px;
					outline:none;
					color:#999;
				}
				
				.group-text span{
					font-size:12px;
				}
				
				.tabcontent-first{
					display:block;
				}
				
				.tabcontent{
					display:none;
				}
			</style>
									
			<div style="width:82.5%;float:left;height:100%;background-color:#ffffff;overflow:auto;">
				<div style="width:100%;height:53px;border-bottom:1px solid #e7ecf1;padding-top:53px;display:flex;align-items:center;color:#666">
					<div style="width:50%;text-align:left;">
						<div style="padding:0px 20px;">Home <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Contact Book</div>
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
									<a href="<?php echo base_url();?>index.php/controller_message/contact/"><li><span class="fa fa-book"></span><span style="padding:0px 10px;">Contact Book</span></li></a>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div style="width:100%;float:left;color:#666;">
					<div style="border:1px solid #e1e1e1; margin:2%;padding:3%;width:90%;float:left;">
					<h1>Create Contact</h1>
						<div class="group-text">
							<label>Contact Name</label>
							<input id="id" type="hidden" style="width:95%;"/>
							<input id="name" type="text" style="width:95%;" placeholder="Name Contact"/>
						</div>
						<div class="group-text" style="width:45%;padding-right:5%;">
							<label>Phone Number</label>
							<input id="number" type="text" style="width:100%;" placeholder="No. Contact"/>
						</div>
						<div class="group-text">
							<a class="button" id="insert_item">Submit</a>
						</div>
					</div>
				</div>
			</div>