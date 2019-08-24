<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
        $this->load->model("M_Admin");
	}
	public function index()
	{
        $this->load->view('login');
		
	}
    public function login()
    {
        //cek username dan password
       
        $username=$_POST['username'];//menampung isian dari form ($variabel dan name(form pada view)) 
        $password=md5($_POST['password']);
        
        $where=array('username'=>$username,'password'=>$password, 'level'=>'1'); //mengecek field yang ada di database apakah sesuai dengan form, (field database, $variabel)
        
        $cek_akun=$this->M_Admin->getData('akun',$where, '','','1');
       // $cek_akun=$this->M_Pengguna->getQuery("SELECT*FROM akun where username='$username' and password='$password' and status='orangtua' or status='anak'");
        if ($cek_akun->num_rows() > 0){
            $data=$cek_akun->row_array();//menampung data
                
            $data_session = array(
                'username'=>$username,
                'status'=>"login",
                'id_akun'=> $data['ID_AKUN'],
                'nama'=>$data['NAMA'],
                'tgl_lahir'=>$data['TANGGAL_LAHIR'],
                'pekerjaan'=>$data['PEKERJAAN'],
                'alamat'=>$data['ALAMAT'],
                'no_hp'=>$data['NOMOR_HP'],
                'status_akun'=>$data['STATUS']
            );
            
            $this->session->set_userdata($data_session);//proses membuat session
          
            redirect(base_url("home"));
        }else{?>
            <script>
			alert("Username dan Password salah !");
            window.location.href ="<?php echo base_url()?>/Cu_home";
		</script>

           
       <?php 
             } 
    } 
}
?>