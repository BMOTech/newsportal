<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_end_model extends CI_Model {
	 function __construct() {
		parent::__construct();
	}
	 
	 public function get_all_front()
	 {	
	    $sql="SELECT
		 news.title,
         news.id_news,
		 news.image,
		 news.point,
		 news.datetime
         from news
         order by news.datetime desc LIMIT 6
         ";
		 return $this->db->query($sql);
	 }
	 public function get_carousel()
	 {	
	    $sql="SELECT
		 news.title,
         news.id_news,
		 news.image
         from news
         order by news.datetime desc LIMIT 3
         ";
		 return $this->db->query($sql);
	 }
	 public function get_carousel_active()
	 {	
	    $sql="SELECT
		 news.title,
         news.id_news,
		 news.image
         from news
		 where id_kategori='7'
         LIMIT 1
         ";
		 return $this->db->query($sql);
	 }
     
      function get_all_kategori()
	 {	
	    $sql="SELECT
		 *
         from categories
         
         ";
		 return $this->db->query($sql);
	 }
     
	 function get_news_tags($id)
	{
		$sql = "SELECT DISTINCT id_news,id_tags FROM news_tags WHERE id_news='$id'";
		return $this->db->query($sql);
	}
	 
     function get_news($id)
	 {	
	    $sql="SELECT DISTINCT
		 news.id_news,
		 news.title,
		 news.post,
		 news.datetime,
		 news.id_kategori,
		 categories.nama_kategori,
         users.nama,
		 news.image,
		 news.point
		 FROM news
		 INNER JOIN categories ON categories.id_kategori = news.id_kategori
		 INNER JOIN users ON users.id_user = news.id_user
		 WHERE news.id_news='$id'
		 ";
		 return $this->db->query($sql);
	 }
	 
	 function get_news_kategori($id)
	 {	
	    $sql="SELECT DISTINCT
		 news.id_news,
		 news.title,
		 news.id_kategori,
		 categories.nama_kategori,
		 news.image
		 FROM news
		 INNER JOIN categories ON categories.id_kategori = news.id_kategori
		 WHERE news.id_kategori='$id'
		 ";
		 return $this->db->query($sql);
	 }
	 
	 function get_current_kategori($id)
	 {	
	    $sql="SELECT *
		 FROM categories
		 WHERE id_kategori='$id'
		 ";
		 return $this->db->query($sql);
	 }
	 
	 function get_popular()
	 {	
	    $sql="SELECT 
		 *
		 FROM news
		 order by point desc LIMIT 5
		 ";
		 return $this->db->query($sql);
	 }
	 
	 function get_point_post($id){
	 	$this->db->select("point");
	 	$this->db->where("id_news",$id);
	 	$g = $this->db->get("news");
	 	$r = $g->row_array();
	 	return $r['point'];
	 }
	 
	 function tambah_point_post($id){
	 
	 	$point 		= $this->get_point_post($id);
	 	$new_point	= $point + 1;
	 	$this->db->where("id_news",$id);
	 	$this->db->update("news",array("point" => $new_point));
	 
	 }
	 
	 function get_search ($query)
	 {
	 $sql="SELECT * FROM news WHERE title LIKE '%$query%'";
	 return $this->db->query($sql);
	 }
	 
	 function get_all_tags()
	 {	
	    $sql="SELECT *
         from tags    
         ";
		 return $this->db->query($sql);
	 }
	 
	 function get_current_tag($id)
	 {	
	    $sql="SELECT *
		 FROM tags
		 WHERE id_tags='$id'
		 ";
		 return $this->db->query($sql);
	 }
     
	 function get_news_tag($id)
	 {	
	    $sql="SELECT DISTINCT
		 news.id_news,
		 news.title,
         tags.nama_tags,
		 news.image
		 FROM news
		 INNER JOIN news_tags ON news_tags.id_news = news.id_news
		 INNER JOIN tags ON tags.id_tags = news_tags.id_tags
		 WHERE news_tags.id_tags='$id'
		 ";
		 return $this->db->query($sql);
	 }
	 
 }