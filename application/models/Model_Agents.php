<?php
class Model_Agents extends CI_Controller{
    
    
  public function GetAllAgents($numeroFormation){
       
       
      $sql = $this->db->query("SELECT prenom,nom FROM agent, inscription WHERE Agent.code = inscription.codeAgent and numeroFormation='".$numeroFormation."'");
      return $sql->result();
       
   } 
    
}