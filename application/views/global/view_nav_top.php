			<div style="width:100%;float:left;height:53px;background-color:#2b3643;position:fixed;z-index:99;">
				<div style="width:17.5%;float:left;height:100%;padding:7px 0px; padding-left:25px;"><h3>e-Recruitment</h3></div>
				<div style="width:17.5%;float:left;height:100%;padding-top:12px"><span class="fa fa-search" style="color:#fff;padding-right:20px;"></span><input style="background-color:transparent;border:none;outline:none;color:#fff;border-bottom:1px solid #fff;padding:5px 3px;" type="text"/></div>
				<div style="width:5%;float:right;height:100%;display:flex;align-items:center;"><a href="<?php echo base_url();?>index.php/controller_connect/logout_act" style="margin:auto;text-align:center;color:#999; text-decoration:none;"><span style="color:#fff;text-align:center;margin:0px auto;" class="fa fa-sign-out"></span></a></div>
				<div class="options" style="float:right;height:100%;display:flex;align-items:center;padding:0px 10px;">
					<ul>
						<li>
							<span style="color:#fff;" class="fa fa-user"></span>
							<span style="color:#fff;padding-left:10px;"><?php echo $this->session->userdata('user_nick');?></span>
						</li>
						<li>
							<ul class="sub" style="color:#999;z-index:999;position:absolute">
								<li><a href="<?php echo base_url();?>index.php/controller_settings/my_account" style="color:#999; text-decoration:none;"><span class="fa fa-user" style="margin:0px 10px 0px 0px;"></span>My Profile</a></li>
								<li><a href="<?php echo base_url();?>index.php/controller_settings" style="color:#999; text-decoration:none;"/><span class="fa fa-gear" style="margin:0px 10px 0px 0px;"></span>Settings</a></li>
								<li><a href="<?php echo base_url();?>index.php/controller_connect/logout_act" style="color:#999; text-decoration:none;"><span class="fa fa-sign-out" style="margin:0px 10px 0px 0px;"></span>Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="bell" style="width:3%;float:right;height:100%;display:flex;align-items:center;">
					<ul style="width:100%;">
						<li style="text-align:center;">
							<span style="color:#fff;margin:0px auto;" class="fa fa-bell-o"></span>
							<?php if($inbox->num_rows > 0){?>
							<div style="background: red;color: #fff;float: left;position: absolute;padding: 2px 5px;border-radius: 100px;font-size: 11px;top:14px;">
								<?php 
									if($inbox->num_rows > 10){
										echo "...";
									}else{
										echo $inbox->num_rows;
									}
								?>
							</div>
							<?php }?>
						</li>
						<li>
							<ul class="sub" style="color:#999;z-index:999;position:absolute;height:500px;width:200px;overflow:auto;">
								<?php if($inbox->num_rows > 0){?>
									<a style="color:#999;text-decoration:none;" href="<?php echo base_url().'index.php/controller_message/inbox/';?>">
									<li style="text-align:center;">-- See All --</li></a>
									<?php foreach($inbox->result() as $nav){?>
											<a style="color:#999;text-decoration:none;" href="<?php echo base_url().'index.php/controller_message/open/'; echo substr($nav->Sender_Number,0,1)=='+'?substr($nav->Sender_Number,1,50):$nav->Sender_Number;?>"><li><span class="fa fa-envelope" style="margin:0px 10px 0px 0px;"></span><b><?php 
											
											$no =  $nav->Sender_Number;
											$name = $this->db->query("select contact_name from gocweb_contact where contact_number='".$no."' or contact_number='".$no."'");
											if($name->num_rows() > 0){
												foreach($name->result() as $nm){
													echo $nm->contact_name=''?'':$nm->contact_name.'<br/>';
												}
											}
											echo '('.$no.')';
											?></b><br/><span style="font-size:11px;"><?php echo substr($nav->TextDecoded,0,50).'...';?></span></li></a>
									<?php }?>
								<?php }else{?>
									<li style="text-align:center;">-- New Message is Empty --</li>
								<?php }?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			