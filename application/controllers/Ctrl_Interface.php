<?php

class Ctrl_Interface extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_Interface');
    }
    public function afficherConferences()
    {
        $this->load->model("Model_Interface");
        $data['lesConferences'] = $this->Model_Interface->afficherConferences();
        $this->load->view('view_Interface',$data);
    }
    public function creerUneConference($data)
    {
        $codeConf = $_GET['idConf'];
        $codeTitre = $_GET['titreConf'];
        $codeContenu = $_GET['contenuConf'];
        $codeNiveau = $_GET['niveauConf'];
        $codeTechno = $_GET['idTechno'];

        $this->load->model('Model_Interface');
        $data = $this->Model_Interface->creerUneConference($codeConf, $codeTitre, $codeContenu, $codeNiveau, $codeTechno);
        
        $this->load->view('view_Interface', $data);
    }
}

?>