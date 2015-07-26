<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Read extends CI_Controller {

	public function index()
	{
		$data['read']=$this->Read_model->get_berita_all();
		$this->load->view('read/index',$data);
	}
	
	public function view_berita()
	{
		$id = $this->uri->segment(3);
		$data['read']=$this->Read_model->get_view_berita($id);
		$this->load->view('read/readmore',$data);
	}
	
}