			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<script>
			$(function() {	
				$("#data").submit(function(){
					var formData = new FormData( $("#data")[0] );
					$.ajax({
						url:"<?php echo base_url();?>index.php/controller_settings/update_account/",
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
								alert_success_account();
								$.ajax({
									url:"<?php echo base_url();?>index.php/controller_settings/get_account/<?php echo $this->session->userdata('user_id');?>",
									cache:false,
									type: "POST",
									dataType: 'json',
									success:function(result){
										$.each(result, function(i, data){
											$('#id').val(data.user_id);
											$('#first').val(data.user_first_name);
											$('#last').val(data.user_last_name);
											$('#nick').val(data.user_nick);
											$('#username').val(data.user_username);
											$('#password').val(data.user_password);
											$('#foto').append("<img src='<?php echo base_url();?>uploads/user/original/"+data.user_pict+"' width='200px' height='200px'/>");
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
							url:"<?php echo base_url();?>index.php/controller_settings/get_account/<?php echo $this->session->userdata('user_id');?>",
							cache:false,
							type: "POST",
							dataType: 'json',
							success:function(result){
								$.each(result, function(i, data){
									$('#id').val(data.user_id);
									$('#first').val(data.user_first_name);
									$('#last').val(data.user_last_name);
									$('#nick').val(data.user_nick);
									$('#username').val(data.user_username);
									$('#password').val(data.user_password);
									$('#foto').append("<img src='<?php echo base_url();?>uploads/user/original/"+data.user_pict+"' width='200px' height='200px'/>");
								});
							}
						});
					});						
				});
			</script>
			<div style="width:82.5%;float:left;height:100%;background-color:#ffffff;overflow:auto;">
				<div style="width:100%;height:53px;border-bottom:1px solid #e7ecf1;padding-top:53px;display:flex;align-items:center;color:#666">
					<div style="width:50%;text-align:left;">
						<div style="padding:0px 20px;">Home <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Settings  <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Update Account</div>
					</div>
					<div style="width:50%;text-align:right;">
						<div style="padding:0px 20px;"><?php echo date('l, F jS Y');?></div>
					</div>
				</div>
				<div style="width:100%;float:left;border-bottom:1px solid #e7ecf1;color:#666;background-position-y:-441px;background-position-x:-583px;background-image:url('<?php echo base_url();?>assets/pattern/worl-white.png');background-color:#fff;">
					<div style="padding:20px;">
						<h1 style="margin-bottom:5px;">My Privacy Account</h1><span>Update data account username, password, pict etc.</span>
					</div>
				</div>
				<div style="width:100%;float:left;color:#666;">
					<div style="border:1px solid #e1e1e1; margin:20px;padding:20px;float:left;">
						<h1>UPDATE ACCOUNT</h1>
						
						
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
						<form id="data" name="data" method="post" enctype="multipart/form-data" accept-charset="utf-8">
						<div class="tabcontent-first">
							<div class="group-text" style="width:45%;padding-right:5%;">
								<label>First Name</label>
								<input id="id" name="id" type="hidden" style="width:100%;" placeholder="First Name"/>
								<input id="first" name="first" type="text" style="width:100%;" placeholder="First Name"/>
							</div>
							<div class="group-text" style="width:40%;padding-left:5%;">
								<label>Last Name</label>
								<input id="last" name="last" type="text" style="width:100%;" placeholder="Last Name"/>
							</div>
							<div class="group-text">
								<label>Nick Name</label>
								<input id="nick" name="nick" type="text" style="width:45%;" placeholder="Nick Name"/>
							</div>
							<div class="group-text">
								<label>Username</label>
								<input id="username" name="username" type="text" style="width:45%;" placeholder="Username"/>
							</div>
							<div class="group-text">
								<label>Password</label>
								<input id="password" name="password" type="password" style="width:45%;" placeholder="Password"/>
							</div>
							<div class="group-text" style="width:45%;">
								<label>Pict</label>
								<input id="pict" name="pict" type="file" style="width:100%;" placeholder="Picture"/>
							</div>
							<div class="group-text" style="width:45%;text-align: center;margin-top: -143px;" id="foto">
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