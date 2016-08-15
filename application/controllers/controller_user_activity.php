<?php
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	
	class Controller_User_Activity extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox order by ObjectID desc");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_user_activity");
				$this->load->view("global/view_footer");
			}
		}
	}
	/*End of file controller_user_activity.php*/
	/*Location:.application/controllers/controller_user_activity.php*/