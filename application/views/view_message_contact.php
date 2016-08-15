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
					z-index:999;
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
				function delete_data(e){
					$.confirm({
						title: '<span style="color:#FF6B6B;"><i class="fa fa-exclamation" style="margin-right:5px;"></i>Confirmation</span>',
						content: 'Are you sure delete this record?',
						confirm: function(){
							var element = e.attr('id');
							$.ajax({
								url:"<?php echo base_url();?>index.php/controller_message/delete_data/",
								cache:false,
								data:{
									id:element
								},
								type: "POST",
								dataType: 'json',
								success:function(result){
									if(result.status == 'Sukses'){
										alert_success_contact_delete();
									}else{
										alert(data.status);
									}
								}
							});
						},
						cancel: function(){
							$.alert('Canceled!');
						}
					});
				}
			</script>
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
					<h1>Contact Book</h1>
					<a href="<?php echo base_url().'index.php/controller_message/contact_add';?>" style="text-decoration:none;padding:5px 10px;border:1px solid #f1f1f1;border-radius:3px;background-color:#55a747 !important;color:#fff;opacity:0.8;z-index:0;">Create Contact</a>
						<table style="margin-top:10px;">
							<thead>
								<tr>
									<td>#No.</td>
									<td>List Name</td>
									<td>Number Contact</td>
									<td></td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								<?php if($contact->num_rows() == 0){?>
								<tr>
									<td colspan="3">Data Contact is Not Available</td>
								</tr>
							<?php }else{ 
									foreach($contact->result() as $db){
									?>
								<tr>
									<td><?php echo $db->ObjectID;?></td>
									<td><?php echo $db->contact_name;?></td>
									<td><?php echo $db->contact_number;?></td>
									<td>
										<a style='color:#999' href="<?php echo base_url();?>index.php/controller_message/contact_edit/<?php echo $db->ObjectID;?>" id='<?php echo $db->ObjectID;?>' onclick='update_data($(this))'><i style='color:#55a747'  class='fa fa-edit'></i><br/>Update</a>
									</td>
									<td>
										<a style='color:#999' id='<?php echo $db->ObjectID;?>' onclick='delete_data($(this))'><i style='color:#F9896D'  class='fa fa-close'></i><br/>Delete</a>
									</td>
								</tr>
							<?php 
								}
							}?>
							</tbody>	
						</table>
						<div style="width:100%;float:left;">
							<div style="margin:20px 0px;float:left;"><?php echo $paging;?></div>
							<div style="float:left;margin:25px 0px;">
								<?php echo form_open('controller_message/search_contact/');?>
									<input type="text" name="search" style="padding:6px;border:none;border-bottom:1px solid #e1e1e1;outline:none;margin:0px 10px;color:#999;" placeholder="search"/>
									<button style="padding:5px 8px;border:1px solid #e1e1e1;border-radius:3px;background-color:#fff;cursor:pointer;" type="submit"><span class="fa fa-filter" style="color:#999"></span></button>
								<?php echo form_close();?>
							</div>
							<div style="float:right;margin:25px 0px;font-size:12px;">
								Showing <?php echo $from;?> to <?php echo $to > $total?$total:$to;?> of <?php echo $total;?> entries
							</div>
						</div>
					</div>
				</div>
			</div>