<?php
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	
	class Controller_Posting extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_posting");
				$this->load->view("global/view_footer");
			}
		}
		
		function add(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_posting_add");
				$this->load->view("global/view_footer");
			}
		}
		
		function edit($id){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				$id = $this->uri->segment(3);
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_posting_edit");
				$this->load->view("global/view_footer");
			}
		}
	
		function update_data(){
			header("Access-Control-Allow-Origin: *");
			header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
			header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
			$id = $this->input->post('id');
			$data['Career_Title'] = $this->input->post('title');
			$data['Career_Position'] = $this->input->post('position');
			$data['Career_Departemen'] = $this->input->post('dept');
			$data['Career_Location'] = $this->input->post('location');
			$data['Career_Education'] = $this->input->post('edu');
			$data['Career_Work_Experience'] = $this->input->post('experience');
			$data['Career_Job_Desc'] =$this->input->post('desc');
			$data['Career_Requrement'] = $this->input->post('req');
			$data['Career_Qty'] = $this->input->post('co');
			$data['Career_Post_Create'] = date("Y-m-d h:s:i");
			$data['Career_Post_Update'] = date("Y-m-d h:s:i");
			$data['Career_Job_Expired'] = substr($this->input->post('exp'),6,4).'-'.substr($this->input->post('exp'),3,2).'-'.substr($this->input->post('exp'),0,2);
			$data['Carrer_Status'] = $this->input->post('status');
			
			$query1 = $this->model_app->get_updateSrv('gocweb_career',$data,'Career_Id',$id);
            if($query1){
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
		
		function insert_data(){
			header("Access-Control-Allow-Origin: *");
			header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
			header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
			
			$data['Career_Id'] = $this->model_app->getMaxKode('gocweb_career', 'Career_Id', 'JCG');
			$data['Career_Title'] = $this->input->post('title');
			$data['Career_Position'] = $this->input->post('position');
			$data['Career_Departemen'] = $this->input->post('dept');
			$data['Career_Location'] = $this->input->post('location');
			$data['Career_Education'] = $this->input->post('edu');
			$data['Career_Work_Experience'] = $this->input->post('experience');
			$data['Career_Job_Desc'] =$this->input->post('desc');
			$data['Career_Requrement'] = $this->input->post('req');
			$data['Career_Qty'] = $this->input->post('co');
			$data['Career_Post_Create'] = date("Y-m-d h:s:i");
			$data['Career_Job_Expired'] = substr($this->input->post('exp'),6,4).'-'.substr($this->input->post('exp'),3,2).'-'.substr($this->input->post('exp'),0,2);
			$data['Carrer_Status'] = $this->input->post('status');

			$query1 = $this->model_app->insert_data('gocweb_career',$data);
            if($query1){
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
	/*End of file controller_posting.php*/
	/*Location:.application/controllers/controller_posting.php*/