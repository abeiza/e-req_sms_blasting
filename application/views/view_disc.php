				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
				<?php 
					foreach($data_disc->result() as $disc){
				?>
				<div style="width:100%;float:left;padding:40px;color:#444;font-size:11px;">
					<div style="width:100%;float:left;">
						<h4>DISC Profile Test</h4>
						<div style="width:100%;float:left;">
							<table style="width:100%;">
								<tr>
									<td style="width:20%;padding:3px;word-wrap: break-word;">Nama Lengkap</td>
									<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
									<td><?php echo $disc->pribadi_nama_lengkap;?></td>
								</tr>
								<tr>
									<td style="width:20%;padding:3px;word-wrap: break-word;">No. Pelamar</td>
									<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
									<td><?php echo $disc->resume_kode_lamaran;?></td>
								</tr>
								<tr>
									<td style="width:20%;padding:3px;word-wrap: break-word;">Posisi</td>
									<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
									<td><?php echo $disc->Career_Title;?></td>
								</tr>
							</table>
						</div>
					</div>
					<div style="width:95%;float:left;margin-top:20px;display:inline">
					<style>
						.check{
							background:#444;
						}
						
						.table-data{
							border:1px solid #444;
							padding:10px;
							border-radius:5px;
						}
						
						.table-data tr td{
							padding:0px 10px;
						}
					</style>
						<table style="width:100%;float:left;">
							<tr>
								<td style="width:49%">
									<table style="width:98%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right;">-- 1 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement1_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement1_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Lembut, Ramah</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement1_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement1_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Membujuk, Meyakinkan</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement1_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement1_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Sederhana, Mudah Menerima, Rendah Hati</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement1_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement1_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Asli, Berdayacipta, Individualis</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right;">-- 13 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement13_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement13_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Agresif, suka tantangan, penuh inisiatif</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement13_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement13_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Menyukai hiburan, ramah, suka pesta/acara kumpul</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement13_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement13_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Pengikut, mudah digunadayakan oleh orang lain</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement13_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement13_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Gelisah, khawatir</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right;">-- 2 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement2_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement2_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Menarik, Mempesona, Menarik bagi orang lain</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement2_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement2_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Dapat bekerja sama, mudah menyetujui</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement2_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement2_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Keras kepala, tidak mudah menyerah</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement2_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement2_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Manis, memuaskan/menyenangkan</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 14 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement14_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement14_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Berhati-hati</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement14_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement14_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Fokus pada hal tertentu, tidak mudah goyah</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement14_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement14_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Meyakinkan</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement14_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement14_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Baik hati, menyenangkan</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 3 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement3_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement3_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Mau dipimpin, cenderung mengikuti/pengikut</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement3_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement3_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Tangguh, berani</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement3_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement3_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Loyal, setia, mengabdi</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement3_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement3_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Mempesona, menyenangkan</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 15 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement15_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement15_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Rela berkorban, mengikuti arus</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement15_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement15_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Antusias, selalu ingin tahu</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement15_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement15_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Mudah menyetujui</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement15_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement15_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Lincah, antusiasi</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 4 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement4_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement4_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Berpandangan terbuka, mau menerima</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement4_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement4_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Tegar, suka menolong</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement4_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement4_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Tekun, berkemauan keras</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement4_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement4_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Periang, selalu bergembira</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 16 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement16_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement16_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Percaya diri, yakin pada diri sendiri</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement16_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement16_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Simpatik, orang yang pengertian</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement16_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement16_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Toleran</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement16_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement16_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Tegas, agresif</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 5 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement5_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement5_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Periang, suka bergurau</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement5_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement5_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Teliti, tepat</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement5_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement5_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Kasar, berani, kurang sopan, tidak mudah malu</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement5_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement5_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Tenang, emosi yang terkendali, tidak mudah heboh</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 17 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement17_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement17_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Disiplin, terkendali</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement17_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement17_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Dermawan, suka berbagi</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement17_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement17_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Suka berekspresi</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement17_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement17_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Gigih, tidak mudah menyerah</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right;">-- 6 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement6_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement6_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Kompetitif, selalu ingin berhasil</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement6_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement6_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Timbang rasa, peduli, bijaksana</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement6_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement6_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Terbuka, ramah, suka senang-senang</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement6_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement6_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Harmonis, mudah menyetujui</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 18 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement18_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement18_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Terpuji, dapat dikagumi, patut dipuji</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement18_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement18_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Ramah, Senang menolong</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement18_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement18_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Mudah menyerah/menerima pendapat yang lain</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement18_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement18_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Memiliki karakter kuat, tangguh</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right;">-- 7 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement7_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement7_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Rewel, cerewet, sulit untuk dipuaskan hatinya</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement7_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement7_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Taat, melakukan apa yang diperintahkan patuh</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement7_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement7_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Tidak mudah mundur, fokus akan satu hal, ulet</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement7_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement7_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Suka melucu, lincah, periang</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right;">-- 19 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement19_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement19_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Menunjukkan rasa hormat</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement19_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement19_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Pelopor, perintis, giat, mau berusaha</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement19_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement19_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Optimis, pandangan positif</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement19_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement19_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Selalu siap untuk membantu</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 8 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement8_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement8_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Berani, tidak gentar, tangguh</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement8_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement8_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Membangkitkan semangat, memotivasi</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement8_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement8_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Patuh, berhasil, menyerah</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement8_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement8_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Takut-takut, malu, pendiam</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 20 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement20_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement20_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Dapat berargumentasi</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement20_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement20_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Fleksibel, mudah beradaptasi</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement20_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement20_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Tak peduli, acuh tak acuh, tidak perhatian</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement20_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement20_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Riang, tiada yang difikirkan sama sekali</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 9 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement9_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement9_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Suka bergaul dan bersosialisasi</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement9_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement9_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Sabar, penuh keyakinan, bersikap toleransi</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement9_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement9_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Percaya diri, mandiri</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement9_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement9_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Berwatak halus/lembut, pendiam, suka menyendiri</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right;">-- 21 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement21_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement21_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Dapat dipercaya, percaya kepada orang lain</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement21_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement21_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Mudah puas, selalu merasa cukup</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement21_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement21_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Selalu positif, tidak diragukan</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement21_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement21_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Tenang, pendiam</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 10 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement10_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement10_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Menyukai hal-hal baru, suka tantangan</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement10_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement10_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Terbuka dan mau menerima ide-ide baru dan saran</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement10_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement10_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Ramah, hangat, bersahabat</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement10_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement10_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Moderat, menghindari hal-hal yang ekstrim atau aneh</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 22 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement22_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement22_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Mudah bergaul, suka berteman</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement22_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement22_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Berbudaya, memiliki banyak pengetahuan</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement22_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement22_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Bersemangat, Giat</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement22_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement22_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Toleransi, tidak tegas</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 11 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement11_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement11_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Banyak bicara, cerewet</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement11_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement11_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Terkendali, mudah diatur</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement11_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement11_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Melakukan hal-hal yang sudah biasa, tidak berlebihan</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement11_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement11_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Tegas, cepat dalam membuat keputusan</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 23 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement23_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement23_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Menyenangkan, ramah</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement23_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement23_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Teliti, akurat</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement23_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement23_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Terus terang, bicara bebas</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement23_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement23_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Terkendali, emosi yang terkendali</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="width:49%">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 12 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement12_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement12_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Berbudi bahasa halus, tingkah laku yang halus</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement12_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement12_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Berani, suka mengambil resiko</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement12_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement12_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Diplomatik, bijaksana</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement12_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement12_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Mudah puas atau senang</td>
										</tr>
									</table>
								</td>
								<td style="width:2%;">&nbsp;</td>
								<td style="width:49%;">
									<table style="width:100%;float:left;" class="table-data">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">M</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;text-align:center;">L</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;text-align:right">-- 24 --</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement24_m==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement24_l==1?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Resah, tidak biasa santai</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement24_m==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement24_l==2?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Baik hati, ramah</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement24_m==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement24_l==3?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Populer, disukai banyak orang</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement24_m==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;" <?php echo $disc->disc_statement24_l==4?'class="check"':''?> >&nbsp;</td>
											<td style="width:69%;padding:3px;word-wrap: break-word;">Rapi, teratur</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<?php
					}
				?>