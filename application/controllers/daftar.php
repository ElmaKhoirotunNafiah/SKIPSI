<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
        $this->load->model("M_Admin");
	}
	public function index()
	{
        $this->load->view('daftar');
		
	}

   //fungsi daftar
    public function daftar()
        {
//        var_dump($_POST);
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            $nama_lengkap=$_POST['nama_lengkap'];
            $kelas=$_POST['kelas'];
            $golongan=$_POST['golongan'];
        
        $fields=array(
            'username'=>$username,
            'password'=>$password,
            'nama_lengkap'=>$nama_lengkap,
            'kelas'=>$kelas,
            'golongan'=>$golongan,
            'status'=>1
        );
           $table="tbuser";
        $this->M_Admin->saveData($table, $fields); 
     redirect('Login');

        
    }
    
    //logout
    function logout(){
    $this->session->sess_destroy();
         ?>
            <script>
			alert("Anda Telah Berhasil Keluar");
           window.location.href ="<?php echo base_url()?>/Login";
		</script>
<?php
        

    }
    }
?>