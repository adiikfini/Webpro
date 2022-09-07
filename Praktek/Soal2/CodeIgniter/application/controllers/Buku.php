<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Buku extends CI_Controller {

    public function index()
    {
        $data['buku'] = $this->m_buku->read()->result();
        $this->load->view('Buku',$data);

    }

    public function add(){
        $judul   =$this->input->post('judul');
        $pengarang   =$this->input->post('pengarang');
        $penerbit   =$this->input->post('penerbit');
        $tahun   =$this->input->post('tahun');
        $status   =$this->input->post('status');

        $data = array(
            'judul'     =>$judul,
            'pengarang'     =>$pengarang,
            'penerbit'     =>$penerbit,
            'tahun'     =>$tahun,
            'status'     =>$status,
        );

        $this->m_buku->input_data($data, 'buku');
        redirect('buku/index');
    }

    public function remove($id){
        $where = array('id' => $id);
        $this->m_buku->remove_data($where,'buku');
        redirect('buku/index');
    }

    public function edit($id){
        $where = array('id' => $id);
        $data['buku'] = $this->m_buku->edit_buku($where,'buku')->result();
        $this->load->view('edit',$data);
    }
    public function update(){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $pengarang = $this->input->post('pengarang');
        $penerbit = $this->input->post('penerbit');
        $tahun = $this->input->post('tahun');
        $status = $this->input->post('status');

        $data = array(
            'judul'     => $judul,
            'pengarang' => $pengarang,
            'penerbit'  => $penerbit,
            'tahun'     => $tahun,
            'status'    => $status
        );

        $where = array(
            'id' => $id
        );

        $this->m_buku->update_buku($where,$data,'buku');
        redirect('buku/index');

    }

        
}
        
    /* End of file  Buku.php */
        
                            