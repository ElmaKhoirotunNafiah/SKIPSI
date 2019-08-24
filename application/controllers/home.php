<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
        $data1['status']='home';
        $this->load->view('header', $data1);
        $this->load->view('home_awal');
        $this->load->view('footer');
	}
    
//     public function kuisioner(){
//        $id_dts=$this->session->userdata('id_deteksi');
//        $id_usia=$this->session->userdata('id_usia');
//        $data['status']="kuis";
//        $data2['rule']=array();
//        $data2['stt']='belum'; 
//        
//        //CARI PERNYATAAN PADA TABEL RULE YANG SESUAI DENGAN USIANYA 
//        //COUNT DETAIL DETEKSI
//        $where=array('ID_DETEKSI'=>$this->session->userdata('id_deteksi'));        
//        $cek_data=$this->M_Admin->getData('detail_deteksi',$where, '','','1');
//       //$data2['jumlah']=$cek_data->num_rows() ;
//        //echo $id_usia;
//        if (!isset($_POST['nextRule'])){ //Munculkan pernyataan pertama
//            $data2['rule']=$this->M_Admin->getQuery("SELECT * FROM `rule` r, gejala g where r.id_gejala=g.id_gejala and r.id_usia=$id_usia and r.rl_status=1")->result();
//                $this->load->view('user/vu_header',$data);
//                $this->load->view('user/vu_kuisioner',$data2);
//                $this->load->view('user/vu_footer');
//        }else{ //munculkan pernyataan selanjutnya
//            $rule = $_POST['id_rule'];
//                $radio=$_POST['id_gjl'];
//                $pjgradio = strlen($radio);
//                $batas = strpos($radio,'|');
//            ////////
//                $gjl=substr($radio,0,$batas);
//                $nilai=substr($radio,$batas+1,$pjgradio-$batas);
//            
//                $fields2=array(
//                    'ID_RULE'=>$rule,
//                    'ID_DETEKSI'=>$id_dts,
//                    'JAWABAN'=>$nilai
//                    );
//                $table="detail_deteksi";
//                $this->M_Admin->saveData($table, $fields2); 
//                if($gjl != 0){ //jika pernyataan belum selesai
//                    $data2['rule']=$this->M_Admin->getQuery("SELECT * FROM `rule` r, gejala g where r.id_gejala=g.id_gejala and r.id_usia=$id_usia and r.id_gejala=$gjl")->result();
//                    $this->load->view('user/vu_header',$data);
//                    $this->load->view('user/vu_kuisioner',$data2);
//                    $this->load->view('user/vu_footer');
//                }else{
//                    //cek apakah dari pernyataan terakhir sudah memenuhi batas minimal
//                    $ruleMin= $this->M_Admin->getQuery("SELECT * FROM `rule` where ID_RULE = $rule ")->result();
//                    foreach ($ruleMin as $rl);
//                    $bbt = $rl->BOBOT_MIN; $rl_min=$rl->RULE_MIN;
//                    $jum_jwb=$this->M_Admin->getQuery("SELECT SUM(JAWABAN) as hasil FROM detail_deteksi where ID_DETEKSI=$id_dts")->result();
//                    //$datatot=$jum_jwb->row_array();
//                    //$tot=$datatot['HASIL'];
//                    foreach($jum_jwb as $tot);
//                    $total=$tot->hasil;
//                    
//                    if($total < $bbt){
//                        $data2['rule']=$this->M_Admin->getQuery("SELECT * FROM `rule` r, gejala g where r.id_gejala=g.id_gejala and r.id_usia=$id_usia and r.id_gejala=$rl_min")->result();
//                        $this->load->view('user/vu_header',$data);
//                        $this->load->view('user/vu_kuisioner',$data2);
//                        $this->load->view('user/vu_footer');
//                    }else{
//                       $data2['stt']='selesai';
//                    
//                        //cek usia, cek range di adiksi
//                        $cek_adiksi=$this->M_Admin->getQuery("SELECT * from adiksi_gadget where ID_USIA=$id_usia AND AD_RANGE_MIN <= $total AND AD_RANGE_MAX >= $total ")->result();
//                        foreach($cek_adiksi as $ads);
//                        $adiksi=$ads->ID_ADIKSI;
//
//                        $fields3=array(
//                            'ID_ADIKSI'=>$adiksi,
//                            'HASIL_DETEKSI'=>$total
//                        );
//
//                        $where3=array(
//                            'ID_DETEKSI'=>$id_dts
//                        );
//                        $this->M_Admin->updateData("deteksi",$fields3,$where3);
//                        $this->load->view('user/vu_header',$data);
//                        $this->load->view('user/vu_kuisioner',$data2);
//                        $this->load->view('user/vu_footer'); 
//                    }
//                    
//                }
//        }
//    }
    
     public function kuis_home()
    {
        $data['status']="home";
//       $data2['data_detail_artikel']=$this->M_Admin->getQuery("SELECT * FROM artikel where ID_ARTIKEL=$id")->result();
        $this->load->view('header',$data);
		$this->load->view('home');
        $this->load->view('footer',$data);
    }
    
    public function detail_kuis_home()
    {
        $data['status']="home";
//       $data2['data_detail_artikel']=$this->M_Admin->getQuery("SELECT * FROM artikel where ID_ARTIKEL=$id")->result();
        $this->load->view('header',$data);
		$this->load->view('home_detail');
        $this->load->view('footer',$data);
    }
    
}
?>
    