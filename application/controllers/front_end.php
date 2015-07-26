<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_end extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index()
	{	
		$data['front_end']=$this->Front_end_model->get_all_front();
		$data['carousel']=$this->Front_end_model->get_carousel();
		$data['carousel_active']=$this->Front_end_model->get_carousel_active();
		//=============================== wajib ===================================
        $data['kategori']=$this->Front_end_model->get_all_kategori();
		$data['popular']=$this->Front_end_model->get_popular();
		$data['tags_news']=$this->Front_end_model->get_all_tags();
		//=========================================================================
		$this->load->view('front_end/front',$data);
		
	}
    
    function detail()
	{
		$id = $this->uri->segment(3);
		$this->Front_end_model->tambah_point_post($id);
		$data['detail']=$this->Front_end_model->get_news($id);
		$data['tags'] = $this->Admin_model->get_tags();
		$data['news_tags'] = $this->Front_end_model->get_news_tags($id);
		//=============================== wajib ===================================
		$data['kategori']=$this->Front_end_model->get_all_kategori();
		$data['popular']=$this->Front_end_model->get_popular();
		$data['tags_news']=$this->Front_end_model->get_all_tags();
		$data['front_end']=$this->Front_end_model->get_all_front();
		//=========================================================================
		$this->load->view('front_end/detailnews',$data);
	}
    
	function kategori()
	{
		$id = $this->uri->segment(3);
		$data['news_kategori']=$this->Front_end_model->get_news_kategori($id);
		$data['current_kategori']=$this->Front_end_model->get_current_kategori($id);
		//=============================== wajib ===================================
		$data['kategori']=$this->Front_end_model->get_all_kategori();
		$data['popular']=$this->Front_end_model->get_popular();
		$data['tags_news']=$this->Front_end_model->get_all_tags();
		$data['front_end']=$this->Front_end_model->get_all_front();
		//=========================================================================
		$this->load->view('front_end/kategori',$data);
	}
	
	function search()
	{
		$query=$this->input->get('query');
		$data['search']=$this->Front_end_model->get_search($query);
		//=============================== wajib ===================================
		$data['kategori']=$this->Front_end_model->get_all_kategori();
		$data['popular']=$this->Front_end_model->get_popular();
		$data['tags_news']=$this->Front_end_model->get_all_tags();
		$data['front_end']=$this->Front_end_model->get_all_front();
		//=========================================================================
		$this->load->view('front_end/result',$data);
	}
	
	function tags()
	{
		$id = $this->uri->segment(3);
		$data['tags']=$this->Front_end_model->get_all_tags();
		$data['current_tag']=$this->Front_end_model->get_current_tag($id);
		$data['news_tag']=$this->Front_end_model->get_news_tag($id);
 	    //=============================== wajib ===================================
		$data['kategori']=$this->Front_end_model->get_all_kategori();
		$data['popular']=$this->Front_end_model->get_popular();
		$data['tags_news']=$this->Front_end_model->get_all_tags();
		$data['front_end']=$this->Front_end_model->get_all_front();
		//=========================================================================
		$this->load->view('front_end/tags',$data);
	}
}