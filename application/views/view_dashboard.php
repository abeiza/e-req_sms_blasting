				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
				<style type="text/css">
					${demo.css}
				</style>
				<script type="text/javascript">
				$(function () {
					$('#container').highcharts({
						title: {
							text: 'Statistic Data SMS Blast',
							x: -20 //center
						},
						subtitle: {
							text: 'www.goc.co.id',
							x: -20
						},
						xAxis: {
							categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
								'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
						},
						yAxis: {
							title: {
								text: 'Total Messages'
							},
							plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
							}]
						},
						tooltip: {
							valueSuffix: 'sms'
						},
						legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'middle',
							borderWidth: 0
						},
						series: [{
							name: 'SMS IN',
							data: [
								<?php 
									for($i = 1; $i <= 12;$i++){
										$data = $this->db->query("select * from gocweb_inbox where DATEPART(yyyy, ReceivingDateTime) = YEAR(getdate()) and DATEPART(m, ReceivingDateTime) = ".$i."");
										if($data->num_rows() == 0 || $data->num_rows() == ''){
												echo '0.0,';
										}else{
											//foreach($data->result() as $d){
												echo $data->num_rows().'.0,';
											//}
										}
									}
								?>
							]
						}, {
							name: 'SMS OUT',
							data: [
								<?php 
									for($i = 1; $i <= 12;$i++){
										$data = $this->db->query("select * from gocweb_outbox where DATEPART(yyyy, send_date) = YEAR(getdate()) and DATEPART(m, send_date) = ".$i."");
										if($data->num_rows() == 0 || $data->num_rows() == ''){
												echo '0.0,';
										}else{
											//foreach($data->result() as $d){
												echo $data->num_rows().'.0,';
											//}
										}
									}
								?>
							]
						}]
					});
				});
			</script>
			<div style="width:82.5%;float:left;height:100%;background-color:#ffffff;overflow:auto;">
				<div style="width:100%;height:53px;border-bottom:1px solid #e7ecf1;padding-top:53px;display:flex;align-items:center;color:#666">
					<div style="width:50%;text-align:left;">
						<div style="padding:0px 20px;">Home <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Dashboard</div>
					</div>
					<div style="width:50%;text-align:right;">
						<div style="padding:0px 20px;"><?php echo date('l, F jS Y');?></div>
					</div>
				</div>
				<div style="width:100%;float:left;border-bottom:1px solid #e7ecf1;color:#666;background-position-y:-441px;background-position-x:-583px;background-image:url('<?php echo base_url();?>assets/pattern/worl-white.png');background-color:#fff;">
					<div style="padding:20px;">
						<h1 style="margin-bottom:5px;">Dashboard</h1><span>Dashboard & Statistics</span>
					</div>
				</div>
				<div style="width:100%;float:left;color:#666;background-color:#F4F4F4;">
					<div style="overflow:hidden;width:30%;margin:1.5%;height:150px;border:1px solid #e1e1e1;float:left;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.05),0 3px 1px -2px rgba(0,0,0,.16),0 1px 5px 0 rgba(0,0,0,.12);">
						<div style="padding:20px;">
							<h2>All Message</h2>
							<h1 style="float:left;margin-top:-10px;font-weight:normal;font-size:40px;"><span style="font-size:11px;">Inbox</span><?php echo $c_inbox->num_rows();?> / <?php echo $c_outbox->num_rows();?><span style="font-size:11px;">Outbox</span></h1><div style="margin-top:-59px;float:left;margin-left:51px;">This Month</div>
						</div>
						<div class="fa fa-envelope-o" style="font-size:130px;float: right;margin-top: -64px;margin-right: -9px;color:#f1f1f1"></div>
					</div>
					
					<div style="overflow:hidden;width:30%;margin:1.5%;height:150px;border:1px solid #e1e1e1;float:left;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.05),0 3px 1px -2px rgba(0,0,0,.16),0 1px 5px 0 rgba(0,0,0,.12);">
						<div style="padding:20px;">
							<h2>Job Vacancy</h2>
							<h1 style="float:left;margin-top:-10px;font-weight:normal;font-size:48px;"><?php echo $c_posting->num_rows();?></h1><div style="margin-top:10px;float:left;margin-left:10px;">This Month</div>
						</div>
						<div class="fa fa-newspaper-o" style="font-size:130px;float: right;margin-top: -64px;margin-right: -9px;color:#f1f1f1"></div>
					</div>
						
					<div style="overflow:hidden;width:30%;margin:1.5%;height:150px;border:1px solid #e1e1e1;float:left;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.05),0 3px 1px -2px rgba(0,0,0,.16),0 1px 5px 0 rgba(0,0,0,.12);">
						<div style="padding:20px;">
							<h2>Applications</h2>
							<div style="margin-top:10px;float:left;margin-left:10px;">Total</div><h1 style="float:left;margin-top:-10px;margin-left:10px;font-weight:normal;font-size:48px;"><?php echo $c_application->num_rows();?></h1><div style="margin-top:10px;float:left;margin-left:10px;">Applications</div>
						</div>
						<div class="fa fa-paperclip" style="font-size:130px;float: right;margin-top: -64px;margin-right: -9px;color:#f1f1f1"></div>
					</div>
					<script src="<?php echo base_url();?>assets/highchart/js/highcharts.js"></script>
					<script src="<?php echo base_url();?>assets/highchart/js/modules/exporting.js"></script>
					
					<div style="overflow:hidden;width:96.5%;margin:0.75% 1.5%;border:1px solid #e1e1e1;float:left;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.05),0 3px 1px -2px rgba(0,0,0,.16),0 1px 5px 0 rgba(0,0,0,.12);">
						<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto;margin:20px;"></div>
					</div>
						
				</div>
			</div>