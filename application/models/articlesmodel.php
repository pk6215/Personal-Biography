<?php
class Articlesmodel extends CI_Model
{
	public function articles_list( $limit, $offset )
	{
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
							->select(['articletitle', 'id'])
							->from('articles')
							->where('user_id', $user_id)
							->limit( $limit, $offset )
							->get();
		return $query->result();					
	}

	public function num_rows()
	{
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
							->select(['articletitle', 'id'])
							->from('articles')
							->where('user_id', $user_id)
							->get();
		return $query->num_rows();
	}
	
	public function add_articles($array)
	{
		return $this->db->insert('articles', $array);

	}

	public function find_article($article_id)
	{
		$article_query = $this->db->select(['id', 'articletitle', 'articlebody'])
							  ->where('id', $article_id)
							  ->get('articles');
		return $article_query->row();					  
	}

	public function update_article($article_id, array $article)
	{
		return $this->db
					->where('id', $article_id)
					->update('articles', $article);
	}

	public function delete_articles($article_id)
	{
		return $this->db->delete('articles', ['id'=> $article_id]);
	}

	public function count_all_articles()
	{
		$query = $this->db
							->select(['articletitle', 'id'])
							->from('articles')
							->get();
		return $query->num_rows();
	}

	public function all_articles_list( $limit, $offset )
	{
		$query = $this->db
							->select(['articletitle', 'id', 'created_at'])
							->from('articles')
							->limit( $limit, $offset )
							->order_by('created_at', 'DESC')
							->get();
		return $query->result();					
	}

	public function search($query, $limit, $offset)
	{
		$query_search = $this->db->from('articles')
							 ->like('articletitle', $query)
							 ->limit($limit, $offset)
							 ->get();
		return $query_search->result();					 
	}

	public function count_search_result($query)
	{
		$count_search = $this->db->from('articles')
								 ->like('articletitle', $query)
								 ->get();
					return  $count_search->num_rows();
	}

	public function find($id)
	{
		$query_found = $this->db->from('articles')
							->where(['id' => $id])
							->get();
		if($query_found->num_rows())
			return $query_found->row();
		return false;					
	}
}
?>