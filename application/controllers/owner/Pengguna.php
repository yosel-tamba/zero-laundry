<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller{
    function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('m_data');

        //session
        if($this->session->userdata('status')!="telah_login"){
            redirect('login?alert=belum_login');
        }
    }

    // Main
    public function index()
    {
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $total_rows = $this->m_data->get_total_pengguna();
        
        $data['results'] = $this->m_data->get_row_pengguna($limit_per_page, $start_index);
            
        $config['base_url'] = base_url() . 'owner/pengguna/index';
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $limit_per_page;
            
        $this->pagination->initialize($config);
        $data['links'] = $this->pagination->create_links();
        

        $data['data'] = array(
            'judul' => "Pengguna",
            'subjudul' => "Data"
        );
        $this->load->view('owner/template/header',$data);
        $this->load->view('owner/user/user',$data);
        $this->load->view('owner/template/footer');
    }
    public function tambah()
    {
        $data['user'] = $this->m_data->get_data('tb_outlet')->result();
        $data['data'] = array(
            'judul' => "Pengguna",
            'subjudul' => "Tambah"
        );
        $this->load->view('owner/template/header',$data);
        $this->load->view('owner/user/tambah_user', $data);
        $this->load->view('owner/template/footer');
    }
    public function aksi_tambah()
    {
        //validasi input
        $this->form_validation->set_rules('id_user','id_user','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('id_outlet','id_outlet','required');
        $this->form_validation->set_rules('role','role','required');
        //chek kondisi validasi
        
        if($this->form_validation->run() != true){
            
            //ambil input dari form
            $id_user = $this->input->post('id_user');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $id_outlet = $this->input->post('id_outlet');
            $role = $this->input->post('role');
            
            // data yang di simpan ke DB
                
            $data = array(
                'id_user' => $id_user,
                'nama' => $nama,
                'username' => $username,
                'password' => md5($password),
                'passconf' => $password,
                'id_outlet' => $id_outlet,
                'role' => $role
            );
            

            // perintah untuk menambahkan data ke DB melalui model m_data
            $this->m_data->insert_data($data,'tb_user');
            // halaman di arahkan ke halaman owner user
            redirect(base_url().'owner/pengguna');

        }else{
            // jika proses input tidak berhasil akan di arahkan ke halaman tambah user
            $data['user'] = $this->m_data->get_data('tb_outlet')->result();
            $data['data'] = array(
                'judul' => "Pengguna",
                'subjudul' => "Tambah"
            );
            $this->load->view('owner/template/header',$data);
            $this->load->view('owner/user/tambah_user', $data);
            $this->load->view('owner/template/footer');
        }
    }
    public function ubah($id_user) // mengambil data dari button edit
    {
    // kondisi data yang akan di ambil dari database
        $where = array(
            'id_user' => $id_user
        );
        $data['user'] = $this->m_data->edit_data($where,'tb_user')->result(); 
        $data['outlet'] = $this->m_data->get_data('tb_outlet')->result();
        $data['data'] = array(
            'judul' => "Pengguna",
            'subjudul' => "Ubah"
        );
        $this->load->view('owner/template/header',$data);
        $this->load->view('owner/user/edit_user',$data);
        $this->load->view('owner/template/footer');
    }
    
    public function aksi_ubah()
    {
        
        //validasi update
        $this->form_validation->set_rules('id_user','id_user','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('id_outlet','id_outlet','required');
        $this->form_validation->set_rules('role','role','required');
        $this->form_validation->set_rules('password','password','required');
        // chek kondisi validasi
        if($this->form_validation->run() != false){
            // var_dump($_POST); die;
            // ambil dara fari form edit user
            $id_user = $this->input->post('id_user');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $id_outlet = $this->input->post('id_outlet');
            $role = $this->input->post('role');
            $password = $this->input->post('password');
            
            $where = array(
                'id_user' => $id_user
            );
            // data yang akan di update
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'id_outlet' => $id_outlet,
                'password' => md5($password),
                'passconf' => $password,
                'role' => $role
            );
            // perintah update data ke database
            $this->m_data->update_data($where, $data,'tb_user');
            // di arahkan ke halaman owner user
            redirect(base_url().'owner/pengguna');
        
        }else{
            // jika validasi update tidak berhasil
            $id_user = $this->input->post('id_user');
            // kondisi data yang akan di ambil
            $where = array(
                'id_user' => $id_user
            );
            $data['user'] = $this->m_data->edit_data($where,'tb_user')->result(); 
            $data['outlet'] = $this->m_data->get_data('tb_outlet')->result();
            $data['data'] = array(
                'judul' => "Pengguna",
                'subjudul' => "Ubah"
            );
            $this->load->view('owner/template/header',$data);
            $this->load->view('owner/user/edit_user',$data);
            $this->load->view('owner/template/footer');
        }
    }

    public function hapus($id_user)
    {
        $where = array(
            'id_user' => $id_user
        );
    $this->m_data->delete_data($where,'tb_user');
    redirect(base_url().'owner/pengguna');
    }
    // End Main
}