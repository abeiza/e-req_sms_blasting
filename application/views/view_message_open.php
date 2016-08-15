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
					z-index:99;
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
					$(function(){
						$.ajax({
							url:"<?php echo base_url();?>index.php/controller_message/update_data_status/",
							data:{
								number:'<?php echo $this->uri->segment(3);?>'
							},
							dataType:'json',
							cache:false,
							type: "POST",
							success:function(data){
							
							}
						});
					});				
				})
			</script>
			<div style="width:82.5%;float:left;height:100%;background-color:#ffffff;overflow:auto;">
				<div style="width:100%;height:53px;border-bottom:1px solid #e7ecf1;padding-top:53px;display:flex;align-items:center;color:#666">
					<div style="width:50%;text-align:left;">
						<div style="padding:0px 20px;">Home <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Messages <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Open Messages</div>
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
				<div style="padding:20px;float:left;background-color:#f9f9f9">
						<h2>
						Theard Message 
							<?php 
								$no = substr($this->uri->segment(3),0,2)=='62'?'+'.$this->uri->segment(3):$this->uri->segment(3);
								$name = $this->db->query("select contact_name from gocweb_contact where contact_number='".$no."' or contact_number='".$no."'");
								if($name->num_rows() > 0){
									foreach($name->result() as $nm){
										echo $nm->contact_name=''?'':$nm->contact_name.' ';
									}
								}
								echo '('.$no.')';
							?>
						
						</h2>
						<a href="<?php echo base_url().'index.php/controller_message/replay/'.$this->uri->segment(3);?>" style="bottom:10px;position:fixed;padding:10px;border:1px solid #f1f1f1;border-radius:5px;background-color:#55a747 !important;color:#fff;opacity:0.8;z-index:0;"><span class="fa fa-mail-reply fa-2x" style="margin-right:5px;"></span><span style="text-align:right;">Quick Reply</span></a>
						<div style="height:100%;;overflow:auto;background-color:#f9f9f9;">
						<?php
							$message= null;
							$date= null;
							
							if($inbox->num_rows() > 0){
								foreach($inbox->result() as $ibx){
									$message[] = 'inbox'.$ibx->TextDecoded;
									$date[] = $ibx->ReceivingDateTime;
								}
								
								foreach($outbox->result() as $otx){
									array_push($message, 'oubox'.$otx->text_msg);
									array_push($date, $otx->send_date);
								}
							}else if($inbox->num_rows() == 0){
								foreach($outbox->result() as $otx){
									$message[] = 'oubox'.$otx->text_msg;
									$date[] = $otx->send_date;
								}
							}
							
							array_multisort($date, SORT_DESC, $message);
							
							
							for($i=0;$i<count($message);$i++){
								if(substr($message[$i],0,5) == 'inbox'){
									echo "<div style='text-align:left;background:#e1e1e1;margin: 5px;margin-right: 50%;font-size:11px;padding:10px;border-radius:3px;box-shadow: 0 1px .5px rgba(0,0,0,.13);'>";
									echo "<div>".substr($message[$i],5)."</div>";
									echo "<div>".$date[$i]."</div>";
									echo "</div>";
								}else if(substr($message[$i],0,5) == 'oubox'){
									echo "<div style='text-align:right;background: #dcf8c6;margin: 5px;margin-left: 50%;font-size:11px;padding:10px;border-radius:3px;box-shadow: 0 1px .5px rgba(0,0,0,.13);'>";
									echo "<div>".substr($message[$i],5)."</div>";
									echo "<div>".$date[$i]."</div>";
									echo "</div>";
								}
							}
						?>
						</div>
				</div>