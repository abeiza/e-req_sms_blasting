				<?php 
					foreach($data_detail->result() as $detail){
				?>
				<!-- Work Sheet -->
				
					<!-- Sheet Pertama -->
					
						<div style="width:90%;margin:30px 20px;color:#444;font-size:11px;">
							<div style="text-align:center;width:100%;">
								<h4 style="margin-bottom:0;padding-bottom:0;">Form HRD 3 - DATA ISIAN PELAMAR</h4>
								<span>(diisi oleh setiap calon karyawan)</span>
							</div>
							<div style="width:100%;float:left;margin-top:50px;">
								<table style="width:100%;float:left;">
									<tr>
										<td>Kode lamaran</td>
										<td>:</td>
										<td colspan="4"><?php echo $detail->resume_kode_lamaran;?></td>
										<td rowspan="14"><?php echo $detail->pribadi_foto==''?'&nbsp;':'<img src="'.base_url().'apply/original/'.$detail->pribadi_foto.'" style="height:200px;margin-left:20px;"/>';?></td>
									</tr>
									<tr>
										<td>Jabatan yang dilamar</td>
										<td>:</td>
										<td colspan="4"><?php echo $detail->Career_Title;?></td>
									</tr>
									<tr>
										<td>Tanggal Mengisi Formulir</td>
										<td>:</td>
										<td colspan="4"><?php echo $detail->resume_tgl_isi;?></td>
									</tr>
									<tr>
										<td colspan="6"><h4 style="border-bottom:1px dashed #999">I DATA PRIBADI</h4></td>
									</tr>
									<tr>
										<td>Nama Lengkap</td>
										<td>:</td>
										<td colspan="4"><?php echo $detail->pribadi_nama_lengkap;?></td>
									</tr>
									<tr>
										<td>Nama Panggilan</td>
										<td>:</td>
										<td colspan="4"><?php echo $detail->pribadi_nama_panggilan;?></td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>:</td>
										<td style="width:50%;padding:3px;word-wrap: break-word;" colspan="4"><?php echo $detail->pribadi_alamat;?></td>
									</tr>
									<tr>
										<td>Jenis Kelamin</td>
										<td>:</td>
										<td colspan="4"><?php 
												if($detail->pribadi_jk == 'L'){
													echo 'Laki-laki';
												}else if($detail->pribadi_jk == 'P'){
													echo 'Perempuan';
												}
											?></td>
									</tr>
									<tr>
										<td>No. Telp</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_telp;?></td>
										<td>No. Hp</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_hp;?></td>
									</tr>
									<tr>
										<td>Tempat / Tanggal Lahir</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_tempat;?> ,<?php echo $detail->pribadi_tgl_lahir;?></td>
										<td>Golongan Darah</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_gol_dar;?></td>
									</tr>
									<tr>
										<td>Pendidikan Terakhir</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_pendidikan;?></td>
										<td>Tahun Lulus</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_tgl_lulus;?></td>
									</tr>
									<tr>
										<td>Agama</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_agama;?></td>
										<td>Status</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_status;?></td>
									</tr>
									<tr>
										<td>Suku Bangsa</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_suku;?></td>
										<td>Kewarganegaraan</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_warganegara;?></td>
									</tr>
									<tr>
										<td>Berat & Tinggi Badan</td>
										<td>:</td>
										<td><?php echo $detail->pribadi_berat;?>kg / <?php echo $detail->pribadi_tinggi;?>cm</td>
										<td>No. Identitas</td>
										<td>:</td>
										<td style="width:20%;padding:3px;word-wrap: break-word;">No. <?php echo $detail->pribadi_type_iden;?> : <?php echo $detail->pribadi_no_iden;?></td>
									</tr>
								</table>
							</div>
							<div style="width:100%;float:left">
								<h4 style="border-bottom:1px dashed #999">II DATA KELUARGA</h4>
								<div style="width:100%;float:left;">
									<style>
										.check{
											font-weight:900;
											color:#fff;
											background:#444;
											padding:10px;
										}
									</style>
									<table>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Saudara tinggal di rumah</td>
											<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
											<td style="width:30%;padding:3px;word-wrap: break-word;">
										<span <?php if($detail->keluarga_rumah == 0){ echo "class='check'";}?> > a. Sendiri </span>&nbsp;&nbsp;  
										<span <?php if($detail->keluarga_rumah == 1){ echo "class='check'";}?> > b. Ortu </span>&nbsp;&nbsp;  
										<span <?php if($detail->keluarga_rumah == 2){ echo "class='check'";}?> > c. Sewa </span>&nbsp;&nbsp;  
										<span <?php if($detail->keluarga_rumah == 3){ echo "class='check'";}?> > d. Kost </span>&nbsp;&nbsp;  
										<span <?php if($detail->keluarga_rumah == 4){ echo "class='check'";}?> > e. <?php if($detail->keluarga_rumah == 4){ echo $detail->keluarga_rumah_desc;}?></span>
											</td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Saudara anak ke</td>
											<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
											<td style="width:30%;padding:3px;word-wrap: break-word;">
												<?php echo $detail->keluarga_anak_ke; ?> dari <?php echo $detail->keluarga_dari_brp; ?> bersaudara 
											</td>
										</tr>
									</table>
								</div>
								<div style="width:100%;float:left;">
								<style>
									table.detail_resume{
										border:1px solid #999;
										border-collapse:collapse;
										margin:10px 0px;
										width:100%;
									}
									
									table.detail_resume tr td{
										border:1px solid #999;
										border-collapse:collapse;
									}
								</style>
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td style="width:15%;padding:3px;word-wrap: break-word;">Orang Tua</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;">Nama</td>
												<td style="width:15%;padding:3px;word-wrap: break-word;">Usia</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;">Pendidikan</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;">Pekerjaan</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="width:15%;padding:3px;word-wrap: break-word;">Ayah</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_ayah_nama;?></td>
												<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_ayah_usia;?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_ayah_pendidikan;?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_ayah_pekerjaan;?></td>
											</tr>
											<tr>
												<td style="width:15%;padding:3px;word-wrap: break-word;">Ibu</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_ibu_nama;?></td>
												<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_ibu_usia;?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_ibu_pendidikan;?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_ibu_pekerjaan;?></td>
											</tr>
										</tbody>
									</table>
								</div>
								<table>
									<tr>
										<td style="width:15%;padding:3px;word-wrap: break-word;">Alamat Orang Tua</td>
										<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
										<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_alamat_ortu;?></td>
									</tr>
									<tr>
										<td style="width:15%;padding:3px;word-wrap: break-word;">Telp Orang Tua</td>
										<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
										<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_telp_ortu;?></td>
									</tr>
								</table>
								<table class="detail_resume" style="width:100%;">
									<thead>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Keluarga</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Nama</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Usia</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Pendidikan</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Pekerjaan</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Suami/Istri</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_pasangan_nama;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_pasangan_usia;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_pasangan_pendidikan;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_pasangan_pekerjaan;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Anak</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_satu_nama;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_satu_usia;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_satu_pendidikan;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_satu_pekerjaan;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Anak</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_dua_nama;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_dua_usia;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_dua_pendidikan;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_dua_pekerjaan;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Anak</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_tiga_nama;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_tiga_usia;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_tiga_pendidikan;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_anak_tiga_pekerjaan;?></td>
										</tr>
									</tbody>
								</table>
								<table class="detail_resume" width="100%">
									<thead>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Saudara Kandung</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Nama</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Usia</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Pendidikan</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Pekerjaan</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">
											<?php
												if($detail->keluarga_saudara_satu_status == 'K'){
													echo "<span>Kakak</span>/<span class='coret'>Adik</span>";
												}else if($detail->keluarga_saudara_satu_status == 'A'){
													echo "<span class='coret'>Kakak</span>/<span>Adik</span>";
												}else{
													echo "<span>Kakak</span>/<span>Adik</span>";
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_satu_nama;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_satu_usia;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_satu_pendidikan;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_satu_pekerjaan;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">
											<?php
												if($detail->keluarga_saudara_dua_status == 'K'){
													echo "<span>Kakak</span>/<span class='coret'>Adik</span>";
												}else if($detail->keluarga_saudara_dua_status == 'A'){
													echo "<span class='coret'>Kakak</span>/<span>Adik</span>";
												}else{
													echo "<span>Kakak</span>/<span>Adik</span>";
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_dua_nama;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_dua_usia;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_dua_pendidikan;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_dua_pekerjaan;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">
											<?php
												if($detail->keluarga_saudara_tiga_status == 'K'){
													echo "<span>Kakak</span>/<span class='coret'>Adik</span>";
												}else if($detail->keluarga_saudara_tiga_status == 'A'){
													echo "<span class='coret'>Kakak</span>/<span>Adik</span>";
												}else{
													echo "<span>Kakak</span>/<span>Adik</span>";
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_tiga_nama;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_tiga_usia;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_tiga_pendidikan;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_tiga_pekerjaan;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">
											<?php
												if($detail->keluarga_saudara_empat_status == 'K'){
													echo "<span>Kakak</span>/<span class='coret'>Adik</span>";
												}else if($detail->keluarga_saudara_empat_status == 'A'){
													echo "<span class='coret'>Kakak</span>/<span>Adik</span>";
												}else{
													echo "<span>Kakak</span>/<span>Adik</span>";
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_empat_nama;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_empat_usia;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_empat_pendidikan;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_empat_pekerjaan;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">
											<?php
												if($detail->keluarga_saudara_lima_status == 'K'){
													echo "<span>Kakak</span>/<span class='coret'>Adik</span>";
												}else if($detail->keluarga_saudara_lima_status == 'A'){
													echo "<span class='coret'>Kakak</span>/<span>Adik</span>";
												}else{
													echo "<span>Kakak</span>/<span>Adik</span>";
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_lima_nama;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_lima_usia;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_lima_pendidikan;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_saudara_lima_pekerjaan;?></td>
										</tr>
									</tbody>
								</table>
								<div style="width:100%;float:left;margin-top:5px;">
									Apabila terjadi kecelakaan / dalam keadaan darurat, siapakah yang bisa dihubungi
								</div>
								<table>
									<tr>
										<td style="width:15%;padding:3px;word-wrap: break-word;">Nama</td>
										<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
										<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_darurat_nama;?></td>
									</tr>
									<tr>
										<td style="width:15%;padding:3px;word-wrap: break-word;">Hubungan</td>
										<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
										<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_darurat_hubungan;?></td>
									</tr>
									<tr>
										<td style="width:15%;padding:3px;word-wrap: break-word;">Alamat & Telp</td>
										<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
										<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->keluarga_darurat_alamat;?></td>
									</tr>
								</table>
							</div>
							<div style="width:100%;float:left;margin:20px;">
								<h4 style="border-bottom:1px dashed #999">III RIWAYAT PENDIDIKAN</h4>
								<table class="detail_resume" style="width:100%;">
									<thead>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Pendidikan</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Nama Sekolah</td>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Kota</td>
											<td style="width:10%;padding:3px;word-wrap: break-word;">Tahun Masuk</td>
											<td style="width:10%;padding:3px;word-wrap: break-word;">Tahun Lulus</td>
											<td style="width:10%;padding:3px;word-wrap: break-word;">Jurusan</td>
											<td style="width:10%;padding:3px;word-wrap: break-word;">NEM/IPK</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">SD</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_nama_sekolah_sd;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_kota_sekolah_sd;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_tahun_masuk_sd;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_tahun_keluar_sd;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_jurusan_sd;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_nem_ipk_sd;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">SMP</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_nama_sekolah_smp;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_kota_sekolah_smp;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_tahun_masuk_smp;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_tahun_keluar_smp;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_jurusan_smp;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_nem_ipk_smp;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">SMU</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_nama_sekolah_smu;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_kota_sekolah_smu;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_tahun_masuk_smu;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_tahun_keluar_smu;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_jurusan_smu;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_nem_ipk_smu;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">AKADEMI / UNIV.</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_nama_sekolah_univ;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_kota_sekolah_univ;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_tahun_masuk_univ;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_tahun_keluar_univ;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_jurusan_univ;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_nem_ipk_univ;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">PASCA SARJANA</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_nama_sekolah_pasca;?></td>
											<td style="width:15%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_kota_sekolah_pasca;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_tahun_masuk_pasca;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_tahun_keluar_pasca;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_jurusan_pasca;?></td>
											<td style="width:10%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_nem_ipk_pasca;?></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div style="width:100%;float:left;margin:20px;">
								<h4 style="border-bottom:1px dashed #999">IV EKSTRAKURIKULER & AKTIVITAS SOSIAL</h4>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td style="width:30%;padding:3px;">Nama Organisasi / Aktivitas</td>
												<td style="width:20%;padding:3px;">Tahun</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;">Jabatan</td>
												<td style="width:20%;padding:3px;">Sertifikat Ada/Tidak</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="width:30%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_ekstra_satu_nama; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_ekstra_satu_tahun; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_ekstra_satu_tempat; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php 
													if($detail->pendidikan_ekstra_satu_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_ekstra_satu_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
											<tr>
												<td style="width:30%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_ekstra_dua_nama; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_ekstra_dua_tahun; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_ekstra_dua_tempat; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php 
													if($detail->pendidikan_ekstra_dua_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_ekstra_dua_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
											<tr>
												<td style="width:30%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_ekstra_tiga_nama; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_ekstra_tiga_tahun; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_ekstra_tiga_tempat; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php 
													if($detail->pendidikan_ekstra_tiga_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_ekstra_tiga_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="width:100%;float:left;margin:20px;">
								<h4 style="border-bottom:1px dashed #999">V KURSUS, SEMINAR, LOKAKARYA, PELATIHAN</h4>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td style="width:30%;padding:3px;word-wrap: break-word;">Nama Organisasi / Aktivitas</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;">Tahun</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;">Jabatan</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;">Sertifikat Ada/Tidak</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="width:30%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_aktivitas_satu_nama; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_aktivitas_satu_tahun; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_aktivitas_satu_tempat; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php 
													if($detail->pendidikan_aktivitas_satu_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_aktivitas_satu_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
											<tr>
												<td style="width:30%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_aktivitas_dua_nama; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_aktivitas_dua_tahun; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_aktivitas_dua_tempat; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php 
													if($detail->pendidikan_aktivitas_dua_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_aktivitas_dua_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
											<tr>
												<td style="width:30%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_aktivitas_tiga_nama; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_aktivitas_tiga_tahun; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pendidikan_aktivitas_tiga_tempat; ?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php 
													if($detail->pendidikan_aktivitas_tiga_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_aktivitas_tiga_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="width:100%;float:left;margin:20px;">
								<h4 style="border-bottom:1px dashed #999">VI INFORMASI PENDIDIKAN</h4>
								<div style="width:100%;float:left;">
									<table>
										<tr>
											<td colspan="4" style="padding:3px;word-wrap: break-word;">Prestasi/Karya Luar Biasa yang pernah Saudara raih selama pendidikan (misalnya : juara kelas, juara lomba, cum-laude, siswa teladan, dsb.)</td>
										</tr>
										<tr>
											<td colspan="2" style="padding:3px;word-wrap: break-word;">a. <?php echo $detail->pendidikan_prestasi_satu_nama==''?'-':$detail->pendidikan_prestasi_satu_nama;?></td>
											<td colspan="2" style="padding:3px;word-wrap: break-word;">Tahun : <?php echo $detail->pendidikan_prestasi_satu_tahun==0?'-':$detail->pendidikan_prestasi_satu_tahun;?></td>
										</tr>
										<tr>
											<td colspan="2" style="padding:3px;word-wrap: break-word;">b. <?php echo $detail->pendidikan_prestasi_dua_nama==''?'-':$detail->pendidikan_prestasi_dua_nama;?></td>
											<td colspan="2" style="padding:3px;word-wrap: break-word;">Tahun : <?php echo $detail->pendidikan_prestasi_dua_tahun==0?'-':$detail->pendidikan_prestasi_dua_tahun;?></td>
										</tr>
										<tr>
											<td colspan="2" style="padding:3px;word-wrap: break-word;">c. <?php echo $detail->pendidikan_prestasi_tiga_nama==''?'-':$detail->pendidikan_prestasi_tiga_nama;?></td>
											<td colspan="2" style="padding:3px;word-wrap: break-word;">Tahun : <?php echo $detail->pendidikan_prestasi_tiga_tahun==0?'-':$detail->pendidikan_prestasi_tiga_tahun;?></td>
										</tr>
										<tr>
											<td colspan="4" style="padding:3px;word-wrap: break-word;">Siapa yang membiayai pendidikan Saudara? <b><?php echo $detail->pendidikan_pertanyaan_satu;?></b></td>
										</tr>
										<tr>
											<td colspan="4" style="padding:3px;word-wrap: break-word;">Pelajaran apakah yang paling Saudara sukai? <b><?php echo $detail->pendidikan_pertanyaan_dua;?></b></td>
										</tr>
										<tr>
											<td colspan="4" style="padding:3px;word-wrap: break-word;">Tulisan/karya ilmiah yang pernah Saudara tulis (Skripsi, Artikel, Buku, dsb.)</td>
										</tr>
										<tr>
											<td colspan="4" style="padding:3px;word-wrap: break-word;">Judul : <?php echo $detail->pendidikan_judul_karya;?></td>
										</tr>
										<tr>
											<td colspan="4" style="padding:3px;word-wrap: break-word;">Tahun : <?php echo $detail->pendidikan_tahun_karya;?></td>
										</tr>
										<tr>
											<td colspan="4" style="padding:3px;word-wrap: break-word;">Topik Bahasan : <?php echo $detail->pendidikan_topik_karya;?></td>
										</tr>
										<tr>
											<td colspan="4" style="padding:3px;word-wrap: break-word;">Bahasa asing/daerah yang dikuasai </td>
										</tr>
										<style>
										.coret{
											text-decoration:line-through;
										}
										</style>
										<tr>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Bahasa : <?php echo $detail->pendidikan_bahasa_satu;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Menulis : <?php 
												if($detail->pendidikan_bahasa_satu_menulis == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_satu_menulis == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Membaca : <?php 
												if($detail->pendidikan_bahasa_satu_membaca == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_satu_membaca == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Berbicara : <?php 
												if($detail->pendidikan_bahasa_satu_berbicara == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_satu_berbicara == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
											</td>
										</tr>
										<tr>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Bahasa : <?php echo $detail->pendidikan_bahasa_dua;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Menulis : <?php 
												if($detail->pendidikan_bahasa_dua_menulis == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_dua_menulis == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Membaca : <?php 
												if($detail->pendidikan_bahasa_dua_membaca == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_dua_membaca == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Berbicara : <?php 
												if($detail->pendidikan_bahasa_dua_berbicara == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_dua_berbicara == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
											</td>
										</tr>
										<tr>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Bahasa : <?php echo $detail->pendidikan_bahasa_tiga;?></td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Menulis : <?php 
												if($detail->pendidikan_bahasa_tiga_menulis == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_tiga_menulis == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Membaca : <?php 
												if($detail->pendidikan_bahasa_tiga_membaca == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_tiga_membaca == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
											</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;">Berbicara : <?php 
												if($detail->pendidikan_bahasa_tiga_berbicara == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_tiga_berbicara == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<div style="width:100%;float:left;margin:20px;">
								<h4 style="border-bottom:1px dashed #999">VII HAL-HAL YANG BERHUBUNGAN DENGAN DIRI PELAMAR</h4>
								<table>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Apa hobby Saudara? <b><?php echo $detail->other_pertanyaan_a;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Bagaimana cara Saudara mengisi waktu luang? <b><?php echo $detail->other_pertanyaan_b;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Majalah/Surat Kabar yang dibaca? <b><?php echo $detail->other_pertanyaan_c;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Masalah/Topik yang diminati? <b><?php echo $detail->other_pertanyaan_d;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Pernahkah Saudara menderita sakit keras? <b><?php echo $detail->other_pertanyaan_e;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Pernahkah Saudara dioperasi/dirawat di RS? <b><?php echo $detail->other_pertanyaan_f;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Pernahkah Saudara mengalami kecelakaan? <b><?php echo $detail->other_pertanyaan_g;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Apakah Saudara memakai kacamata? <b><?php echo $detail->other_pertanyaan_h;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Apakah Saudara merokok? <b><?php echo $detail->other_pertanyaan_i;?></b></td>
									</tr>
								</table>
							</div>
							<div style="width:100%;float:left;margin:20px;">
								<h4 style="border-bottom:1px dashed #999">VIII RIWAYAT PEKERJAAN (Mulai dari yang terakhir / tempat sekarang bekerja)</h4>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Lamanya bekerja</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_lama;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_lama;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_lama;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Nama Perusahaan</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_nama;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_nama;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_nama;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Alamat & Telp</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_alamat_telp;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_alamat_telp;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_alamat_telp;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Bergerak dalam bidang</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_bidang;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_bidang;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_bidang;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Jabatan terakhir</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_jabatan;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_jabatan;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_jabatan;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Nama atasan langsung</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_nama_atasan;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_nama_atasan;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_nama_atasan;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Gaji pokok</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_gapok;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_gapok;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_gapok;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Tunjangan</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_tunjangan;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_tunjangan;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_tunjangan;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Fasilitas</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_fasilitas;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_fasilitas;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_fasilitas;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Uraikan Tugas & Tanggung Jawab Saudara pada jabatan terakhir</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_tugas;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_tugas;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_tugas;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Alasan keluar</td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_satu_alasan;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_dua_alasan;?></td>
											<td style="width:25%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_tiga_alasan;?></td>
										</tr>
									</table>
								</div>
								<div style="width:100%;float:left;">
									<div style="width:90%;floatW:left;margin:10px 5px">
									Apakah saat ini Saudara melamar pula pada perusahaan lain? <b><?php echo $detail->pekerjaan_pertanyaan_satu==1?'<span>Ya</span> / <span class="coret">Tidak</span>':'<span  class="coret">Ya</span> / <span>Tidak</span>';?></b>
									</div>
									<table>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Nama Perusahaan</td>
											<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_perusahaan_lain_nama==''?'-':$detail->pekerjaan_perusahaan_lain_nama;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Sebagai</td>
											<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_lain_sebagai==''?'-':$detail->pekerjaan_lain_sebagai;?></td>
										</tr>
										<tr>
											<td style="width:15%;padding:3px;word-wrap: break-word;">Kapan</td>
											<td style="width:1%;padding:3px;word-wrap: break-word;">:</td>
											<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_lain_kapan==''?'-':$detail->pekerjaan_lain_kapan;?></td>
										</tr>
									</table>
								</div>
								<div style="width:100%;float:left;">
									Berikan 3 nama referensi (orang yang dapat memberikan informasi mengenai karakter dan kemampuan Saudara)
								</div>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td style="width:20%;padding:3px;word-wrap: break-word;">Nama</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;">Pekerjaan/Jabatan</td>
												<td style="width:30%;padding:3px;word-wrap: break-word;">Alamat</td>
												<td style="width:20%;padding:3px;word-wrap: break-word;">No. Telp</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_satu_nama==''?'-':$detail->pekerjaan_referensi_satu_nama;?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_satu_jabatan==''?'-':$detail->pekerjaan_referensi_satu_jabatan;?></td>
												<td style="width:30%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_satu_alamat==''?'-':$detail->pekerjaan_referensi_satu_alamat;?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_satu_telp==''?'-':$detail->pekerjaan_referensi_satu_telp;?></td>
											</tr>
											<tr>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_dua_nama==''?'-':$detail->pekerjaan_referensi_dua_nama;?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_dua_jabatan==''?'-':$detail->pekerjaan_referensi_dua_jabatan;?></td>
												<td style="width:30%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_dua_alamat==''?'-':$detail->pekerjaan_referensi_dua_alamat;?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_dua_telp==''?'-':$detail->pekerjaan_referensi_dua_telp;?></td>
											</tr>
											<tr>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_tiga_nama==''?'-':$detail->pekerjaan_referensi_tiga_nama;?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_tiga_jabatan==''?'-':$detail->pekerjaan_referensi_tiga_jabatan;?></td>
												<td style="width:30%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_tiga_alamat==''?'-':$detail->pekerjaan_referensi_tiga_alamat;?></td>
												<td style="width:20%;padding:3px;word-wrap: break-word;"><?php echo $detail->pekerjaan_referensi_tiga_telp==''?'-':$detail->pekerjaan_referensi_tiga_telp;?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="width:90%;float:left;margin:20px;">
								<h4 style="border-bottom:1px dashed #999">IX HAL-HAL YANG BERHUBUNGAN DENGAN LAMARAN KERJA</h4>
								<table style="width:100%;float:left;">
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Apakah Saudara pernah melamar di PT Gloria Origita Cosmetic sebelumnya? <b><?php echo $detail->other_pertanyaan_j;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Darimana Saudara mengetahui adanya lowongan ini? <b><?php echo $detail->other_pertanyaan_k;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Adakah karyawan yang bekerja pada perusahaan ini yang Saudara kenal? <b><?php echo $detail->other_pertanyaan_l;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Alasan/Tujuan Saudara melamar di PT. Gloria Origita Cosmetic? <b><?php echo $detail->other_pertanyaan_m;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Apakah Saudara bersedia tugas di Luar Jam Kerja & Tugas Luar Kota? <b><?php echo $detail->other_pertanyaan_n;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Apakah Saudara bersedia ditempatkan di Luar Kota? <b><?php echo $detail->other_pertanyaan_o;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Gaji yang Saudara harapkan? <b><?php echo $detail->other_pertanyaan_p;?></b></td>
									</tr>
									<tr>
										<td style="width:80%;padding:3px;word-wrap: break-word;">Jika Saudara diterima di PT. Gloria Origita Cosmetic, kapan Saudara siap untuk berkerja? <b><?php echo $detail->other_pertanyaan_q;?></b></td>
									</tr>
								</table>
							</div>
							<div style="width:100%;float:left">
								<div style="width:80%;Float:left;margin:20px;">
								Formulir Lamaran ini saya isi sendiri dengan sejujur-jujurnya sesuai dengan kenyataan sebenarnya, Apabila di kemudian hari terdapat keterangan yang tidak benar, saya bersedia dituntut sesuai hukum dan peraturan yang berlaku.
								</div>
								<div style="width:30%;margin-left:500px;margin-top:20px;text-align:center;">
									...........................,......./....../.......
									<br/>
									Nama & Tanda Tangan Pelamar
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									( <?php echo $detail->pribadi_nama_lengkap;?> )
								</div>
							</div>
						</div>
					
					<!-- End of sheet pertama -->
				
				<!-- End of Worksheet -->
				<?php 
					}
				?>