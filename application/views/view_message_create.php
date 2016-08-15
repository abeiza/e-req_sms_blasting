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
					width:95%;
				}
				
				.list-ctc{
					border-bottom:1px solid #999;
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
				
				#list-contact{
					display:none;
					cursor:pointer;
				}
			</style>
			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<!--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
			<script>
				$(function(){
					$('#filter').keyup(function(){
					 // e.preventDefault();
					  filter=$("#filter").val();
					  //$("#dvloader1").show();
					  $.ajax({
						type: 'post',
						url:"<?php echo base_url();?>index.php/controller_message/filter/",
						data:"filter="+filter,
						dataType: "json",
						success: function(result) {
							$(".list-contact label").hide();
							$.each(result, function(i, data){
							   $('.list-contact label').each(function(i) {
									if($(this).attr('id') == data.ObjectID){
										$('.list-contact #'+data.ObjectID).show();
									}
							   });
							});
						}
					  });
					});	
				});
			</script>
			<script>
				function hit_teks()
				{
					var teks,min;
					min = 0;
					teks = min+(document.form1.message.value.length);
					teks2 = teks/150;
					document.form1.leng.value = teks;
					//document.form1.leng_m.value = parseInt(teks2)+1;
				}
			</script>
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
				<div style="width:100%;float:left;color:#666;">
					<div style="border:1px solid #e1e1e1; margin:20px;padding:20px;float:left;">
					<script>
					function updateTextArea() {     
					   var allVals = [];
					   $('.list-contact :checked').each(function(i) {
							  
						   allVals.push((i!=0?"\r\n":"")+ $(this).val());
					   });
					   $('#no_dest').val(allVals).attr('rows',allVals.length) ;
						
					   }
					   $(function() {
						  $('.list-contact input').click(updateTextArea);
						  updateTextArea();
					});
					
					function showContact(){
						document.getElementById("list-contact").style.display = 'block';	
					}
					
					function removeContact(){
						document.getElementById("list-contact").style.display = 'none';
					}
					</script>
					<h1>Create Message</h1>
						<?php 
						$attributes = array('name' => 'form1', 'id' => 'form1');
						echo form_open('controller_message/send_act/',$attributes);?>
						<div class="group-text" style="width:100%;">
							<label>To</label>
							<input style="width:80%;" type="hidden" placeholder="e.g. +628xxxxxxxxxx or 08xxxxxxxxxx" id="url" name="url" value="<?php echo base_url();?>index.php/controller_message/outbox"/>
							<input style="width:80%;" placeholder="e.g. +628xxxxxxxxxx or 08xxxxxxxxxx" id="no_dest" name="no_dest"/>
							<a href="#" onClick="showContact();" id="btn-list" style="padding:7px 10px;border:1px solid #e1e1e1;border-radius:3px;"><span style="color:#999;" class="fa fa-plus"></span></a>
						</div>
						<div class="group-text" id="list-contact" style="background-color:#e1e1e1;height:300px;overflow:auto;">
							<div style="padding:10px 20px;">
								<div style="text-align:right;"><span onClick="removeContact();" style="padding:5px 7px;background:#f1f1f1;border-radius:100px"><span class="fa fa-close" style="padding:0px 5px;"> </span>Close</span></div>
								<h2>List Contact</h2>
								<style>
									.list-contact label{
										padding:10px;
									}
								</style>
								<input type="text" id="filter" style="border:1px solid #999;width:90%;float:left;border-radius:3px;"/>
								<button class="button" style="border:none;border-radius:3px;padding:5px;margin-top:1px;"><span class="fa fa-search"></span></button>
								<div class="list-contact" style="margin:20px 0px;float:left;width:100%;">
									<?php 
										if($list_contact->num_rows() == 0){
											
										}else{
											foreach($list_contact->result() as $db){
												
													echo '<label class="list-ctc" id="'.$db->ObjectID.'"><input type="checkbox" value="'.$db->contact_number.'"/>'.$db->contact_name.'  ('.$db->contact_number.')</label>';
												
											}
										}
									?>
								</div>
							</div>
						</div>
						<div class="group-text">
							<label>Messages</label>
							<textarea id="message" name="message" style="width:95%;height:160px;" OnFocus="hit_teks();" OnClick="hit_teks();" ONCHANGE="hit_teks();" onKeydown="hit_teks();"
			onKeyup="hit_teks();"></textarea>
						</div>
						<div class="group-text">
							<button type="submit" style="border:1px solid transparent;padding-right:10px;width:200px;" class="button">Send</button>
							<div style="width:50%;float:left;height:20px;font-size:12px;margin-top:15px;"><input style="padding-right:2px;width:30px;background:transparent;border:none;text-align:right" id="leng" value="0"/>/160</div>
						</div>
						
						<?php echo form_close();?>
					</div>
				</div>
			</div>