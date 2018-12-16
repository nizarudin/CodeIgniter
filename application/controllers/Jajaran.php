<?php
class Jajaran extends CI_Controller {
    public function index() {
        if (isset($_POST['btnSubmit'])){
         
        //memuat model Jajaran_genjang
        $this->load->model('Jajaran_genjang');

        //menangkap model yang telah dimuat oleh controller
        $model = $this->Jajaran_genjang;

        //mengambil nilai yang dikirim melalui form
        $tinggi=$_POST['tinggi'];
        $alas=$_POST['alas'];
        $sisiA=$_POST['sisiA'];
        $sisiB=$_POST['sisiB'];

        //menentukan nilai
        $model->set_tinggi($tinggi);
        $model->set_alas($alas);
        $model->set_sisiA($sisiA);
        $model->set_sisiB($sisiB);

        //memuat view dan mengirim model ke view
        $this->load->view('jajaranview', array('model'=>$model));
    }
    else {
        //menampilkan form
        $this->load->view('jajaran_form_view');
    }
}
}
