<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('auth/auth');
	}
	public function login()
	{
		$username=$this->input->post('username');
		$password= do_hash($this->input->post('password'), 'md5'); 
		$this->Auth_model->cek($username,$password);	
	}
}