<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporter extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if($this->Auth_model->check_session()== FALSE){
			redirect('auth/');
			}
	}
	
	function index()
	{
		$this->load->view('reporter/dashboard');
	}
	
	function logout(){
		$this->Auth_model->logout();
		redirect('auth/');
	}
	
//================================== MANAGEMEN NEWS ===================================	

	function news()
	{	
		//$id_user=$this->session->userdata('id_user');
		$data['news']=$this->Reporter_model->get_all_news();
		$this->load->view('reporter/news',$data);
	}
	
	function add_news()
	{
		$data['kategori'] = $this->Reporter_model->get_kategori();
		$data['tags'] = $this->Reporter_model->get_tags();
		$this->load->view('reporter/news_add',$data);
	}
	
	function update_news()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['news']=$this->Reporter_model->get_detail_news($id);
		$data['kategori'] = $this->Reporter_model->get_kategori();
		$data['tags'] = $this->Reporter_model->get_tags();
		$data['news_tags'] = $this->Admin_model->get_news_tags($id);
		$this->load->view('reporter/news_update',$data);
	}
	function save_news()
	{
		$config['upload_path']		= 	'./uploads/';
		$config['allowed_types']	= 	'gif|jpg|png';
		$config['max_size']		= 	'0';
		$config['overwrite']		= 	TRUE;
		$image				=	array();
		$this->load->library('upload', $config);
		$this->upload->do_upload('image_file');
		$image						=	$this->upload->data();
		$id_news					=	$this->input->post('id_news');
		$title						=	$this->input->post('title');
		$id_kategori				=	$this->input->post('id_kategori');
		$post						=	$this->input->post('post');
		date_default_timezone_set("Asia/Jakarta"); 
		$datetime					=	date('Y-m-d H:i:s');
		$id_user					=	$this->input->post('id_user');
		$tags						=	$this->input->post('tags');
		$id_tags					=	implode (',',$tags);
		$status						=	$this->input->post('status');
				
		if ($status=='new'){
			$data	=	array(
						'id_news'       => intval(date('Hisd')),
						'title'         => $title,
						'post'          => $post,
						'datetime'      => $datetime,
						'id_user'       => $this->session->userdata('id_user'),
						'id_kategori'	=> $id_kategori,
						'id_tags'       => $id_tags,
						'image'         => $image['file_name']
					);
			$this->Reporter_model->insert('news',$data);
			redirect('reporter/news');
			}
		else{
			$data = array(
                'title'         => $title,
                'post'          => $post,
                'datetime'      => $datetime,
                'id_user'       => $id_user,
				'id_kategori'	=> $id_kategori,
				'id_tags'       => $id_tags,
				'image'         => $image['file_name']
            );
			$this->Reporter_model->update('news',$data,array('id_news' => $id_news));
			redirect('reporter/news');
		}
	}
	
	function delete_news()
	{
		$id = $this->uri->segment(3);
		$this->Reporter_model->delete('news',array('id_news' => $id));
		redirect('reporter/news');
	}
	
//================================== MANAGEMEN PROFIL ===================================	
	
	function profil()
	{
		$id_user=$this->session->userdata('id_user');
		$data['profil']=$this->Reporter_model->get_profil($id_user);
		$this->load->view('reporter/profil',$data);
	}
	
	function update_profil()
	{
		$id_user=$this->session->userdata('id_user');
		$data['profil']=$this->Reporter_model->get_profil($id_user);
		$this->load->view('reporter/profil_update', $data);
	}
	function save_profil()
	{
		$id_user	=	$this->input->post('id_user');
		$nama		=	$this->input->post('nama');
		$alamat		=	$this->input->post('alamat');
		$username	=	$this->input->post('username');
		$password	=	do_hash($this->input->post('password'), 'md5'); 
		
		$data	=	array(
					'nama'		=>	$nama,
					'alamat'	=>	$alamat,
					'username'	=>	$username,
					'password'	=>	$password
				);
		
		$this->Reporter_model->update('users',$data,array('id_user'=>$id_user));
		redirect('reporter/profil');
	}
}