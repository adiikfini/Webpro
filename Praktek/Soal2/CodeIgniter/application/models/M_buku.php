<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_buku extends CI_Model {
                        
    public function read(){
        return $this->db->get('buku');                                       
    }        
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }             
    public function remove_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    } 
    public function edit_buku($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_buku($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
                        
}
                        
/* End of file m_buku.php */
    
                        