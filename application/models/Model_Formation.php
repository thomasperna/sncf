<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Formation extends CI_Model
{
    public function GetAllFormations($numero){
         $sql = $this->db->query("select * from formation where numeroActivite=".$numero);
       
       return $sql->result();
    }
    
}