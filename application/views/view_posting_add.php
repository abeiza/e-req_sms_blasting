			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
			<script>
				tinymce.init({
					selector: 'textarea',
					height: 250,
					theme: 'modern',
					plugins: [
						'advlist autolink lists link image charmap print preview hr anchor pagebreak',
						'searchreplace wordcount visualblocks visualchars code fullscreen',
						'insertdatetime media nonbreaking save table contextmenu directionality',
						'emoticons template paste textcolor colorpicker textpattern imagetools'
					],
					toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
					toolbar2: 'print preview media | forecolor backcolor emoticons',
					image_advtab: true,
					templates: [
						{ title: 'Test template 1', content: 'Test 1' },
						{ title: 'Test template 2', content: 'Test 2' }
					],
					content_css: [
						'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
						'//www.tinymce.com/css/codepen.min.css'
					]
				});
				
				function validationNumber(evt){
					var charCode = (evt.which) ? evt.which : evt.keyCode
					if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
						return false;
					return true;
				}
								
			</script>
			<script>
			$(function() {	
				$("#insert_item").click(function(){
					var desc = tinyMCE.get('desc');
					var req = tinyMCE.get('req');
					$.ajax({
						url:"http://www.goc.co.id/index.php/backend/manage_career/insert_item/",
						data:{
							title:$("#title").val(),
							dept:$("#dept").val(),
							position:$("#position").val(),
							location:$("#location").val(),
							edu:$("#edu").val(),
							experience:$("#experience").val(),
							desc:desc.getContent(),
							req:req.getContent(),
							exp:$("#exp").val(),
							co:$("#co").val(),
							status:$("#status").val()
						},
						cache:false,
						type: "POST",
						dataType: 'json',
						success:function(data){
							if(data.status == 'Sukses'){
								$.ajax({
									url:"<?php echo base_url();?>index.php/controller_posting/insert_data/",
									data:{
										title:$("#title").val(),
										dept:$("#dept").val(),
										position:$("#position").val(),
										location:$("#location").val(),
										edu:$("#edu").val(),
										experience:$("#experience").val(),
										desc:desc.getContent(),
										req:req.getContent(),
										exp:$("#exp").val(),
										co:$("#co").val(),
										status:$("#status").val()
									},
									cache:false,
									type: "POST",
									dataType: 'json',
									success:function(data){
										if(data.status == 'Sukses'){
											alert_success_contact();
										}else{
											
											alert(data.status);
										}
									}
								});
							}else{
								
								alert(data.status);
							}
						}
					});
				});
			});
			</script>
			<div style="width:82.5%;float:left;height:100%;background-color:#ffffff;overflow:auto;">
				<div style="width:100%;height:53px;border-bottom:1px solid #e7ecf1;padding-top:53px;display:flex;align-items:center;color:#666">
					<div style="width:50%;text-align:left;">
						<div style="padding:0px 20px;">Home <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Posting  <span class="fa fa-angle-right" style="margin:0px 5px;"></span> Posting Add</div>
					</div>
					<div style="width:50%;text-align:right;">
						<div style="padding:0px 20px;"><?php echo date('l, F jS Y');?></div>
					</div>
				</div>
				<div style="width:100%;float:left;border-bottom:1px solid #e7ecf1;color:#666;background-position-y:-441px;background-position-x:-583px;background-image:url('<?php echo base_url();?>assets/pattern/worl-white.png');background-color:#fff;">
					<div style="padding:20px;">
						<h1 style="margin-bottom:5px;">Job Vacancy</h1><span>Posting job to website goc</span>
					</div>
				</div>
				<div style="width:100%;float:left;color:#666;">
					<div style="border:1px solid #e1e1e1; margin:20px;padding:20px;float:left;">
						<h1>CREATE NEW JOB</h1>
						
						
						<style>
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
								width:100%;
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
							
							.tabcontent-first{
								display:block;
							}
							
							.tabcontent{
								display:none;
							}
						</style>
						<script type="text/javascript">
							function show_form(id, text1, text2) {
								document.getElementById(id).style.display = 'block';
								document.getElementById(id).style.transition = 'all 0.5s ease-in';
								document.getElementById(id).style.WebkitTransition = 'all 0.5s ease-in';
								document.getElementById(id).style.MozTransition = 'all 0.5s ease-in';
								
								document.getElementById(text1).style.display = 'none';
								document.getElementById(text1).style.transition = 'all 0.5s ease-out';
								document.getElementById(id).style.WebkitTransition = 'all 0.5s ease-out';
								document.getElementById(id).style.MozTransition = 'all 0.5s ease-out';
								
								
								document.getElementById(text2).style.display = 'none';
								document.getElementById(text2).style.transition = 'all 0.5s ease-out';
								document.getElementById(id).style.WebkitTransition = 'all 0.5s ease-out';
								document.getElementById(id).style.MozTransition = 'all 0.5s ease-out';
							}
						</script>
						<div id="job-oth" class="tabcontent-first">
							<div class="group-text">
								<label>Job Title</label>
								<input id="title" type="text" style="width:95%;" placeholder="Job Title"/>
							</div>
							<div class="group-text" style="width:45%;padding-right:5%;">
								<label>Department</label>
								<input id="dept" type="text" style="width:100%;" placeholder="Department"/>
							</div>
							<div class="group-text" style="width:40%;padding-left:5%;">
								<label>Position</label>
								<input id="position" type="text" style="width:100%;" placeholder="Position"/>
							</div>
							<div class="group-text">
								<label>Location</label>
								<input id="location" type="text" style="width:45%;" placeholder="Location"/>
							</div>
							<div class="group-text" style="width:45%;padding-right:5%;">
								<label>Latest Education</label>
								<input id="edu" type="text" style="width:100%;" placeholder="Latest Education"/>
							</div>
							<div class="group-text" style="width:40%;padding-left:5%;">
								<label>Work Experiences</label>
								<input id="experience" type="text" style="width:100%;" placeholder="Work Experience"/>
							</div>
							<div class="group-text" style="width:45%;padding-right:5%;">
								<label>Expiration Date</label>
								<input type="text" id="exp" onkeypress="
								var v = this.value;
								if (v.match(/^\d{2}$/) !== null) {
									this.value = v + '/';
								} else if (v.match(/^\d{2}\/\d{2}$/) !== null) {
									this.value = v + '/';
								}
								return validationNumber(event);
							" maxlength='10' style="width:100%;" placeholder="dd/mm/yyyy"/>
							</div>
							<div class="group-text" style="width:40%;padding-left:5%;">
								<label>Count of We Need</label>
								<input type="text" id="co" style="width:100%;" value="1"/>
							</div>
							<div class="group-text">						
								<label>Status</label>
								<select id="status">
									<option value="" disabled selected>--Select Status--</option>
									<option value="posting">Publish</option>
									<option value="trash">Spam</option>
									<option value="draft">Draft</option>
								</select>
							</div>
							<div class="group-text">
								<a class="button" onclick="show_form('job-desc','job-oth','job-req');">Next</a>
							</div>
						</div>
						<div class="tabcontent" id="job-desc">
							<div class="group-text">
								<span style="font-size:16px;">Job Description</span>
								<textarea id="desc"></textarea>
							</div>
							<div class="group-text">
								<a class="button" onclick="show_form('job-oth','job-desc','job-req');">Previous</a>
								<a class="button" onclick="show_form('job-req','job-oth','job-desc');">Next</a>
							</div>
						</div>
						<div class="tabcontent" id="job-req">
							<div class="group-text">
								<span style="font-size:16px;">Job Requirements</span>
								<textarea id="req"></textarea>
							</div>
							<div class="group-text">
								<a class="button" onclick="show_form('job-desc','job-oth','job-req');">Previous</a>
								<a class="button" id="insert_item">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>