<?php
class News_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //1. fungsi untuk menampilkan semua data
    function get_all()
    {
        $data = array();
        $this->db->select('*');
        $this->db->where('NEWS.NEWS_CAT_F_ID = NEWS_CAT.NEWS_CAT_ID');
        $this->db->order_by('NEWS_ID DESC');
        $Q = $this->db->get('NEWS, NEWS_CAT');

        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $Q->free_result();
        return $data;
    }

    //2. fungsi untuk melihat detail berdasarkan id
    function get_detail_by_id($id)
    {
        $data = array();
        $this->db->select('*');
        $this->db->where('NEWS.NEWS_CAT_F_ID = NEWS_CAT.NEWS_CAT_ID');
        $this->db->where('NEWS.NEWS_ID',$id);
        $Q = $this->db->get('NEWS, NEWS_CAT');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }

    //3. fungsi untuk tambah data
    function add($img)
    {
        $action = $this->db->query("INSERT INTO NEWS (NEWS_ID, NEWS_CAT_F_ID, NEWS_TITLE, NEWS_DESCRIPTION, NEWS_IMAGE) VALUES
        (news_id_seq.NEXTVAL, '".$this->input->post('news_cat_F_ID')."', '".$this->input->post('news_title')."', '".$this->input->post
        ('news_description')."', '".$img."')");

        return $action;
    }

    //4. fungsi untuk ubah data
    function update_by_admin($id,$img)
    {
       $data = array(
        'NEWS_CAT_F_ID' => $this->input->post('news_cat_F_ID'),
        'NEWS_TITLE' => $this->input->post('news_title'),
        'NEWS_DESCRIPTION' => $this->input->post('news_description'),
        'NEWS_IMAGE' => "$img"
       );

       $this->db->where('NEWS_ID',$id);
       $action = $this->db->update('NEWS',$data);

       return $action;
    }

    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('NEWS_ID', $id);
        $action = $this->db->delete('NEWS');
        return $action;
    }

    //6. fungsi untuk menampilkan data dengan model dropdown list
    function get_drop_down()
    {

    }
}
?>