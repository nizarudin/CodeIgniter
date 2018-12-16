<?php
class Login extends CI_Controller {
    public $model = NULL;

    public function __construct() {
        parent:: __construct();

        //memuat model
        $this->load->model('Pengguna_model');
        $this->model = $this->Pengguna_model;
        //memuat library Session.php
        $this->load->library('session');
        //memuat helper URL
        $this->load->helper('url');
    }

public function index() {
    if (isset ($_POST['btnSubmit'])){
        $this->model->pengguna_id = $_POST['pengguna_id'];
        $this->model->pengguna_sandi = $_POST['pengguna_sandi'];
            if ($this->model->otentikasi() == TRUE) {
                $this->session->set_userdata('username',
                $this->model->pengguna_id);
        $this->load->view('login_success_view',['model'=>$this->model]);
            } else {
                redirect ('login');
            }
        }
        else {
                $this->load->view('login_form_view', ['model'=>$this->model]);
            }
    }
public function logout(){
    if ($this->session->has_userdata('username')){
        $this->session->sess_destroy();
        $this->load->view('login_form_view',['mode'=>$this->model]);
    }
}
}
