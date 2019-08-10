<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Madmin');
		$this->load->helper('url', 'form');
		$this->load->library("session");
	}

	public function index()
	{
		 //$this->load->view('header');
		//$this->load->view('login');
		$this->load->view('header');
		$this->load->view('home');
	}

	public function user()
	{
		$this->load->view('header');
		$this->load->view('user');
	}

	public function kategori()
	{
		// $data['lastId'] = $this->Madmin->getQuery("SELECT `kd_kategori` FROM `data_kategori` ORDER BY kd_kategori DESC LIMIT 1")->result();
		$num = $this->Madmin->getQuery("SELECT `kd_kategori` FROM `data_kategori` ORDER BY kd_kategori DESC LIMIT 1")->row();
		$num2 = substr($num->kd_kategori,1);
		$this->load->view('header');
		$this->load->view('kategori', ["id"=>$num2]);
	}

	public function tambahkategori() {
        $kode = $this->input->post('kd_kategori');
		$kategori = $this->input->post('nm_kategori');
		
        
		$data = array(
            'kd_kategori' => $kode,
			'nm_kategori' => $kategori,
	
			);
		$this->Madmin->input_kategori($data,'data_kategori');
		redirect('Welcome/datakategori');
    }

	public function datakategori()
	{
		$data['data_kategori'] = $this->Madmin->ambil_kategori()->result();
		$this->load->view('header');
		$this->load->view('datakategori', $data);
	}

	function hapuskategori(){
		$where = $this->input->post('kd_kategori');
		$this->Madmin->getQuery("DELETE FROM `data_kategori` WHERE kd_kategori = '$where'");
		redirect('Welcome/datakategori');
	}

	public function perilaku()
	{
		$num = $this->Madmin->getQuery("SELECT `kd_perilaku` FROM `data_perilaku` ORDER BY kd_perilaku DESC LIMIT 1")->row();
		$num2 = substr($num->kd_perilaku,1);
		$this->load->view('header');
		$this->load->view('perilaku', ["id"=>$num2]);
	}

	public function tambahperilaku() {
        $kode = $this->input->post('kd_perilaku');
        $perilaku = $this->input->post('nm_perilaku');
        
		$data = array(
            'kd_perilaku' => $kode,
			'nm_perilaku' => $perilaku,
	
			);
		$this->Madmin->input_perilaku($data,'data_perilaku');
		redirect('Welcome/perilaku');
    }

	public function dataperilaku()
	{
		$data['data_perilaku'] = $this->Madmin->ambil_perilaku()->result();
		$this->load->view('header');
		$this->load->view('dataperilaku', $data);
	}

	public function solusi()
	{
		$data['kategori'] = $this->Madmin->ambil_kategori()->result();
		$this->load->view('header');
		$this->load->view('solusi', $data);
	}

	public function datasolusi()
	{
		$this->load->view('header');
		$this->load->view('datasolusi');
	}

	public function rule()
	{
		$data['kategori'] = $this->Madmin->ambil_kategori()->result();
		$this->load->view('header');
		$this->load->view('rule', $data);
	}

	public function tambahrule() {
        $kode = $this->input->post('kd_kategori');
        $kodeprl = $this->input->post('kd_perilaku');
        $jml = count($kodeprl);
        
        for($i=0; $i<$jml; $i++){
            $data = array(
            'kd_kategori' => $kode,
            'kd_perilaku' => $kodeprl[$i],
            );
        $this->Madmin->input_rule($data,'rule');
        }
        redirect('Welcome/datarule');
    }
    

	public function datarule()
	{
		$this->load->view('header');
		$this->load->view('datarule');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
	}
	
}
