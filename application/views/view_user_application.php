			<div style="width:82.5%;float:left;height:100%;background-color:#ffffff;overflow:auto;">
				<div style="width:100%;height:53px;border-bottom:1px solid #e7ecf1;padding-top:53px;display:flex;align-items:center;color:#666">
					<div style="width:50%;text-align:left;">
						<div style="padding:0px 20px;">Home <span class="fa fa-angle-right" style="margin:0px 5px;"></span> User Application</div>
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
							
						</style>
						<table>
							<thead style="font-weight:600;">
								<tr>
									<td>Resume Code</td>
									<td>Name (User)</td>
									<td>Applying Date</td>
									<td>Position</td>
									<td>Department</td>
									<td>Data Test</td>
								</tr>
							</thead>
							<tbody>
							<?php if($user_app->num_rows() == 0){?>
								<tr>
									<td colspan="3">Data Application is Not Available</td>
								</tr>
							<?php }else{ 
									foreach($user_app->result() as $db){
									?>
								<tr>
									<td><?php echo $db->kode_lamaran;?></td>
									<td><?php echo $db->pribadi_nama_lengkap;?></td>
									<td><?php echo $db->resume_tgl_isi;?></td>
									<td><?php echo $db->Career_Title;?></td>
									<td><?php echo $db->Career_Departemen;?></td>
									<td>
										<a href='<?php echo base_url();?>index.php/controller_user_application/get_detail_resume/<?php echo $db->resume_kode_lamaran;?>' style='color:#666;font-size:12px;border:1px solid #e1e1e1;padding:3px 7px;text-decoration:none;border-radius:15px;'>Resume</a>
										<a href='<?php echo base_url();?>index.php/controller_user_application/get_detail_disc/<?php echo $db->resume_kode_lamaran;?>' style='color:#666;font-size:12px;border:1px solid #e1e1e1;padding:3px 7px;text-decoration:none;border-radius:15px;'>Test Disc</a>
										<a href='<?php echo base_url();?>index.php/controller_user_application/get_detail_desc/<?php echo $db->resume_kode_lamaran;?>' style='color:#666;font-size:12px;border:1px solid #e1e1e1;padding:3px 7px;text-decoration:none;border-radius:15px;'>Test Desc</a>
									</td>
								</tr>
							<?php 
								}
							}?>
							</tbody>
						</table>
						<div style="width:100%;float:left;">
							<div style="margin:20px 0px;float:left;"><?php echo $paging;?></div>
							<div style="float:left;margin:25px 20px;">
								<?php echo form_open('controller_user_application/search_application/');?>
									<select name="dept" style="padding:5px;border:none;border-bottom:1px solid #e1e1e1;outline:none;margin:0px 10px;color:#999;">
										<option value="" disabled selected> -- Select Department -- </option>
									<?php 
										$dept = $this->db->query("select distinct Career_Departemen from gocweb_career order by Career_Departemen desc");
										if($dept->num_rows() > 0){
											foreach($dept->result() as $dpt){
									?>
										<option value="<?php echo $dpt->Career_Departemen;?>"><?php echo $dpt->Career_Departemen;?></option>
									<?php 
											}
										}
									?>
									</select>
									<input name="search" type="text" style="padding:6px;border:none;border-bottom:1px solid #e1e1e1;outline:none;margin:0px 10px;color:#999;" placeholder="search"/>
									
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