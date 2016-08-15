			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<div style="width:82.5%;float:left;height:100%;background-color:#ffffff;overflow:auto;">
				<div style="width:100%;height:53px;border-bottom:1px solid #e7ecf1;padding-top:53px;display:flex;align-items:center;color:#666">
					<div style="width:50%;text-align:left;">
						<div style="padding:0px 20px;">Home <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Posting</div>
					</div>
					<div style="width:50%;text-align:right;">
						<div style="padding:0px 20px;"><?php echo date('l, F jS Y');?></div>
					</div>
				</div>
				<div style="width:100%;float:left;border-bottom:1px solid #e7ecf1;color:#666;background-position-y:-441px;background-position-x:-583px;background-image:url('<?php echo base_url();?>assets/pattern/worl-white.png');background-color:#fff;">
					<div style="padding:20px;">
						<h1 style="margin-bottom:5px;">Posting Job</h1><span>Management Job Vacancy Website</span>
					</div>
				</div>
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
					
				</style>
				<script>
				function delete_data(e){
					$.confirm({
						title: '<span style="color:#FF6B6B;"><i class="fa fa-exclamation" style="margin-right:5px;"></i>Confirmation</span>',
						content: 'Are you sure delete this record?',
						confirm: function(){
							var element = e.attr('id');
							$.ajax({
								url:"http://www.goc.co.id/index.php/backend/manage_career/delete_data/",
								cache:false,
								data:{
									id:element
								},
								type: "POST",
								dataType: 'json',
								success:function(result){
									//redirect page
									$.ajax({
										url:"http://www.goc.co.id/index.php/backend/manage_career/get_items_grid/",
										cache:false,
										type: "POST",
										dataType: 'jsonp',
										jsonp:"mycallback",
										success:function(result){
											$("#grid-table tbody tr").remove();								
											$.each(result, function(i, data){
											$('#grid-table tbody').append("<tr><td>"+data.Career_Id+"</td><td>"+data.Career_Title+"</td><td>"+data.Career_Departmen+"</td><td>"+data.Career_Position+"</td><td>"+data.Carrer_Status+"</td><td>"+data.Career_Post_Create+"</td><td style='border-right:transparent;width:25px;'><a style='color:#F9896D' href='<?php echo base_url().'index.php/controller_posting/edit/';?>"+data.Career_Id+"' id='"+data.Career_Id+"' onclick='update_data($(this))'><i style='color:#55a747'  class='fa fa-edit'></i></a></td><td style='border-right:transparent;width:25px;'><a style='color:#F9896D' id='"+data.Career_Id+"' onclick='delete_data($(this))'><i style='color:#F9896D'  class='fa fa-close'></i></a></td></tr>");
											});
										}
									});
								}
							});
						},
						cancel: function(){
							$.alert('Canceled!');
						}
					});
				}
				</script>
				<script>
				$(function() {	
					$(function(){
						$.ajax({
							url:"http://www.goc.co.id/index.php/backend/manage_career/get_items_grid/",
							cache:false,
							type: "POST",
							dataType: 'jsonp',
							jsonp:"mycallback",
							success:function(result){
								$("#grid-table tbody tr").remove();								
								$.each(result, function(i, data){
								$('#grid-table tbody').append("<tr><td>"+data.Career_Id+"</td><td>"+data.Career_Title+"</td><td>"+data.Career_Departmen+"</td><td>"+data.Career_Position+"</td><td>"+data.Carrer_Status+"</td><td>"+data.Career_Post_Create+"</td><td style='border-right:transparent;width:25px;'><a style='color:#F9896D' href='<?php echo base_url().'index.php/controller_posting/edit/';?>"+data.Career_Id+"' id='"+data.Career_Id+"' onclick='update_data($(this))'><i style='color:#55a747'  class='fa fa-edit'></i></a></td><td style='border-right:transparent;width:25px;'><a style='color:#F9896D' id='"+data.Career_Id+"' onclick='delete_data($(this))'><i style='color:#F9896D'  class='fa fa-close'></i></a></td></tr>");
								});
							}
						});
					});						
				});
				</script>			
				<div style="width:100%;float:left;color:#666;">
					<div style="border:1px solid #e1e1e1; margin:2%;padding:3%;width:90%;float:left; height:300px;overflow:auto;">
					<h1>Job Vacancy</h1><a href="<?php echo base_url().'index.php/controller_posting/add';?>" style="text-decoration:none;padding:5px 10px;border:1px solid #f1f1f1;border-radius:3px;background-color:#55a747 !important;color:#fff;opacity:0.8;z-index:0;">Create Job</a>
						<table id="grid-table" style="margin-top:10px;">
							<thead>
								<tr>
									<td>#No.</td>
									<td>Job Title</td>
									<td>Department</td>
									<td>Position</td>
									<td>Status</td>
									<td>Date Posting</td>
									<td></td>
									<td></td>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>