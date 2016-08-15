			<div style="width:82.5%;float:left;height:100%;background-color:#ffffff;overflow:auto;">
				<div style="width:100%;height:53px;border-bottom:1px solid #e7ecf1;padding-top:53px;display:flex;align-items:center;color:#666">
					<div style="width:50%;text-align:left;">
						<div style="padding:0px 20px;">Home <span class="fa fa-angle-right" style="margin:0px 5px;"></span> User Application <span class="fa fa-angle-right" style="margin:0px 5px;"></span> User (Deskripsi)</div>
					</div>
					<div style="width:50%;text-align:right;">
						<div style="padding:0px 20px;"><?php echo date('l, F jS Y');?></div>
					</div>
				</div>
				<div style="width:100%;float:left;border-bottom:1px solid #e7ecf1;color:#666;background-position-y:-441px;background-position-x:-583px;background-image:url('<?php echo base_url();?>assets/pattern/worl-white.png');background-color:#fff;">
					<div style="padding:20px;">
						<h1 style="margin-bottom:5px;">Data Application</h1><span>Resume & Psychological Test</span>
					</div>
				</div>
				<div style="width:100%;float:left;color:#666;">
					<div style="border:1px solid #e1e1e1; margin:2%;padding:3%;width:90%;float:left;">
						<?php 
					foreach($data_desc->result() as $desc){
				?>
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;float:left;"><i class="fa fa-tasks" style="margin-right:10px"></i>Test Disc</h2>
						<div style="margin-top:25px;float:left;margin-left:10px;"><a href="<?php echo base_url().'index.php/controller_user_application/index/'?>" style="color:#666;text-decoration:none;"><i class="fa fa-long-arrow-left"></i> Back to Grid</a></div>
						<div style="margin-top:25px;float:left;margin-left:10px;"><a style="border-radius:5px;text-decoration:none;color:#fff;background-color:#8dc43f;margin:10px;padding:10px;" href="<?php echo base_url().'index.php/controller_user_application/generate_desc/'.$desc->resume_kode_lamaran;?>">Generate to PDF</a></div>
					</div>
				</div>
				<!-- End of header -->
				<!-- Separator -->
				<div style="float:left;width:100%;height:0.5%;background:#64c0cc;color:#787878;">
				</div>
				<!-- End of separator -->
				
				<!-- Work Sheet -->
				<div style="float:left;width:100%;height:auto;background:#f9f9f9;">
					<!-- Sheet Pertama -->
					<div style="float:left;margin:10px 2%;width:96%;background-color:#fff; border-radius:3px; border:1px solid #f1f1f1;color:rgb(120, 120, 120)">
						<div style="width:90%;float:left; padding:5%;">
							<div style="width:100%;float:left;">
								<h3 style="text-align:center">DESKRIPSIKAN DIRI ANDA</h3>
								<div style="width:100%;float:left;">
									<div style="width:18%;float:left;">Nama Lengkap</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:79%;float:left;"><?php echo $desc->pribadi_nama_lengkap;?></div>
									
									<div style="width:18%;float:left;">No. Pelamar</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:79%;float:left;"><?php echo $desc->resume_kode_lamaran;?></div>
									
									<div style="width:18%;float:left;">Posisi</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:79%;float:left;"><?php echo $desc->Career_Title;?></div>
								</div>
							</div>
							<div style="width:100%;float:left;margin-top:20px;border-bottom:1px dashed #666;">
								<p style="text-align:justify;">Anda diminta untuk membuat 20 kalimat yang diawali dengan kata "Saya", yang isinya mendeskripsikan tentang keadaan diri Anda. Anda dapat menggambarkan kelebihan-kelebihan ataupun kekurangan-kekurangan diri Anda, hal-hal yang Anda sukai ataupun hal-hal yang ingin Anda capai dan sebagainya.</p>
								<p style="text-align:justify;">Anda tidak boleh mendeskripsikan ciri-ciri fisik atau data statistik Anda, misalnya : "Saya tinggi", "Saya berambut hitam","Saya lahir di Jakarta".</p>
							</div>
							<div style="width:100%;float:left;margin-top:20px;">
								<div style="width:50%;float:left;">
									<div style="width:5%;float:left;">1.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement1;?></div>
									<div style="width:5%;float:left;">2.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement2;?></div>
									<div style="width:5%;float:left;">3.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement3;?></div>
									<div style="width:5%;float:left;">4.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement4;?></div>
									<div style="width:5%;float:left;">5.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement5;?></div>
									<div style="width:5%;float:left;">6.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement6;?></div>
									<div style="width:5%;float:left;">7.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement7;?></div>
									<div style="width:5%;float:left;">8.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement8;?></div>
									<div style="width:5%;float:left;">9.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement9;?></div>
									<div style="width:5%;float:left;">10.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement10;?></div>
								</div>
								<div style="width:50%;float:left;">
									<div style="width:5%;float:left;">11.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement11;?></div>
									<div style="width:5%;float:left;">12.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement12;?></div>
									<div style="width:5%;float:left;">13.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement13;?></div>
									<div style="width:5%;float:left;">14.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement14;?></div>
									<div style="width:5%;float:left;">15.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement15;?></div>
									<div style="width:5%;float:left;">16.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement16;?></div>
									<div style="width:5%;float:left;">17.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement17;?></div>
									<div style="width:5%;float:left;">18.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement18;?></div>
									<div style="width:5%;float:left;">19.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement19;?></div>
									<div style="width:5%;float:left;">20.</div>
									<div style="width:92%;float:left;border-bottom:1px solid #999;padding:5px 0px;">&nbsp;<?php echo $desc->statement20;?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
					}
				?>
					</div>
				</div>
			</div>