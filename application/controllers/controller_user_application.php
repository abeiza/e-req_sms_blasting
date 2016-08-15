<?php
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	
	class Controller_User_Application extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				$page = $this->uri->segment(3);
				$limit = 5;
				if(!$page){
					$offset = 0;
				}else{
					$offset = $page;
				}
				$user_app = $this->db->query('select * from gocweb_resume_header');
				
				$config['total_rows'] = $user_app->num_rows();
				$config['base_url'] = base_url()."index.php/controller_user_application/index/";
				$config['per_page'] = $limit;
				$config['uri_segment'] = 3;
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
				
				$data['user_app'] = $this->db->query("select * from (select row_number() over (order by resume_objectid desc) as rownum, * from gocweb_resume_header)gocweb_resume_header, gocweb_resume_personal, gocweb_career  where gocweb_resume_header.resume_kode_lamaran = gocweb_resume_personal.kode_lamaran and gocweb_career.Career_Id=gocweb_resume_header.resume_jabatan and gocweb_resume_header.rownum > ".$offset." AND gocweb_resume_header.rownum <= ".$hasil = $offset + $limit." order by resume_objectid desc");
				
				$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
				$data['from'] = $offset+1;
				$data['to'] = $offset + $limit;
				$data['total'] = $user_app->num_rows();
				
				$this->load->view("global/view_header");
				$this->load->view("global/view_nav_top",$notif);
				$this->load->view("global/view_nav_left");
				$this->load->view("view_user_application",$data);
				$this->load->view("global/view_footer");
			}
		}
		
		function generate_resume($id){
			$id = $this->uri->segment(3);
			ob_start();
			$data['data_detail'] = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_resume_family, gocweb_resume_education, gocweb_resume_experience, gocweb_resume_other, gocweb_career WHERE 
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_personal.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_family.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_education.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_experience.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_other.kode_lamaran and
			gocweb_resume_header.resume_jabatan=gocweb_career.Career_Id and gocweb_resume_header.resume_kode_lamaran='".$id."'");
			
			$file_name = $this->db->query("select * from gocweb_resume_header where resume_kode_lamaran='".$id."'");
			
			$this->load->view('view_resume',$data);
			$html = ob_get_contents();
			ob_end_clean();
	 
			require_once('./assets/html2pdf/html2pdf.class.php');
			$pdf = new HTML2PDF('P','A4','en');
			$pdf->WriteHTML($html);
			foreach($file_name->result() as $name){
				$pdf->Output($name->resume_kode_lamaran.'.pdf', 'D');
			}
		}
		
		function get_detail_resume($id){
			$id = $this->uri->segment(3);
			$data['data_detail'] = $this->db->query("select * from gocweb_resume_header, 
			gocweb_resume_personal, gocweb_resume_family, gocweb_resume_education, gocweb_resume_experience, gocweb_resume_other, gocweb_career WHERE 
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_personal.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_family.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_education.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_experience.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_other.kode_lamaran and
			gocweb_resume_header.resume_jabatan=gocweb_career.Career_Id and 
			gocweb_resume_header.resume_kode_lamaran='".$id."'");
				
				
			$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
			$this->load->view("global/view_header");
			$this->load->view("global/view_nav_top",$notif);
			$this->load->view("global/view_nav_left");
			$this->load->view("view_user_resume",$data);
			$this->load->view("global/view_footer");
		}
		
		function generate_disc($id){
			$id = $this->uri->segment(3);
			ob_start();
			$data['data_disc'] = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_career, gocweb_test_disc WHERE 
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_personal.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_test_disc.kode_lamaran and
			gocweb_resume_header.resume_jabatan=gocweb_career.Career_Id and gocweb_resume_header.resume_kode_lamaran='".$id."'");
			
			$file_name = $this->db->query("select * from gocweb_resume_header where resume_kode_lamaran='".$id."'");
			
			$this->load->view('view_disc',$data);
			$html = ob_get_contents();
			ob_end_clean();
	 
			require_once('./assets/html2pdf/html2pdf.class.php');
			$pdf = new HTML2PDF('P','A4','en');
			$pdf->WriteHTML($html);
			foreach($file_name->result() as $name){
				$pdf->Output($name->resume_kode_lamaran.'disc.pdf', 'D');
			}
		}
		
		function get_detail_disc($id){
			$id = $this->uri->segment(3);
			$data['data_disc'] = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_career, gocweb_test_disc WHERE 
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_personal.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_test_disc.kode_lamaran and
			gocweb_resume_header.resume_jabatan=gocweb_career.Career_Id and gocweb_resume_header.resume_kode_lamaran='".$id."'");
				
				
			$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
			$this->load->view("global/view_header");
			$this->load->view("global/view_nav_top",$notif);
			$this->load->view("global/view_nav_left");
			$this->load->view("view_user_disc",$data);
			$this->load->view("global/view_footer");
		}
		
		function generate_desc($id){
			$id = $this->uri->segment(3);
			ob_start();
			$data['data_desc'] = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_career, gocweb_test_desc WHERE 
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_personal.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_test_desc.kode_lamaran and
			gocweb_resume_header.resume_jabatan=gocweb_career.Career_Id and gocweb_resume_header.resume_kode_lamaran='".$id."'");
			
			$file_name = $this->db->query("select * from gocweb_resume_header where resume_kode_lamaran='".$id."'");
			
			$this->load->view('view_desc',$data);
			$html = ob_get_contents();
			ob_end_clean();
	 
			require_once('./assets/html2pdf/html2pdf.class.php');
			$pdf = new HTML2PDF('L','A4','en');
			$pdf->WriteHTML($html);
			foreach($file_name->result() as $name){
				$pdf->Output($name->resume_kode_lamaran.'desc.pdf', 'D');
			}
		}
		
		function get_detail_desc($id){
			$id = $this->uri->segment(3);
			$data['data_desc'] = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_career, gocweb_test_desc WHERE 
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_personal.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_test_desc.kode_lamaran and
			gocweb_resume_header.resume_jabatan=gocweb_career.Career_Id and gocweb_resume_header.resume_kode_lamaran='".$id."'");
				
				
			$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
				
			$this->load->view("global/view_header");
			$this->load->view("global/view_nav_top",$notif);
			$this->load->view("global/view_nav_left");
			$this->load->view("view_user_desc",$data);
			$this->load->view("global/view_footer");
		}
		
		function search_result(){
			$result = $this->uri->segment_array(); 
			$s1 = $result[3];
			$s2 = urldecode($result[4]);
			$s3 = $result[5];
			$s4 = urldecode($result[6]);
			
			
			
			$page = $this->uri->segment(7);
			$limit = 5;
			if(!$page){
				$offset = 0;
			}else{
				$offset = $page;
			}
			
			if($s4 == 'none' and $s2 != 'none'){
				$user_app = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_career  where gocweb_resume_header.resume_kode_lamaran = gocweb_resume_personal.kode_lamaran and gocweb_career.Career_Id=gocweb_resume_header.resume_jabatan and gocweb_career.Career_Departemen='".$s2."'");
			}else if($s2 == 'none' and $s4 != 'none'){
				$user_app = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_career  where gocweb_resume_header.resume_kode_lamaran = gocweb_resume_personal.kode_lamaran and gocweb_career.Career_Id=gocweb_resume_header.resume_jabatan and (gocweb_resume_personal.pribadi_nama_lengkap like '%".$s4."%' or gocweb_resume_personal.pribadi_nama_panggilan like '%".$s4."%' or gocweb_resume_personal.kode_lamaran like '%".$s4."%' or gocweb_career.Career_Position like '%".$s4."%')");
			}else if($s4 == 'none' and $s2 == 'none'){
				$user_app = $this->db->query("select * from gocweb_resume_header");
			}else{
				$user_app = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_career  where gocweb_resume_header.resume_kode_lamaran = gocweb_resume_personal.kode_lamaran and gocweb_career.Career_Id=gocweb_resume_header.resume_jabatan and (gocweb_resume_personal.pribadi_nama_lengkap like '%".$s4."%' or gocweb_resume_personal.pribadi_nama_panggilan like '%".$s4."%' or gocweb_resume_personal.kode_lamaran like '%".$s4."%' or gocweb_career.Career_Position like '%".$s4."%') and gocweb_career.Career_Departemen='".$s2."'");
			}
			
			$config['total_rows'] = $user_app->num_rows();
			$config['base_url'] = base_url()."index.php/controller_user_application/search_result/department/".$s2."/search/".$s4;
			$config['per_page'] = $limit;
			$config['uri_segment'] = 7;
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
			
				
			if($s4 == 'none' and $s2 != 'none'){
				$data['user_app'] = $this->db->query("select * from (select row_number() over (order by resume_objectid desc) as rownum, * from gocweb_resume_header)gocweb_resume_header, gocweb_resume_personal, gocweb_career  where gocweb_resume_header.resume_kode_lamaran = gocweb_resume_personal.kode_lamaran and gocweb_career.Career_Id=gocweb_resume_header.resume_jabatan and gocweb_resume_header.rownum > ".$offset." AND gocweb_resume_header.rownum <= ".$hasil = $offset + $limit." and gocweb_career.Career_Departemen='".$s2."' order by resume_objectid desc");
			}else if($s2 == 'none' and $s4 != 'none'){
				$data['user_app'] = $this->db->query("select * from (select row_number() over (order by resume_objectid desc) as rownum, * from gocweb_resume_header)gocweb_resume_header, gocweb_resume_personal, gocweb_career  where gocweb_resume_header.resume_kode_lamaran = gocweb_resume_personal.kode_lamaran and gocweb_career.Career_Id=gocweb_resume_header.resume_jabatan and gocweb_resume_header.rownum > ".$offset." AND gocweb_resume_header.rownum <= ".$hasil = $offset + $limit." and (gocweb_resume_personal.pribadi_nama_lengkap like '%".$s4."%' or gocweb_resume_personal.pribadi_nama_panggilan like '%".$s4."%' or gocweb_resume_personal.kode_lamaran like '%".$s4."%' or gocweb_career.Career_Position like '%".$s4."%') order by resume_objectid desc");			
			}else if($s4 == 'none' and $s2 == 'none'){					
				$data['user_app'] = $this->db->query("select * from (select row_number() over (order by resume_objectid desc) as rownum, * from gocweb_resume_header)gocweb_resume_header, gocweb_resume_personal, gocweb_career  where gocweb_resume_header.resume_kode_lamaran = gocweb_resume_personal.kode_lamaran and gocweb_career.Career_Id=gocweb_resume_header.resume_jabatan and gocweb_resume_header.rownum > ".$offset." AND gocweb_resume_header.rownum <= ".$hasil = $offset + $limit." order by resume_objectid desc");
			}else{		
				$data['user_app'] = $this->db->query("select * from (select row_number() over (order by resume_objectid desc) as rownum, * from gocweb_resume_header)gocweb_resume_header, gocweb_resume_personal, gocweb_career  where gocweb_resume_header.resume_kode_lamaran = gocweb_resume_personal.kode_lamaran and gocweb_career.Career_Id=gocweb_resume_header.resume_jabatan and gocweb_resume_header.rownum > ".$offset." AND gocweb_resume_header.rownum <= ".$hasil = $offset + $limit." and (gocweb_resume_personal.pribadi_nama_lengkap like '%".$s4."%' or gocweb_resume_personal.pribadi_nama_panggilan like '%".$s4."%' or gocweb_resume_personal.kode_lamaran like '%".$s4."%' or gocweb_career.Career_Position like '%".$s4."%') and gocweb_career.Career_Departemen='".$s2."' order by resume_objectid desc");
			}
		
			
			$notif['inbox'] = $this->db->query("select * from gocweb_inbox where Status='new' order by ObjectID desc");
			
			$data['from'] = $offset+1;
			$data['to'] = $offset + $limit;
			$data['total'] = $user_app->num_rows();
			
			$this->load->view("global/view_header");
			$this->load->view("global/view_nav_top",$notif);
			$this->load->view("global/view_nav_left");
			$this->load->view("view_user_application",$data);
			$this->load->view("global/view_footer");
		}
		
		function search_application($str){	
			$cek = $this->session->userdata('success_login');
			if(empty($cek)){
				$this->load->view("view_connection");
			}else{
				if($this->input->post('dept')){
					$dept = $this->input->post('dept');
				}else{
					$dept = 'none';
				}
				
				if($this->input->post('search')){
					$search = $this->input->post('search');
				}else{
					$search = 'none';
				}
				
				
				$array = array('department' => $dept, 'search' => $search);
				$str = $this->uri->assoc_to_uri($array);
					redirect('controller_user_application/search_result/'.$str);
			}
		}
		
	}
	/*End of file controller_user_application.php*/
	/*Location:.application/controllers/controller_user_application.php*/