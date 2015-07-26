<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporter_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_all_news()
	{	
		//$id		=	array('id_user'=>$id_user);
		//$query	=	$this->db->get_where('news',$id);
		//if ($query->num_rows() != 0){
		//echo "No data";}
		//else {
		 $sql="SELECT
		 news.id_news,
		 news.title,
		 categories.nama_kategori
		 FROM news
		 INNER JOIN categories ON categories.id_kategori = news.id_kategori
		 ";
		 return $this->db->query($sql);
		 //}
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
	
	function get_detail_news($id)
	{
		$sql="SELECT * FROM news
		WHERE id_news='$id'";
		return $this->db->query($sql);
	}
	
	function get_news_tags($id)
	{
		$sql = "SELECT DISTINCT id_news,id_tags FROM news_tags WHERE id_news='$id'";
		return $this->db->query($sql);
	}
	
	function get_profil($id_user)
	 {
		 $sql="SELECT * FROM users
		 WHERE id_user='$id_user'
		 ";
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