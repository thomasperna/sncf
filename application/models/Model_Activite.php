<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Activite extends CI_Model
{
    public function GetAllActivite(){
        $sql = $this->db->query("select * from activite ");
       
       return $sql->result();
    }
    public function GetActiviteById($id){
        
        $sql = $this->db->query("select * from acticite where numero = ",$id);
       
       return $sql->result();
    }
}