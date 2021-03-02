<?php 

class Book_model extends CI_Model 
{
    public function getBooks()
    {
        $filter = $this->input->get('find'); # ambil parameter dari field find
        $this->db->like('title',$filter); # filter berdasarkan kata kunci
        return $this->db->get("buku");
    }

    public function getSingleBook($field, $value)
    {
        $this->db->where($field, $value);
        return $this->db->get('buku');
    }

    public function insertBook($data)
    {
        $this->db->insert('buku',$data);
        return $this->db->insert_id(); 
    }

    public function updateBook($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('buku',$data);

        return $this->db->affected_rows();
    }

    public function deleteBook($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('buku');

        return $this->db->affected_rows();
    }

}