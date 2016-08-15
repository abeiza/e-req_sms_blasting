		</div>
	</body>
	<script src="<?php echo base_url();?>assets/js/jquery-confirm.min.js"></script>
	<script>
		function alert_success(){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: 'Data has been Inserted Successfully',
				confirm: function(){
					window.location = "<?php echo base_url();?>index.php/controller_posting/add";
				}
			});
		}
		
		function alert_success_update(id){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: 'Data has been update Successfully',
				confirm: function(){
					window.location = "<?php echo base_url();?>index.php/controller_posting/edit/"+id;
				}
			});
		}
		
		function alert_success_contact(){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: 'Data has been Inserted Successfully',
				confirm: function(){
					window.location = "<?php echo base_url();?>index.php/controller_message/contact";
				}
			});
		}
		
		function alert_success_account(){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: 'Data Account has been Update Successfully',
				confirm: function(){
					window.location = "<?php echo base_url();?>index.php/controller_settings/my_account";
				}
			});
		}
		
		function alert_success_mailer(){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: 'Data Mailer has been Update Successfully',
				confirm: function(){
					window.location = "<?php echo base_url();?>index.php/controller_settings/";
				}
			});
		}
		
		function alert_success_contact_delete(){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: 'Data has been deleted Successfully',
				confirm: function(){
					window.location = "<?php echo base_url();?>index.php/controller_message/contact";
				}
			});
		}
		
		function alert_success_contact_edit(){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: 'Data has been Update Successfully',
				confirm: function(){
					window.location = "<?php echo base_url();?>index.php/controller_message/contact";
				}
			});
		}
		
		function alert_success_thread(){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: 'Data has been Deleted Successfully',
				confirm: function(){
					window.location = "<?php echo base_url();?>index.php/controller_message/";
				}
			});
		}
		
		function alert_success_delete_inbox(){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: 'Data has been Deleted Successfully',
				confirm: function(){
					window.location = "<?php echo base_url();?>index.php/controller_message/inbox/";
				}
			});
		}
		
		function alert_success_delete_outbox(){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: 'Data has been Deleted Successfully',
				confirm: function(){
					window.location = "<?php echo base_url();?>index.php/controller_message/outbox/";
				}
			});
		}
		
		function alert_success_customer(url, content){
			$.alert({
				title: '<span style="color:#55a747;"><i class="fa fa-check" style="margin-right:5px;"></i>Message</span>',
				content: content,
				confirm: function(){
					window.location = url;
				}
			});
		}
	
		function alert_fail(){
			$.alert({
				title: '<span style="color:#FF6B6B;"><i class="fa fa-exclamation" style="margin-right:5px;"></i>Message</span>',
				content: 'Sorry, There has been a Problem Inserting',
				confirm: function(){
					document.getElementById("title").focus();
				}
			});
		}
	</script>
</html>