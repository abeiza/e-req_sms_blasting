<?php 
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	class Model_App extends CI_Model{
		function get_data($table){
			return $this->db->get($table);
		}
		
		function get_data_where($pk,$id,$table){
			$this->db->where($pk,$id);
			return $this->db->get($table);
		} 
		
		function get_data_limit($table, $limit, $offset){
			return $this->db->get($table, $limit , $offset);
		}
		
		function get_login($username,$password){
			return $this->db->query("select * from gocweb_user where user_username='".$username."' and user_password='".$password."'");
		}
		
		function get_update($table,$data,$pk,$id){
			$this->db->where($pk,$id);
			return $this->db->update($table,$data);
		}
		
		function get_insert($table,$data){
			return $this->db->insert($table,$data);
		}
		
		function get_delete($table,$pk,$id){
			$this->db->where($pk,$id);
			return $this->db->delete($table);
		}
		
		function getMaxKode($table, $pk, $kode)
		{
			$q = $this->db->query("select MAX(RIGHT(".$pk.",4)) as kd_max from ".$table."");
			$kd = "";
			if($q->num_rows()>0)
			{
				foreach($q->result() as $k)
				{
					$tmp = ((int)$k->kd_max)+1;
					$kd = sprintf("%04s", $tmp);
				}
			}
			else
			{
				$kd = "0001";
			}	
			return $kode.$kd;
		}
		
		function getMaxKodelong($table, $pk, $kode)
		{
			$q = $this->db->query("select MAX(RIGHT(".$pk.",7)) as kd_max from ".$table."");
			$kd = "";
			if($q->num_rows()>0)
			{
				foreach($q->result() as $k)
				{
					$tmp = ((int)$k->kd_max)+1;
					$kd = sprintf("%07s", $tmp);
				}
			}
			else
			{
				$kd = "0000001";
			}	
			return $kode.$kd;
		}
		
		function getQueryMy($data){
			$this->load->database('mysql_dbs',FALSE,TRUE);
			return $this->db->query($data);
		}
		
		function getQuerySrv($data){
			$this->load->database('default',FALSE,TRUE);
			return $this->db->query($data);
		}
		
		function get_updateSrv($table,$data,$pk,$id){
			$this->load->database('default',FALSE,TRUE);
			$this->db->where($pk,$id);
			return $this->db->update($table,$data);
		}
		
		function insert_datamy($table, $data){
			$this->load->database('mysql_dbs',FALSE,TRUE);
			return $this->db->insert($table,$data);
		}
		
		function insert_datamyLast($table, $data){
			$this->load->database('mysql_dbs',FALSE,TRUE);
			$this->db->insert($table,$data);
			return $this->db->insert_id();
		}
		
		function insert_data($table, $data){
			$this->load->database('default',FALSE,TRUE);
			return $this->db->insert($table,$data);
		}
	}
	/*End of file model_app.php*/
	/*Location:.application/models/model_app.php*/