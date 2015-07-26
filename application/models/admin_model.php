<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_all_users()
	{	
		 $sql="SELECT  
		 users.id_user,
		 users.username,
         users_groups.group_name,
		 users.nama,
		 users.alamat
		 FROM users
		 INNER JOIN users_groups ON users_groups.id_group = users.id_group
		 ";
		 return $this->db->query($sql);
	}
	 
	function get_group(){
		$sql = "SELECT * FROM users_groups";
		return $this->db->query($sql);
	 }

	function get_detail_users($id)
	{
		$sql="SELECT * FROM users
		WHERE id_user='$id'";
		return $this->db->query($sql);
	}

	function get_all_news()
	{	
		 $sql="SELECT
		 news.id_news,
		 news.title,
		 categories.nama_kategori
		 FROM news
		 INNER JOIN categories ON categories.id_kategori = news.id_kategori
		 ";
		 return $this->db->query($sql);
	}
	
	function get_kategori()
	{
		$sql = "SELECT * FROM categories";
		return $this->db->query($sql);
	}
	
	function get_tags()
	{
		$sql = "SELECT * FROM tags";
		return $this->db->query($sql);
	}
	
	function get_news_tags($id)
	{
		$sql = "SELECT DISTINCT id_news,id_tags FROM news_tags WHERE id_news='$id'";
		return $this->db->query($sql);
	}
	
	function get_detail_news($id)
	{
		$sql="SELECT * FROM news
		WHERE id_news='$id'";
		return $this->db->query($sql);
	}
	
	function get_detail_kategori($id)
	{
			$sql="SELECT * FROM categories
			WHERE id_kategori='$id'";
			return $this->db->query($sql);
	}	
		 
	function get_detail_tags($id)
	{
		$sql="SELECT * FROM tags
		WHERE id_tags='$id'";
		return $this->db->query($sql);
	}

	function insert($tabel,$data)
	{
		return $this->db->insert($tabel,$data);
	}
		
	function update($tabel,$data,$where)
	{
		return $this->db->update($tabel,$data,$where);
	}
	
	function delete($tabel,$where)
	{
		return $this->db->delete($tabel,$where);
	}
	
}	