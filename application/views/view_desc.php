						<?php 
							foreach($data_desc->result() as $desc){
						?>
						<div style="width:90%;float:left; padding:40px;color:#444;font-size:11px;">
							<div style="width:100%;float:left;">
								<h3 style="text-align:center">DESKRIPSIKAN DIRI ANDA</h3>
								<div style="width:100%;float:left;margin-top:50px">
									<table>
										<tr>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Nama Lengkap</td>
											<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
											<td><?php echo $desc->pribadi_nama_lengkap;?></td>
										</tr>
										<tr>
											<td style="width:20%;padding:3px;word-wrap: break-word;">No. Pelamar</td>
											<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
											<td><?php echo $desc->resume_kode_lamaran;?></td>
										</tr>
										<tr>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Posisi</td>
											<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
											<td><?php echo $desc->Career_Title;?></td>
										</tr>
									</table>
								</div>
							</div>
							<div style="width:100%;float:left;margin-top:20px;border-bottom:1px dashed #666;padding:20px 0px;">
								<p style="text-align:justify;">Anda diminta untuk membuat 20 kalimat yang diawali dengan kata "Saya", yang isinya mendeskripsikan tentang keadaan diri Anda. Anda dapat menggambarkan kelebihan-kelebihan ataupun kekurangan-kekurangan diri Anda, hal-hal yang Anda sukai ataupun hal-hal yang ingin Anda capai dan sebagainya.</p>
								<p style="text-align:justify;">Anda tidak boleh mendeskripsikan ciri-ciri fisik atau data statistik Anda, misalnya : "Saya tinggi", "Saya berambut hitam","Saya lahir di Jakarta".</p>
							</div>
							<div style="width:100%;float:left;margin-top:20px;">
								<table style="width:100%;float:left;">
									<tr>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">1. <?php echo $desc->statement1;?></td>
										<td style="width:5%;padding:5px;word-wrap: break-word;"></td>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">11. <?php echo $desc->statement11;?></td>
									</tr>
									<tr>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">2. <?php echo $desc->statement2;?></td>
										<td style="width:5%;padding:5px;word-wrap: break-word;"></td>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">12. <?php echo $desc->statement12;?></td>
									</tr>
									<tr>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">3. <?php echo $desc->statement3;?></td>
										<td style="width:5%;padding:5px;word-wrap: break-word;"></td>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">13. <?php echo $desc->statement13;?></td>
									</tr>
									<tr>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">4. <?php echo $desc->statement4;?></td>
										<td style="width:5%;padding:5px;word-wrap: break-word;"></td>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">14. <?php echo $desc->statement14;?></td>
									</tr>
									<tr>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">5. <?php echo $desc->statement5;?></td>
										<td style="width:5%;padding:5px;word-wrap: break-word;"></td>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">15. <?php echo $desc->statement15;?></td>
									</tr>
									<tr>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">6. <?php echo $desc->statement6;?></td>
										<td style="width:5%;padding:5px;word-wrap: break-word;"></td>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">16. <?php echo $desc->statement16;?></td>
									</tr>
									<tr>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">7. <?php echo $desc->statement7;?></td>
										<td style="width:5%;padding:5px;word-wrap: break-word;"></td>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">17. <?php echo $desc->statement17;?></td>
									</tr>
									<tr>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">8. <?php echo $desc->statement8;?></td>
										<td style="width:5%;padding:5px;word-wrap: break-word;"></td>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">18. <?php echo $desc->statement18;?></td>
									</tr>
									<tr>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">9. <?php echo $desc->statement9;?></td>
										<td style="width:5%;padding:5px;word-wrap: break-word;"></td>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">19. <?php echo $desc->statement19;?></td>
									</tr>
									<tr>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">10. <?php echo $desc->statement10;?></td>
										<td style="width:5%;padding:5px;word-wrap: break-word;"></td>
										<td style="width:45%;padding:5px;word-wrap: break-word;border-bottom:1px dashed #666">20. <?php echo $desc->statement20;?></td>
									</tr>
								</table>
							</div>
						</div>
					<?php
					}
					?>
	