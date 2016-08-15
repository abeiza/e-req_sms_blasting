<?php
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	
	class Controller_Message extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$this->threads();
		}
		
		function inbox(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$page = $this->uri->segment(4);
				$limit = 5;
				if(!$page){
					$offset = 0;
				}else{
					$offset = $page;
				}
				$msg = $this->db->query("select * from gocweb_inbox where Status!='Delete'");
				
				$config['total_rows'] = $msg->num_rows();
				$config['base_url'] = base_url()."index.php/controller_message/inbox/index/";
				$config['per_page'] = $limit;
				$config['uri_segment'] = 4;
				$config['full_tag_open'] = "<div class='pagination'><ul>";
				$config['full_tag_close'] = "</ul></div>";
				
				$config['next_link'] = "Next &gt;";
				$config['next_tag_open'] = "<li>";
				$config['next_tag_close'] = "</li>";
				
				$config['prev_link'] = "&lt; Prev";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tag_close'] = "</li>";
				
				$config['first_link'] = "<span class='paging-arrow'>&laquo; First</span>";
				$config['first_tag_open'] = "<li>";
				$config['first_tag_close'] = "</li>";
				
				$config['last_link'] = "<span class='paging-arrow'>Last &raquo;</span>";
				$config['last_tag_open'] = "<li>";
				$config['last_tag_close'] = "</li>";

				$config['cur_tag_open'] = "<li style='padding:5px 11px;border:1px solid #26a69a; color:#26a69a;'><span>";
				$config['cur_tag_close'] = "</span></li>";
				
				$config['num_tag_open'] = "<li>";
				$config['num_tag_close'] = "</li>";
				
				$config['num_links'] = 2;
				
				$this->pagination->initialize($config);
				$data['paging'] = $this->pagination->create_links();
				
				$data['inbox'] = $this->db->query("select * from (select row_number() over (order by ObjectID desc) as rownum, * from gocweb_inbox where Status!='Delete')gocweb_inbox where Status!='Delete' and rownum > ".$offset." AND rownum <= ".$hasil = $offset + $limit." order by ObjectID desc");
				
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
				$data['from'] = $offset+1;
				$data['to'] = $offset + $limit;
				$data['total'] = $msg->num_rows();
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_messages",$data);
				$this->load->view("global/view_footer");
			}
		}
		
		function threads(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$data['inbox'] = $this->db->query("select gocweb_inbox.* from gocweb_inbox inner join (select max(ObjectID) as ObjectID from gocweb_inbox where Status!='Delete' group by Sender_Number)ObjectID on ObjectID.ObjectID = gocweb_inbox.ObjectID where Status !='Delete'");
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_thread",$data);
				$this->load->view("global/view_footer");
			}
		}
		
		function outbox(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$page = $this->uri->segment(4);
				$limit = 5;
				if(!$page){
					$offset = 0;
				}else{
					$offset = $page;
				}
				$msg = $this->db->query("select * from gocweb_outbox where Status!='Delete'");
				
				$config['total_rows'] = $msg->num_rows();
				$config['base_url'] = base_url()."index.php/controller_message/outbox/index/";
				$config['per_page'] = $limit;
				$config['uri_segment'] = 4;
				$config['full_tag_open'] = "<div class='pagination'><ul>";
				$config['full_tag_close'] = "</ul></div>";
				
				$config['next_link'] = "Next &gt;";
				$config['next_tag_open'] = "<li>";
				$config['next_tag_close'] = "</li>";
				
				$config['prev_link'] = "&lt; Prev";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tag_close'] = "</li>";
				
				$config['first_link'] = "<span class='paging-arrow'>&laquo; First</span>";
				$config['first_tag_open'] = "<li>";
				$config['first_tag_close'] = "</li>";
				
				$config['last_link'] = "<span class='paging-arrow'>Last &raquo;</span>";
				$config['last_tag_open'] = "<li>";
				$config['last_tag_close'] = "</li>";

				$config['cur_tag_open'] = "<li style='padding:5px 11px;border:1px solid #26a69a; color:#26a69a;'><span>";
				$config['cur_tag_close'] = "</span></li>";
				
				$config['num_tag_open'] = "<li>";
				$config['num_tag_close'] = "</li>";
				
				$config['num_links'] = 2;
				
				$this->pagination->initialize($config);
				$data['paging'] = $this->pagination->create_links();
				
				$data['outbox'] = $this->db->query("select * from (select row_number() over (order by ObjectID desc) as rownum, * from gocweb_outbox where Status!='Delete')gocweb_outbox where Status!='Delete' and rownum > ".$offset." AND rownum <= ".$hasil = $offset + $limit." order by ObjectID desc");
				
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
				$data['from'] = $offset+1;
				$data['to'] = $offset + $limit;
				$data['total'] = $msg->num_rows();
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_message_outbox",$data);
				$this->load->view("global/view_footer");
			}
		}
		
		function create(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				
				$data['list_contact'] = $this->db->query("select * from gocweb_contact where status='Active'");
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox  where Status='new' order by ObjectID desc");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_message_create",$data);
				$this->load->view("global/view_footer");
			}
		}
		
		function filter(){
			$id = $this->input->post("filter");
			$queryGrid = $this->db->query("select * from gocweb_contact where status='Active' and contact_name like '%".$id."%' or contact_number like '%".$id."%' order by contact_name asc");
			$data1 = array();
			foreach($queryGrid->result() as $grid){
				$data1[] = $grid; 
			}
			echo json_encode($data1);
		}
		
		function dashboard(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
				$data['c_inbox'] = $this->db->query("select * from gocweb_inbox where DATEPART(yyyy, ReceivingDateTime) = YEAR(getdate()) and DATEPART(mm, ReceivingDateTime) = MONTH(getdate())");
				$data['c_outbox'] = $this->db->query("select * from gocweb_outbox where DATEPART(yyyy, send_date) = YEAR(getdate()) and DATEPART(mm, send_date) = MONTH(getdate())");
				$data['c_contact'] = $this->db->query("select * from gocweb_contact");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_message_dashboard", $data);
				$this->load->view("global/view_footer");
			}
		}
		
		function contact(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$page = $this->uri->segment(4);
				$limit = 5;
				if(!$page){
					$offset = 0;
				}else{
					$offset = $page;
				}
				$contact = $this->db->query("select * from gocweb_contact where status='Active'");
				
				$config['total_rows'] = $contact->num_rows();
				$config['base_url'] = base_url()."index.php/controller_message/contact/index/";
				$config['per_page'] = $limit;
				$config['uri_segment'] = 4;
				$config['full_tag_open'] = "<div class='pagination'><ul>";
				$config['full_tag_close'] = "</ul></div>";
				
				$config['next_link'] = "Next &gt;";
				$config['next_tag_open'] = "<li>";
				$config['next_tag_close'] = "</li>";
				
				$config['prev_link'] = "&lt; Prev";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tag_close'] = "</li>";
				
				$config['first_link'] = "<span class='paging-arrow'>&laquo; First</span>";
				$config['first_tag_open'] = "<li>";
				$config['first_tag_close'] = "</li>";
				
				$config['last_link'] = "<span class='paging-arrow'>Last &raquo;</span>";
				$config['last_tag_open'] = "<li>";
				$config['last_tag_close'] = "</li>";

				$config['cur_tag_open'] = "<li style='padding:5px 11px;border:1px solid #26a69a; color:#26a69a;'><span>";
				$config['cur_tag_close'] = "</span></li>";
				
				$config['num_tag_open'] = "<li>";
				$config['num_tag_close'] = "</li>";
				
				$config['num_links'] = 2;
				
				$this->pagination->initialize($config);
				$data['paging'] = $this->pagination->create_links();
				
				$data['contact'] = $this->db->query("select * from (select row_number() over (order by ObjectID desc) as rownum, * from gocweb_contact where status='Active')gocweb_contact where status='Active' and rownum > ".$offset." AND rownum <= ".$hasil = $offset + $limit." order by ObjectID desc");
				
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox  where Status='new' order by ObjectID desc");
				
				$data['from'] = $offset+1;
				$data['to'] = $offset + $limit;
				$data['total'] = $contact->num_rows();
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_message_contact",$data);
				$this->load->view("global/view_footer");
			}
		}
		
		function search_contact($str){	
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				if($this->input->post('search')){
					$search = $this->input->post('search');
				}else{
					$search = 'none';
				}
				
				
				$array = array('search' => $search);
				$str = $this->uri->assoc_to_uri($array);
				redirect('controller_message/search_result/'.$str);
			}
		}
		
		function search_result(){
			$result = $this->uri->segment_array(); 
			$s1 = $result[3];
			$s2 = urldecode($result[4]);
			
			$page = $this->uri->segment(5);
			$limit = 5;
			if(!$page){
				$offset = 0;
			}else{
				$offset = $page;
			}
			
			if($s2 != 'none'){
				$contact = $this->db->query("select * from gocweb_contact where contact_name like '%".$s2."%' or contact_number like '%".$s2."%'");
			}else if($s2 == 'none'){
				$contact = $this->db->query("select * from gocweb_contact");
			}
			
			$config['total_rows'] = $contact->num_rows();
			$config['base_url'] = base_url()."index.php/controller_message/search_result/search/".$s2;
			$config['per_page'] = $limit;
			$config['uri_segment'] = 5;
			$config['full_tag_open'] = "<div class='pagination'><ul>";
			$config['full_tag_close'] = "</ul></div>";
			
			$config['next_link'] = "Next &gt;";
			$config['next_tag_open'] = "<li>";
			$config['next_tag_close'] = "</li>";
			
			$config['prev_link'] = "&lt; Prev";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tag_close'] = "</li>";
			
			$config['first_link'] = "<span class='paging-arrow'>&laquo; First</span>";
			$config['first_tag_open'] = "<li>";
			$config['first_tag_close'] = "</li>";
			
			$config['last_link'] = "<span class='paging-arrow'>Last &raquo;</span>";
			$config['last_tag_open'] = "<li>";
			$config['last_tag_close'] = "</li>";

			$config['cur_tag_open'] = "<li style='padding:5px 11px;border:1px solid #26a69a; color:#26a69a;'><span>";
			$config['cur_tag_close'] = "</span></li>";
			
			$config['num_tag_open'] = "<li>";
			$config['num_tag_close'] = "</li>";
			
			$config['num_links'] = 2;
			
			$this->pagination->initialize($config);
			$data['paging'] = $this->pagination->create_links();

			if($s2 != 'none'){
				$data['contact'] = $this->db->query("select * from (select row_number() over (order by ObjectID desc) as rownum, * from gocweb_contact where status='Active' and (contact_name like '%".$s2."%' or contact_number like '%".$s2."%'))gocweb_contact where status='Active' and rownum > ".$offset." AND rownum <= ".$hasil = $offset + $limit." and (contact_name like '%".$s2."%' or contact_number like '%".$s2."%')order by ObjectID desc");
			}else if($s2 == 'none'){
				$data['contact'] = $this->db->query("select * from (select row_number() over (order by ObjectID desc) as rownum, * from gocweb_contact where status='Active')gocweb_contact where status='Active' and rownum > ".$offset." AND rownum <= ".$hasil = $offset + $limit." order by ObjectID desc");
			}
			
			$notif['inbox'] = $this->db->query("select * from gocweb_inbox  where Status='new' order by ObjectID desc");
			
			$data['from'] = $offset+1;
			$data['to'] = $offset + $limit;
			$data['total'] = $contact->num_rows();
			
			$this->load->view("global/view_header");
			$this->load->view("global/view_nav_top",$notif);
			$this->load->view("global/view_nav_left");
			$this->load->view("view_message_contact",$data);
			$this->load->view("global/view_footer");
		}
		
		function delete_data(){
			header("Access-Control-Allow-Origin: *");
			header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
			header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
			$id2 = $this->input->post('id');
			$query1 = $this->db->query("UPDATE gocweb_contact set status='trash',contact_update_date='".date('Y-m-d h:s:i')."' where ObjectID='".$id2."'");
			if($query1){
				$data = array(
					'status' => 'Sukses',
					'color' => 'FF6B6B'
				);
				echo json_encode($data);
			}else{
				$data = array(
					'status' => 'Fail',
					'color' => 'FF6B6B'
				);
				echo json_encode($data);
			}
		}
		
		function delete_thread(){
			header("Access-Control-Allow-Origin: *");
			header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
			header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
			$id2 = $this->input->post('id');
			
			if(substr($id2,0,2) === '62'){
				$number_copy_first = '+'.$id2; 
				$number_copy_second = '0'.substr($id2, 2, 50);
			}else if(substr($id2,0,1) === '0'){
				$number_copy_first = '+62'.substr($id2,1,50); 
				$number_copy_second = $id2;
			}
			
			$query1 = $this->db->query("UPDATE gocweb_inbox set status='Delete' where Sender_Number='".$number_copy_first."' or Sender_Number='".$number_copy_second."'");
			$query2 = $this->db->query("UPDATE gocweb_outbox set status='Delete' where no_destination='".$number_copy_first."' or no_destination='".$number_copy_second."'");
			if($query1 && $query2){
				$data = array(
					'status' => 'Sukses',
					'color' => 'FF6B6B'
				);
				echo json_encode($data);
			}else{
				$data = array(
					'status' => 'Fail',
					'color' => 'FF6B6B'
				);
				echo json_encode($data);
			}
		}
		
		function delete_inbox_record(){
			header("Access-Control-Allow-Origin: *");
			header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
			header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
			$id2 = $this->input->post('id');
			
			$query1 = $this->db->query("UPDATE gocweb_inbox set status='Delete' where ObjectID='".$id2."'");
			if($query1){
				$data = array(
					'status' => 'Sukses',
					'color' => 'FF6B6B'
				);
				echo json_encode($data);
			}else{
				$data = array(
					'status' => 'Fail',
					'color' => 'FF6B6B'
				);
				echo json_encode($data);
			}
		}
		
		function delete_outbox_record(){
			header("Access-Control-Allow-Origin: *");
			header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
			header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
			$id2 = $this->input->post('id');
			
			$query2 = $this->db->query("UPDATE gocweb_outbox set status='Delete' where ObjectID='".$id2."'");
			if($query2){
				$data = array(
					'status' => 'Sukses',
					'color' => 'FF6B6B'
				);
				echo json_encode($data);
			}else{
				$data = array(
					'status' => 'Fail',
					'color' => 'FF6B6B'
				);
				echo json_encode($data);
			}
		}
		
		function contact_edit($id){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox  where Status='new' order by ObjectID desc");
				$id = $this->uri->segment(3);
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_message_contact_edit");
				$this->load->view("global/view_footer");
			}
		}
		
		function get_items_grid_id($id){
			$id = $this->uri->segment(3); 
			$queryGrid = $this->db->query("select * from gocweb_contact where ObjectID='".$id."'");
			$data_par = array();
			foreach($queryGrid->result() as $grid){
				$data_par[] = $grid; 
			}

			echo json_encode($data_par);
		}
		
		function update_data(){
			header("Access-Control-Allow-Origin: *");
			header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
			header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
			$id = $this->input->post('id');
			$data['contact_name'] = $this->input->post('name');
			$data['contact_number'] = $this->input->post('number');
			$data['contact_update_date'] = date("Y-m-d H:i:s");

			$query1 = $this->model_app->get_updateSrv('gocweb_contact',$data,'ObjectID',$id);
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
		
		function update_data_status(){
			header("Access-Control-Allow-Origin: *");
			header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
			header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
			$number = $this->input->post('number');
			if(substr($number,0,2) === '62'){
				$number_copy_first = '+'.$number; 
				$number_copy_second = '0'.substr($number, 2, 50);
			}else if(substr($number,0,1) === '0'){
				$number_copy_first = '+62'.substr($number,1,50); 
				$number_copy_second = $number;
			}
			$data['Status'] = 'Read';
			$DateRead = date('Y-m-d h:s:i');

			$query1 = $this->model_app->getQuerySrv("update gocweb_inbox set Status='Read', DateRead='".$DateRead."' Where Status <> 'Delete' and (Sender_Number='".$number_copy_first."' or Sender_Number='".$number_copy_second."')");
			$query2 = $this->model_app->getQuerySrv("update gocweb_outbaox set Status='Read', DateRead='".$DateRead."' Where Status <> 'Delete' and (no_destination='".$number_copy_first."' or no_destination='".$number_copy_second."')");
			if($query1 && $query2){
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
			//$id = $this->input->post('id');
			$data['contact_name'] = $this->input->post('name');
			$data['contact_number'] = $this->input->post('number');
			$data['contact_insert_date'] = date("Y-m-d H:i:s");
			$data['status'] = 'Active';

			$query1 = $this->model_app->insert_data('gocweb_contact',$data);
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
		
		function contact_add(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_message_contact_add");
				$this->load->view("global/view_footer");
			}
		}
		
		function send_act(){
			$this->form_validation->set_rules('no_dest','no destination','trim|required');
			$this->form_validation->set_rules('message','message text','trim|required');
			if($this->form_validation->run() == false){
				$this->create();
			}else{
				$var_url = $this->input->post('url');
				$var_no = $this->input->post('no_dest');
				$var_text = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $this->input->post('message'));
				
				$var_no_array = explode(',',$var_no);
				
				$success = 0;
				$fail = 0;
				$warning = 0;
				$count_no = count($var_no_array);
				
				if(strlen($var_text) <= 153){
					for($i = 0;$i<count($var_no_array);$i++){
						$data['DestinationNumber'] = $var_no_array[$i];//$con->CONTACT;
						$data['TextDecoded'] = $var_text;
						$data['CreatorID'] = 'Gammu';
						
						$insert = $this->model_app->insert_datamy('outbox',$data);
						
						$data1['no_destination'] = $var_no_array[$i];//$con->CONTACT;
						$data1['text_msg'] = $var_text;
						$data1['sender'] = $this->session->userdata('user_first') . " " . $this->session->userdata('user_last');
						
						date_default_timezone_set('Asia/Jakarta');
						$data1['send_date'] = date("Y-m-d H:i:s");
						$data1['Status'] = 'new';
						$insert2 = $this->model_app->insert_data('gocweb_outbox', $data1);
						
						if(!$insert && !$insert2){
							$fail++;
						}else if($insert && !$insert2){
							$warning++;
						}else if(!$insert && $insert2){
							$warning++;
						}else if($insert && $insert2){
							$success++;
						}
					}
				}else{
					for($i = 0;$i<count($var_no_array);$i++){
						
						$jmlSMS = ceil(strlen($var_text)/153);
						$pecah  = str_split($var_text, 153);

						$newID = null;
						
						$array_satu = array(1,2,3,4,5,6,7,8,9,0,'A','B','C','D','E','F');
						$array_dua = array(1,2,3,4,5,6,7,8,9,0,'A','B','C','D','E','F');
						$rand_hex = $array_satu[array_rand($array_satu)].$array_dua[array_rand($array_dua)];
						// proses penyimpanan ke tabel mysql untuk setiap pecahan
						for ($j=1; $j<=$jmlSMS; $j++){
						   
						   $data1['UDH'] = "050003".$rand_hex.sprintf("%02s", $jmlSMS).sprintf("%02s", $j);
						   $data1['TextDecoded'] = $pecah[$j-1];
						   
						   $data['UDH'] = "050003".$rand_hex.sprintf("%02s", $jmlSMS).sprintf("%02s", $j);
						   $data['TextDecoded'] = $pecah[$j-1];

						   if ($j == 1){
							  $data1['DestinationNumber'] = $var_no_array[$i];
							  $data1['MultiPart'] = 'true';
							  $data1['CreatorID'] = 'Gammu';
							  
							  $newID = $this->model_app->insert_datamyLast('outbox',$data1);
						   }else{
							   $data['SequencePosition'] = $j;
							   $data['ID'] = $newID;
							  
							   $insert = $this->model_app->insert_datamy('outbox_multipart',$data);
						   }
						}
						
						$data2['no_destination'] = $var_no_array[$i];//$con->CONTACT;
						$data2['text_msg'] = $var_text;
						$data2['sender'] = $this->session->userdata('user_first') . " " . $this->session->userdata('user_last');
						$data2['Status'] = 'new';
						date_default_timezone_set('Asia/Jakarta');
						$data2['send_date'] = date("Y-m-d H:i:s");
						$insert2 = $this->model_app->insert_data('gocweb_outbox', $data2);
						
						if(!$insert && !$insert2){
							$fail++;
						}else if($insert && !$insert2){
							$warning++;
						}else if(!$insert && $insert2){
							$warning++;
						}else if($insert && $insert2){
							$success++;
						}
					}
				}
				Header("Location:".$var_url);
			}
		}
	
		function sync_validation(){
			$data_inbox_ori = $this->model_app->getQuerySrv("select * from gocweb_inbox_original where Processed='true' order by UDH");
			$status_udh = '';
			foreach($data_inbox_ori->result() as $db){
				if($db->UDH == '' || $db->UDH == NULL){
					$data_press = trim($db->TextDecoded);
					$data_val = substr($data_press,0,2);
					if($data_val == 'HR' || $data_val == 'hr' || $data_val == 'Hr' || $data_val == 'hR'){
						$data['ReceivingDateTime'] = $db->ReceivingDateTime;
						$data['Sender_Number'] = $db->SenderNumber;
						$txtdecode = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '',$db->TextDecoded); 
						$data['TextDecoded'] = $txtdecode;
						$data['Freq_SMS'] = 1;
						$data['DateRead'] = null;
						$data['Status'] = "new";
						$insert_data_inbox = $this->model_app->insert_data('gocweb_inbox', $data);
						
						$mailer = $this->db->query("select * from gocweb_setting_mailer");
						
						foreach($mailer->result() as $mail){
							$sender_email = $mail->sender_email;
							$user_password = $mail->user_password;
							$receiver_email = $mail->to_email;
							$username = $mail->user_username;
							$cc = $mail->cc_email;
							$bcc = $mail->bcc_email;
						}
						
						$subject = 'Inbox Message from '.$db->SenderNumber.'('.$db->ReceivingDateTime.')';
						$message = '<h2>Mailer Notification from Message User</h2><h4>'.$db->SenderNumber.'</h4><h4>('.$db->ReceivingDateTime.')</h4><br/><br/>'.$txtdecode.'<br/><br/><h2>Automatic from e-Recruitment GOC</h2><b>www.goc.co.id</b>';
						// Configure email library
						$config['protocol'] = 'smtp';
						$config['smtp_host'] = 'ssl://smtp.googlemail.com';
						$config['smtp_port'] = 465;
						$config['smtp_user'] = $sender_email;
						$config['smtp_pass'] = $user_password;
						$config['mailtype'] = 'html';
						$config['charset'] = 'iso-8859-1';
						
						
						// Load email library and passing configured values to email library
						$this->load->library('email', $config);
						$this->email->set_newline("\r\n");

						// Sender email address
						$this->email->from($sender_email, $username);
						// Receiver email address
						$this->email->to($receiver_email);
						$this->email->cc($cc);
						$this->email->bcc($bcc);
						// Subject of email
						$this->email->subject($subject);
						// Message in email
						$this->email->message($message);

						if($this->email->send()){
							echo "Sukses";
						}else{
							echo "gagal";
						}
						
						$update_data_inbox_ori = $this->model_app->getQuerySrv("update gocweb_inbox_original set Processed='Sync-Ibx' where object_id='".$db->object_id."'");
						
						continue;
					}else{
						$update_data_inbox_ori = $this->model_app->getQuerySrv("update gocweb_inbox_original set Processed='Sync-Ibx' where object_id='".$db->object_id."'");
						continue;
					}
				}else{
					$ReceivingDateTime[] = $db->ReceivingDateTime;
					$Sender_Number[] = $db->SenderNumber;
					$txtdecode = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '',$db->TextDecoded); 
					$TextDecoded[] = $txtdecode;
					$UDH[] = substr($db->UDH,0,8);
					$UDH_FULL[] = $db->UDH;
					$OBJECTID[] = $db->object_id;
					$status_udh = 'ada';
				}
			}
			
			if($status_udh != ''){
				$non_duplicate = array_unique($UDH);
				
				foreach($non_duplicate as $key => $value){
					//echo '<br/> array ke '.$key.' - '.$value.' votes'; 
					$data1 = "";
					for($i = 0; $i < count($UDH); $i++){
						if($UDH[$i] === $value){
						//echo "<br>".$unique[$i].$count[$i],$numb[$i]."=".$value."<br>";
							$data1 .= $TextDecoded[$i];
							$data2 = $Sender_Number[$i];
							$data3 = $ReceivingDateTime[$i];
							$data4 = substr($UDH_FULL[$i],8,2);
							$data5 = $OBJECTID[$i];
							
							//DATA UDH
							$data6 = substr($UDH_FULL[$i],0,10);
						}
					}
					
					
					if(substr($data1,0,2) == 'HR'){
						echo $data_multi['ReceivingDateTime'] = $data3;
						echo $data_multi['Sender_Number'] = $data2;
						echo $data_multi['TextDecoded'] = $data1;
						echo $data_multi['Freq_SMS'] = $data4;
						echo $data_multi['DateRead'] = null;
						echo $data_multi['Status'] = "new";
						echo $data6;
						$insert_data_inbox = $this->model_app->insert_data('gocweb_inbox', $data_multi);
						
						$mailer = $this->db->query("select * from gocweb_setting_mailer");
						
						foreach($mailer->result() as $mail){
							$sender_email = $mail->sender_email;
							$user_password = $mail->user_password;
							$receiver_email = $mail->to_email;
							$username = $mail->user_username;
							$cc = $mail->cc_email;
							$bcc = $mail->bcc_email;
						}
						$subject = 'Inbox Message from '.$data2.'('.$data3.')';
						$message = '<h2>Mailer Notification from Message User</h2><h4>'.$data2.'</h4><h4>('.$data3.')</h4><br/><br/>'.$txtdecode.'<br/><br/><h2>Automatic from e-Recruitment GOC</h2><b>www.goc.co.id</b>';

						// Configure email library
						$config['protocol'] = 'smtp';
						$config['smtp_host'] = 'ssl://smtp.googlemail.com';
						$config['smtp_port'] = 465;
						$config['smtp_user'] = $sender_email;
						$config['smtp_pass'] = $user_password;
						$config['mailtype'] = 'html';
						$config['charset'] = 'iso-8859-1';
						
						
						// Load email library and passing configured values to email library
						$this->load->library('email', $config);
						$this->email->set_newline("\r\n");

						// Sender email address
						$this->email->from($sender_email, $username);
						// Receiver email address
						$this->email->to($receiver_email);
						$this->email->cc($cc);
						$this->email->bcc($bcc);
						// Subject of email
						$this->email->subject($subject);
						// Message in email
						$this->email->message($message);

						if($this->email->send()){
							//echo "Sukses";
						}else{
							//echo "gagal";
						}
						
						$update_data_inbox_ori = $this->model_app->getQuerySrv("update gocweb_inbox_original set Processed='Sync-Ibx' where SUBSTRING(UDH,1,10)='".$data6."'");
					}else{
						$update_data_inbox_ori = $this->model_app->getQuerySrv("update gocweb_inbox_original set Processed='Sync-Ibx' where SUBSTRING(UDH,1,10)='".$data6."'");
					}
				}
			}
			$this->load->view('view_sync_sms_blast');
		}
	
		function replay($no_post){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$no_post = $this->uri->segment(3);
				$data['title'] = "Quick Reply";
							
				if(substr($no_post,0,2) === '62'){
					$no = substr($no_post,2,50);
					$number_copy_first = '+'.$no_post; 
					$number_copy_second = '0'.substr($no_post, 2, 50);
				}else if(substr($no_post,0,1) === '0'){
					$no = substr($no_post,1,50);
					$number_copy_first = '+62'.substr($no_post,1,50); 
					$number_copy_second = $no_post;
				}
				
				$DateRead = date('Y-m-d h:s:i');

				$query1 = $this->model_app->getQuerySrv("update gocweb_inbox set Status='Read', DateRead='".$DateRead."' Where Status <> 'Delete' and (Sender_Number='".$number_copy_first."' or Sender_Number='".$number_copy_second."')");
				$query2 = $this->model_app->getQuerySrv("update gocweb_outbox set Status='Read', DateRead='".$DateRead."' Where Status <> 'Delete' and (no_destination='".$number_copy_first."' or no_destination='".$number_copy_second."')");
				
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
	
				$data['inbox'] = $this->db->query("select Sender_Number, TextDecoded, ReceivingDateTime from gocweb_inbox where Sender_Number='".'+62'.$no."' and Status !='Delete' order by ObjectID desc");
				$data['no'] = '+62'.$no;
				$data['outbox'] = $this->db->query("select no_destination, text_msg, send_date from gocweb_outbox where (no_destination='".'+62'.$no."' or  no_destination='".'0'.$no."') and Status <>'Delete' order by ObjectID desc");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_message_create_quick",$data);
				$this->load->view("global/view_footer");
			}
		}
		
		function open($no_post){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$no_post = $this->uri->segment(3);
				
				if(substr($no_post,0,2) === '62'){
					$no = substr($no_post,2,50);
					$number_copy_first = '+'.$no_post; 
					$number_copy_second = '0'.substr($no_post, 2, 50);
				}else if(substr($no_post,0,1) === '0'){
					$no = substr($no_post,1,50);
					$number_copy_first = '+62'.substr($no_post,1,50); 
					$number_copy_second = $no_post;
				}
				
				$DateRead = date('Y-m-d h:s:i');

				$query1 = $this->model_app->getQuerySrv("update gocweb_inbox set Status='Read', DateRead='".$DateRead."' Where Status <> 'Delete' and (Sender_Number='".$number_copy_first."' or Sender_Number='".$number_copy_second."')");
				$query2 = $this->model_app->getQuerySrv("update gocweb_outbox set Status='Read', DateRead='".$DateRead."' Where Status <> 'Delete' and (no_destination='".$number_copy_first."' or no_destination='".$number_copy_second."')");
				
				
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				$data['inbox'] = $this->db->query("select Sender_Number, TextDecoded, ReceivingDateTime, Status from gocweb_inbox where Sender_Number='".'+62'.$no."' and Status <> 'Delete' order by ObjectID desc");
				$data['no'] = '+62'.$no;
				$data['outbox'] = $this->db->query("select no_destination, text_msg, send_date, Status from gocweb_outbox where (no_destination='".'+62'.$no."' or  no_destination='".'0'.$no."') and Status <> 'Delete' order by ObjectID desc");
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_message_open",$data);
				$this->load->view("global/view_footer");
			}
		}

		function forward($no_post){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$no_post = $this->uri->segment(3);//$this->input->post('no');
				$data['text'] = $this->input->post('text');
				$data['title'] = "Forward";
				
				if(substr($no_post,0,2) === '62'){
					$no = substr($no_post,2,50);
					$number_copy_first = '+'.$no_post; 
					$number_copy_second = '0'.substr($no_post, 2, 50);
				}else if(substr($no_post,0,1) === '0'){
					$no = substr($no_post,1,50);
					$number_copy_first = '+62'.substr($no_post,1,50); 
					$number_copy_second = $no_post;
				}
				
				$DateRead = date('Y-m-d h:s:i');

				$query1 = $this->model_app->getQuerySrv("update gocweb_inbox set Status='Read', DateRead='".$DateRead."' Where Status <> 'Delete' and (Sender_Number='".$number_copy_first."' or Sender_Number='".$number_copy_second."')");
				$query2 = $this->model_app->getQuerySrv("update gocweb_outbox set Status='Read', DateRead='".$DateRead."' Where Status <> 'Delete' and (no_destination='".$number_copy_first."' or no_destination='".$number_copy_second."')");
				
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				$data['inbox'] = $this->db->query("select Sender_Number, TextDecoded, ReceivingDateTime from gocweb_inbox where Sender_Number='".'+62'.$no."' and Status !='Delete' order by ObjectID desc");
				$data['no'] = '+62'.$no;
				$data['outbox'] = $this->db->query("select no_destination, text_msg, send_date from gocweb_outbox where (no_destination='".'+62'.$no."' or  no_destination='".'0'.$no."' )and Status <>'Delete' order by ObjectID desc");
				
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_message_create_quick",$data);
				$this->load->view("global/view_footer");
			}
		}
		
		function Send_Mail() {
			$sender_email = 'mailer.goc@gmail.com';
			$user_password = 'gl0ria0rigitac0smetic';
			$receiver_email = 'evan.abeiza@gmail.com';
			$username = 'mailer.goc';
			$subject = 'Inbox Message from ';
			$message = '<h2>Mailer Notification from Message User</h2><h4>Test</h4><h4>Test</h4><br/><br/>Test Message<br/><br/><h2>Automatic from e-Recruitment GOC</h2><b>www.goc.co.id</b>';

			// Configure email library
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_port'] = 465;
			$config['smtp_user'] = $sender_email;
			$config['smtp_pass'] = $user_password;
			$config['mailtype'] = 'html';
			$config['charset'] = 'iso-8859-1';
			
			
			// Load email library and passing configured values to email library
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			// Sender email address
			$this->email->from($sender_email, $username);
			// Receiver email address
			$this->email->to($receiver_email);
			// Subject of email
			$this->email->subject($subject);
			// Message in email
			$this->email->message($message);

			if($this->email->send()){
				echo "Sukses";
			}else{
				echo "gagal";
			}
		}
	}
	/*End of file controller_message.php*/
	/*Location:.application/controllers/controller_message.php*/