<?php
/**
* 
*/
class Articlesmodel extends CI_Model
{
	public function articles_list($limit, $offset)
	{
		// return ['abc'=>'abc','def'=>'def'];
		// print_r($offset); exit;
		$user_id = $this->session->userdata('user_id');
		$q = $this->db->select(['title','id','created_at'])
						->from('articles')
						->where('user_id',$user_id)
						->limit($limit , $offset)
						->get();
		return $q->result();		
	}

	public function all_articles_list($limit, $offset)
	{
		// return ['abc'=>'abc','def'=>'def'];
		// print_r($offset); exit;
		// $user_id = $this->session->userdata('user_id');
		$q = $this->db->select(['title','id','created_at'])
						->from('articles')
						// ->where('user_id',$user_id)
						->limit($limit , $offset)
						->order_by('created_at','DESC')
						->get();
		return $q->result();		
	}

	public function num_rows()
	{
		$user_id = $this->session->userdata('user_id');
		$q = $this->db
						->from('articles')
						->where('user_id',$user_id)
						->get();
		return $q->num_rows();	
	}

	public function count_all_articles()
	{
		$q = $this->db->select(['title','id','created_at'])
						->from('articles')
						// ->where('user_id',$user_id)
						->get();
		return $q->num_rows();	
	}

	public function add_article($array)
	{
		return $this->db->insert('articles',$array); //Returns TRUE/FALSE and insert row
	}
	public function find_article($article_id)
	{
		$q = $this->db->select(['title','body','id'])
					->where('id',$article_id)
					->get('articles');

		return $q->row();
	}
	public function update_article($id,$row)
	{	
		// print_r($row); exit;
		return $this->db 		//Return True/False row effected or not
				->where('id', $id)
				->update('articles', $row);
	}
	public function delete_article($id)
	{	
		// print_r($id);exit;
		return $this->db->delete('articles',['id'=>$id]);
	}
	public function count_search_articles( $query )
	{
		// print_r($query);exit;
		$q = $this->db->from('articles')
					->like('title', $query)
					->get();
					//echo "$q->num_rows()";
		return $q->num_rows();			
	}

	public function search( $query, $limit, $offset )
	{
		$q = $this->db->from('articles')
						->like('title', $query )
						->limit( $limit , $offset )
						->get();
		return $q->result();				
	}

	public function find($id)
	{
		$q = $this->db->from('articles')
					->where('id',$id)
					->get();
			if ($q->num_rows()) {
				return $q->row();
			}
			else{ return FALSE; }
	}
	
}