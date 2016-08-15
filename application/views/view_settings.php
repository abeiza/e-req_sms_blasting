			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<script>
			$(function() {	
				$("#data").submit(function(){
					var formData = new FormData( $("#data")[0] );
					$.ajax({
						url:"<?php echo base_url();?>index.php/controller_settings/update_mailer/",
						cache:false,
						data : formData,
						//data: $(this).serialize(),
						dataType:'json',
						type: "POST",
						async : false,
						cache : false,
						contentType : false,
						processData : false,
						success:function(data){
							if(data.status == 'Sukses'){
								alert_success_mailer();
								$.ajax({
									url:"<?php echo base_url();?>index.php/controller_settings/get_account/<?php echo $this->session->userdata('user_id');?>",
									cache:false,
									type: "POST",
									dataType: 'json',
									success:function(result){
										$.each(result, function(i, data){
											$('#sender_email').val(data.sender_email);
											$('#user_password').val(data.user_password);
											$('#user_username').val(data.user_username);
											$('#to_email').val(data.to_email);
											$('#cc_email').val(data.cc_email);
											$('#bcc_email').val(data.bcc_email);
										});
									}
								});
							}else{
								alert(data.status);
							}
						}
					});
					return false;
				});
			});
			</script>
			<script>
				$(function() {	
					$(function(){
						$.ajax({
							url:"<?php echo base_url();?>index.php/controller_settings/get_mailer/",
							cache:false,
							type: "POST",
							dataType: 'json',
							success:function(result){
								$.each(result, function(i, data){
									$('#sender_email').val(data.sender_email);
									$('#user_password').val(data.user_password);
									$('#user_username').val(data.user_username);
									$('#to_email').val(data.to_email);
									$('#cc_email').val(data.cc_email);
									$('#bcc_email').val(data.bcc_email);
								});
							}
						});
					});						
				});
			</script>
			<div style="width:82.5%;float:left;height:100%;background-color:#ffffff;overflow:auto;">
				<div style="width:100%;height:53px;border-bottom:1px solid #e7ecf1;padding-top:53px;display:flex;align-items:center;color:#666">
					<div style="width:50%;text-align:left;">
						<div style="padding:0px 20px;">Home <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Settings  <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Setting Data</div>
					</div>
					<div style="width:50%;text-align:right;">
						<div style="padding:0px 20px;"><?php echo date('l, F jS Y');?></div>
					</div>
				</div>
				<div style="width:100%;float:left;border-bottom:1px solid #e7ecf1;color:#666;background-position-y:-441px;background-position-x:-583px;background-image:url('<?php echo base_url();?>assets/pattern/worl-white.png');background-color:#fff;">
					<div style="padding:20px;">
						<h1 style="margin-bottom:5px;">Settings</h1><span>Change the Data Mailer for Notify Message.</span>
					</div>
				</div>
				<div style="width:100%;float:left;color:#666;">
					<div style="border:1px solid #e1e1e1; margin:20px;padding:20px;float:left;">
						<h1>UPDATE DATA</h1>
						
						
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
						<form id="data" name="data" method="post" accept-charset="utf-8">
						<div class="tabcontent-first">
							<div class="group-text" style="width:45%;padding-right:5%;">
								<label>Email Sender</label>
								<input id="sender_email" name="sender_email" type="text" style="width:100%;" placeholder="e.g. example@domain.com"/>
							</div>
							<div class="group-text" style="width:40%;padding-left:5%;">
								<label>Username Email Sender</label>
								<input id="user_username" name="user_username" type="text" style="width:100%;" placeholder="Username Email"/>
							</div>
							<div class="group-text">
								<label>Password Email Sender</label>
								<input id="user_password" name="user_password" type="password" style="width:45%;" placeholder="Password Email"/>
							</div>
							<div class="group-text">
								<label>To Email</label>
								<input id="to_email" name="to_email" type="text" style="width:45%;" placeholder="e.g. example@domain.com"/>
							</div>
							<div class="group-text">
								<label>CC Email</label>
								<input id="cc_email" name="cc_email" type="text" style="width:45%;" placeholder="e.g. example@domain.com"/>
							</div>
							<div class="group-text">
								<label>BCC Email</label>
								<input id="bcc_email" name="bcc_email" type="text" style="width:45%;" placeholder="e.g. example@domain.com"/>
							</div>
							<div class="group-text">
								<a class="button" href="<?php echo base_url();?>" style="text-decoration:none;">Cancel</a>
								<button type="submit" class="button" style="width:100px;border:none;" id="insert_item">Submit</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>