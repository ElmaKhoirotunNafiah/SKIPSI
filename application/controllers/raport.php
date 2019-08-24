<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raport extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
         $this->load->model("M_Admin");
//        if($this->session->userdata('username') !=TRUE ){
//            redirect("login");
//        }
	}
	public function index()
	{
        $data1['status']='raport';
        $data['nilai_raport'] =$this->M_Admin->getQuery("SELECT * FROM hasil join data_solusi ON hasil.kd_solusi=data_solusi.kd_solusi")->result();
        $this->load->view('header', $data1);
        $this->load->view('raport',$data);
        $this->load->view('footer');
	}
}
?>
    