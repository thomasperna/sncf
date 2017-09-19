<?php
class Model_Agents extends CI_Model
{
    public function GetAllAgents(){
        $sql1 = $this->db->query("select code from formation");
         $sql = $this->db->query("select code from agent");
       //lol
       return $sql->result();
    }
}