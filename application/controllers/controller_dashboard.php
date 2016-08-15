<?php
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	
	class controller_dashboard extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
				$data['c_inbox'] = $this->db->query("select * from gocweb_inbox where DATEPART(yyyy, ReceivingDateTime) = YEAR(getdate()) and DATEPART(mm, ReceivingDateTime) = MONTH(getdate())");
				$data['c_outbox'] = $this->db->query("select * from gocweb_outbox where DATEPART(yyyy, send_date) = YEAR(getdate()) and DATEPART(mm, send_date) = MONTH(getdate())");
				$data['c_posting'] = $this->db->query("select * from gocweb_career where Carrer_Status='Posting'");
				$data['c_application'] = $this->db->query("select * from gocweb_resume_header");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_dashboard", $data);
				$this->load->view("global/view_footer");
			}
		}
	}
	/*End of file controller_dashboard.php*/
	/*Location:.application/controllers/controller_dashboard.php*/