<?php


class Test_model extends CI_Model
{

   public function get_ten_alumnos()
   {
         $query = $this->db->get('alumno', 10);
         return $query->result();
   }


}
