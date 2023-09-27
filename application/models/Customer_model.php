<?php
class Customer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //1. fungsi untuk menampilkan semua data
    function get_all(){
        $data = array();
        $this->db->select('*');
        $this->db->order_by('CUSTOMER_NAME ASC');
        $Q = $this->db->get('CUSTOMER');

        if($Q->num_rows() > 0)
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
        $this->db->where('CUSTOMER.CUSTOMER_ID', $id);
        $Q = $this->db->get('CUSTOMER');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }
    //3. fungsi untuk tambah data
    function add(){
        $action = $this->db->query("INSERT INTO CUSTOMER( CUSTOMER_ID, CUSTOMER_NAME, CUS_EMAIL, PASSWORD) VALUES (customer_id_seq.NEXTVAL,'".$this-> input->post('customer_name')."','".$this-> input->post('cus_email')."','".$this-> input->post('password')."')");
        return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id)
    {
        $data = array(
            'CUSTOMER_NAME' => $this->input->post('customer_name')
        );
        $this->db->where('CUSTOMER_ID',$id);
        $action = $this->db->update('CUSTOMER', $data);
        return $action;
    }
    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('CUSTOMER_ID', $id);
        $action = $this->db->delete('CUSTOMER');
        return $action;
    }
    //6. fungsi menampilkan data dengan model dropdown list
    function get_drop_down()
    {
        $data = array();
        $this->db->select('*');
        $this->db->order_by('CUSTOMER_NAME ASC');
        $Q = $this->db->get('CUSTOMER');

        if ($Q->num_rows() > 0)
        {
            $data[""] = "== Silahkan Pilih ==";

            foreach ($Q->result_array() as $row)
            {
                $data[$row['CUSTOMER_ID']] = $row['CUSTOMER_NAME'];
            }
        }
        else
        {
            $data[""] = "Data Not Available";
        }
        $Q->free_result();
        return $data;
    }

    function verify($u,$pw)
    {
        $row = array();
        $this->db->select('*');
        $this->db->where('CUS_EMAIL', $u);
        $this->db->where('PASSWORD', $pw);
        $this->db->limit(1);
        $Q = $this->db->get('CUSTOMER');

        if ($Q->num_rows() > 0)
        {
            $row = $Q->row_array();
            $Q->free_result();
        return $row;
        }else{
            $Q->free_result();
            return $row;
        }

        
    }
}
?>