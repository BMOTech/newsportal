<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Auth_model extends CI_Model {
	public function cek($username,$password)
	{
		//retrieve data from user table
		$data=array('username'=>$username,'password'=>$password);
		$q=$this->db->get_where('users',$data);
		$r=$q->row();
		$u=$r->id_user;
		$n=$r->username;
		$p=$r->password;
		$g=$r->id_group;
			
		//check authority
		if ( $username==$n && $password==$p && $g=='2' ) 
		{
			$us=array('id_user'=>$u,'login_state'=>TRUE,'id_group'=>$g);
			session_start();
			$this->session->set_userdata($us);
			redirect ('reporter/');
		} 
		else if( $username==$n && $password==$p && $g=='1')
		{
			$us=array('id_user'=>$u,'login_state'=>TRUE,'id_group'=>$g);
			session_start();
			$this->session->set_userdata($us);
			redirect ('admin/');
		} 
		else 
		{
			redirect ('auth/');
		}	
	}  
	
	public function check_session(){
		if ($this->session->userdata('id_user') AND $this->session->userdata('login_state')==TRUE) 
		{
			return TRUE;
		} 
		else 
		{
			return FALSE;
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('login_state');
		$this->session->unset_userdata('id_group');
		session_destroy();
		}
}