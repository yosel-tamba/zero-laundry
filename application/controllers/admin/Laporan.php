<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('m_data');

        if($this->session->userdata('status')!="telah_login"){
            redirect(base_url().'login?alert=belum_login');
        }
    }
    
    public function pelanggan()
    {
    // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $data['title_pdf'] = 'Laporan Pelanggan';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_pelanggan';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        $data['member'] = $this->m_data->get_member()->result();
        $html = $this->load->view('admin/laporan/member',$data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
    
    public function outlet()
    {
    // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $data['title_pdf'] = 'Laporan Outlet';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_outlet';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        $data['outlet'] = $this->m_data->get_outlet()->result();
        $html = $this->load->view('admin/laporan/outlet',$data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
    
    public function pengguna()
    {
    // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $data['title_pdf'] = 'Laporan Pengguna';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_pengguna';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        $data['user'] = $this->m_data->get_user()->result();
        $html = $this->load->view('admin/laporan/user',$data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
    
    public function paket()
    {
    // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $data['title_pdf'] = 'Laporan Paket';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_paket';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        $data['paket'] = $this->m_data->get_paket()->result();
        $html = $this->load->view('admin/laporan/paket',$data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
    
    public function transaksi($dari,$sampai)
    {
    // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $data['title_pdf'] = 'Laporan Transaksi';

        // filename dari pdf ketika didownload
        $file_pdf = 'lapora_transaksi';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        $data['transaksi'] = $this->m_data->filter($dari,$sampai)->result();
        $html = $this->load->view('admin/laporan/transaksi',$data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

}