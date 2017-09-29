
<?php
class CtrlAccueil extends CI_Controller{
 public function index(){
     
    $data['activite'] = "Les Activités";
    $this->load->model("Model_Activite");
    $data['lesActivites'] = $this->Model_Activite->GetAllActivite();
    $this->load->view("v_activite", $data);
     
     
 }   
  public function AfficherLesFormations()
    {
   
        $laActivite = $this->uri->segment(3);
        $this->load->model("Model_Formation");
        

        $data['lesFormations'] = $this->Model_Formation->GetAllFormations($laActivite);
        
 
        $this->load->view("v_formation", $data);
        
    }
    public function AfficherLesAgents()
    {
        

        $codeFormation = $this->uri->segment(3);
        $this->load->Model("Model_Agents");
        $data['lesAgents'] = $this->Model_Agents->GetAllAgents($codeFormation);
       
        $this->load->view("v_agent",$data);
    
    }
}