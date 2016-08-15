<?php 
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	
	class Controller_Connect extends CI_Controller{
		function __contruct(){
			parent::__contruct();
		}
		
		function index(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top");
				$this->load->view("global/view_nav_left");
				$this->load->view("view_dashboard");
				$this->load->view("global/view_footer");
			}
		}
		
		function login_act(){
			$this->form_validation->set_rules('username','password','required|trim');
			$this->form_validation->set_rules('password','username','required|trim');
			if($this->form_validation->run() == false){
				$this->index();
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$log = $this->model_app->get_login($username,$password);
				if($log->num_rows() > 0){
					foreach($log->result() as $db){
						$sess['success_login'] = 'success';
						$sess['user_id'] = $db->user_id;
						$sess['user_nick'] = $db->user_nick;
						$sess['user_first'] = $db->user_first_name;
						$sess['user_last'] = $db->user_last_name;
						$sess['user_username'] = $db->user_username;
						$sess['user_password'] = $db->user_password;
						$sess['user_pict'] = $db->user_pict;
						$this->session->set_userdata($sess);
						
						date_default_timezone_set('Asia/Jakarta');
						$data['user_date_log'] = date("Y-m-d H:i:s");
						$this->model_app->get_update('gocweb_user',$data,'user_id',$sess['user_id']);
					}
					Header('Location:'.base_url().'index.php/controller_dashboard/');
				}else{
					$this->session->set_flashdata('login_result',"<span class='fa fa-exclamation-circle' style='color:#fff;width:280px;margin-top:10px;background:#aa2e33;padding:10px;border-radius:3px;box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);'> <strong style='font-size:11px;font-family:calibri'>Sorry your data account is invalid. . .</strong></span>");
					Header('Location:'.base_url().'index.php/controller_connect/');
				}
			}
		}
		
		function logout_act(){
			$cek = $this->session->userdata('success_login');
			if($cek){
				$this->session->sess_destroy();
				?>
				<script>
					window.location.href = '<?php echo base_url();?>index.php/controller_connect/';
				</script>
			<?php
			}else{
				?>
				<script>
					window.location.href = '<?php echo base_url();?>index.php/controller_connect/';
				</script>
			<?php
			}
		}
	}
	
	/*End of file controller_connection.php*/
	/*Location:.applications/controllers/controller_connection.php*/