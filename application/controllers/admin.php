<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if($this->Auth_model->check_session()== FALSE){
			redirect('auth/');
			}
	}
	
	function index()
	{
		$this->load->view('admin/dashboard');
	}
	
	function logout()
	{
		$this->Auth_model->logout();
		redirect('auth/');
	}
	
//================================== MANAGEMEN USER ===================================	
	function users()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['users']=$this->Admin_model->get_all_users();
		$this->load->view('admin/user',$data);
	}
	
	function add_user()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['groups'] = $this->Admin_model->get_group();
		$this->load->view('admin/user_add', $data);
	}
	
	function update_user()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['users']=$this->Admin_model->get_detail_users($id);
		$data['groups']=$this->Admin_model->get_group();
		$this->load->view('admin/user_update', $data);
	}
	
	function save_user()
	{
		$id_user	=	$this->input->post('id_user');
		$username	=	$this->input->post('username');
		$password	=	do_hash($this->input->post('password'), 'md5');
		$id_group	=	$this->input->post('id_group');
		$nama		=	$this->input->post('nama');
		$alamat		=	$this->input->post('alamat');
		$status		=	$this->input->post('status');
		
		if ($status	==	'new'){		
			$data	=	array(
						'id_user'	=>intval(date('Hisd')),
						'username'	=>$username,
						'password'	=>$password,
						'id_group'	=>$id_group,
						'nama'		=>$nama,
						'alamat'	=>$alamat
					);
			$this->Admin_model->insert('users',$data);
			redirect('admin/users');
			}
		else{
			$data	=	array(
						'username'	=>$username,
						'password'	=>$password,
						'id_group'	=>$id_group,
						'nama'		=>$nama,
						'alamat'	=>$alamat
					);
			$this->Admin_model->update('users',$data,array('id_user' => $id_user));
			redirect('admin/users');
			}
	}
	
	function delete_user()
	{
		$id = $this->uri->segment(3);
		$this->Admin_model->delete('users',array('id_user' => $id));
		redirect('admin/users');
	}

//================================== MANAGEMEN NEWS ===================================	

	function news()
	{	
		$data['news']=$this->Admin_model->get_all_news();
		$this->load->view('admin/news',$data);
	}
	
	function add_news()
	{
		$data['kategori'] = $this->Admin_model->get_kategori();
		$data['tags'] = $this->Admin_model->get_tags();
		$this->load->view('admin/news_add',$data);
	}
	
	function update_news()
	{
		$id = $this->uri->segment(3);
		$data['news']=$this->Admin_model->get_detail_news($id);
		$data['kategori'] = $this->Admin_model->get_kategori();
		$data['tags'] = $this->Admin_model->get_tags();
		$data['news_tags'] = $this->Admin_model->get_news_tags($id);
		$this->load->view('admin/news_update',$data);
	}
	function save_news()
	{
		$config['upload_path']		= 	'./uploads/';
        $config['allowed_types']	= 	'gif|jpg|png';
        $config['max_size']			= 	'0';
		$config['overwrite']		= 	TRUE;
		$image						=	array();
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
		//$id_tags					=	implode (',',$tags);
		$status						=	$this->input->post('status');
				
		if ($status=='new'){
			$idnews	=	intval(date('Hisd'));
			$data	=	array(
						'id_news'       => $idnews,
						'title'         => $title,
						'post'          => $post,
						'datetime'      => $datetime,
						'id_user'       => $this->session->userdata('id_user'),
						'id_kategori'	=> $id_kategori,
						//'id_tags'       => $id_tags,
						'image'         => $image['file_name']
					);
			$this->Admin_model->insert('news',$data);
			foreach($tags as $id_tags){
	 			$data = array(
	 				'id_news' => $idnews,
	 				'id_tags' => $id_tags
	 			);
	 			$this->db->insert('news_tags', $data);
			}
			redirect('admin/news');
			}
		else{
			$data = array(
                'title'         => $title,
                'post'          => $post,
                'datetime'      => $datetime,
                'id_user'       => $id_user,
				'id_kategori'	=> $id_kategori,
				//'id_tags'       => $id_tags,
				'image'         => $image['file_name']
            );
			$this->Admin_model->delete('news_tags',array('id_news' => $id_news));
			$this->Admin_model->update('news',$data,array('id_news' => $id_news));
			foreach($tags as $id_tags){
	 			$data = array(
	 				'id_news' => $id_news,
	 				'id_tags' => $id_tags
	 			);
	 			$this->db->insert('news_tags', $data);
			}
			redirect('admin/news');
		}
	}
	
	function delete_news()
	{
		$id = $this->uri->segment(3);
		$this->Admin_model->delete('news',array('id_news' => $id));
		$this->Admin_model->delete('news_tags',array('id_news' => $id));
		redirect('admin/news');
	}

//================================== MANAGEMEN KATEGORI ===============================
	function kategori()
	{	
		$data['kategori']=$this->Admin_model->get_kategori();
		$this->load->view('admin/kategori',$data);
	}
	
	function add_kategori()
	{
		$this->load->view('admin/kategori_add');
	}
	
	function update_kategori()
	{
		$id = $this->uri->segment(3);
		$data['kategori']=$this->Admin_model->get_detail_kategori($id);
		$this->load->view('admin/kategori_update', $data);
	}
	
	function save_kategori()
	{
		$id_kategori	=	$this->input->post('id_kategori');
		$nama_kategori	=	$this->input->post('nama_kategori');
		$status			=	$this->input->post('status');
		
		$data	=	array(
						'nama_kategori'	=> $nama_kategori
				);
		
		if ($status	==	'new'){
			$this->Admin_model->insert('categories',$data);
			redirect('admin/kategori');
		}
		else{
			$this->Admin_model->update('categories',$data,array('id_kategori'=>$id_kategori));
			redirect('admin/kategori');
		}
	}
	
//================================== MANAGEMEN TAGS ===================================	
	
	function tags()
	{
		$data['tags']=$this->Admin_model->get_tags();
		$this->load->view('admin/tags',$data);
	}
	
	function add_tags()
	{
		$this->load->view('admin/tags_add');
	}
	
	function update_tags()
	{
		$id = $this->uri->segment(3);
		$data['tags']=$this->Admin_model->get_detail_tags($id);
		$this->load->view('admin/tags_update', $data);
	}
	
	function save_tags()
	{
		$id_tags	=	$this->input->post('id_tags');
		$nama_tags	=	$this->input->post('nama_tags');
		$status		=	$this->input->post('status');
		
		$data	=	array(
						'nama_tags'=>$nama_tags
					);
		
		if ($status=='new'){
			$this->Admin_model->insert('tags',$data);
			redirect('admin/tags');
			}
		else {
			$this->Admin_model->update('tags',$data,array('id_tags' => $id_tags));
			redirect('admin/tags');
			}
	}
}