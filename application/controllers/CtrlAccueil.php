
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CtrlAccueil extends CI_Controller
{
    public function index(){
       $this->load->model("Model_Activite"); 
       $data["lesActivites"] = $this->Model_Activite->GetAllActivite();
        
        $this->load->view("v_activite",$data);
    }
    
    public function afficherLesFormations(){
   $lol= $this->uri->segment(3);
    
         $this->load->model("Model_Formation"); ;
         
         $data["lesFormation"] = $this->Model_Formation->GetAllFormations($lol);
         $this->load->view("v_formation",$data);
    }
    public function afficherLesAgents(){
        
       $lol= $this->uri->segment(4);
    
         $this->load->model("Model_Agents"); ;
         
         $data["lesAgents"] = $this->Model_Agents->GetAllAgents($lol);
         $this->load->view("v_agent",$data);
    }
}