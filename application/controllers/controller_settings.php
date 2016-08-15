<?php
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	
	class Controller_Settings extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status = 'new' order by ObjectID desc");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_settings");
				$this->load->view("global/view_footer");
			}
		}
		
		function my_account(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status = 'new' order by ObjectID desc");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_update_account");
				$this->load->view("global/view_footer");
			}
		}
		
		function data_setting(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status = 'new' order by ObjectID desc");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_settings");
				$this->load->view("global/view_footer");
			}
		}
		
		function get_account($id){
			$id = $this->uri->segment(3); 
			$queryGrid = $this->db->query("select * from gocweb_user where user_id='".$id."'");
			$data_par = array();
			foreach($queryGrid->result() as $grid){
				$data_par[] = $grid; 
			}

			echo json_encode($data_par);
		}
		
		function get_mailer(){
			$queryGrid = $this->db->query("select * from gocweb_setting_mailer where ObjectID='1'");
			$data_par = array();
			foreach($queryGrid->result() as $grid){
				$data_par[] = $grid; 
			}

			echo json_encode($data_par);
		}
		
		function update_account(){
			if(empty($_FILES['pict']['name'])){
				$id = $this->input->post('id');
				$data['user_first_name'] = $this->input->post('first');
				$data['user_last_name'] = $this->input->post('last');
				$data['user_nick'] = $this->input->post('nick');
				$data['user_username'] = $this->input->post('username');
				$data['user_password'] = $this->input->post('password');
				
				$edit_data = $this->model_app->get_updateSrv('gocweb_user',$data,'user_id',$id);
				if($edit_data){
					$data11 = array(
						'status' => 'Sukses',
						'color' => 'FF6B6B'
					);
					echo json_encode($data11);
				}else{
					$data11 = array(
						'status' => 'Fail',
						'color' => 'FF6B6B'
					);
					echo json_encode($data11);
				}
			}else{
				$configu['upload_path'] = './uploads/user/original/';
				$configu['upload_url'] = base_url().'uploads/user/original/';
				$configu['allowed_types'] = 'gif|jpeg|jpg|png';
				$configu['max_size'] = '1000';
				$configu['max_width'] = '1000';
				$configu['max_height'] = '1000';
				
				$this->load->library('upload',$configu);
				
				if (!$this->upload->do_upload('pict'))
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('form_upload', $error);
				}
				else
				{
					$upload_data = $this->upload->data();
				
					$config1['image_library'] = 'GD2';
					$config1['source_image'] = $upload_data['full_path'];
					$config1['new_image'] = 'uploads/user/thumb/'.$upload_data['file_name'];
					$config1['maintain_ratio'] = TRUE;
					$config1['width'] = 200;
					$config1['height'] = 200;

					$this->load->library('image_lib', $config1);

					if(!$this->image_lib->resize()){
						echo $this->image_lib->display_errors();
					}
					
					$id = $this->input->post('id');
					$data['user_first_name'] = $this->input->post('first');
					$data['user_last_name'] = $this->input->post('last');
					$data['user_nick'] = $this->input->post('nick');
					$data['user_username'] = $this->input->post('username');
					$data['user_password'] = $this->input->post('password');
					$data['user_pict'] = $upload_data['file_name'];
					
					$edit_data1 = $this->model_app->get_updateSrv('gocweb_user',$data,'user_id',$id);
					if($edit_data1){
						$data12 = array(
							'status' => 'Sukses',
							'color' => 'FF6B6B'
						);
						echo json_encode($data12);
					}else{
						$data12 = array(
							'status' => 'Fail',
							'color' => 'FF6B6B'
						);
						echo json_encode($data12);
					}
				}
			}
		}
		
		function update_mailer(){
			$data['sender_email'] = $this->input->post('sender_email');
			$data['user_password'] = $this->input->post('user_password');
			$data['user_username'] = $this->input->post('user_username');
			$data['to_email'] = $this->input->post('to_email');
			$data['cc_email'] = $this->input->post('cc_email');
			$data['bcc_email'] = $this->input->post('bcc_email');
			$data['updateDate'] = date('Y-m-d h:s:i');
			
			$edit_data = $this->model_app->get_updateSrv('gocweb_setting_mailer',$data,'ObjectID','1');
			if($edit_data){
				$data11 = array(
					'status' => 'Sukses',
					'color' => 'FF6B6B'
				);
				echo json_encode($data11);
			}else{
				$data11 = array(
					'status' => 'Fail',
					'color' => 'FF6B6B'
				);
				echo json_encode($data11);
			}
		}
	}
	/*End of file controller_settings.php*/
	/*Location:.application/controllers/controller_settings.php*/