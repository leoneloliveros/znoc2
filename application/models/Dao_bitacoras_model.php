<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_bitacoras_model extends CI_Model {

  public function saveCCIHFC($data)
  {
    $this->db->insert('cci_hfc', $data);
    return $this->db->affected_rows();
  }

  public function saveBookLogsAccordingType($dataGen,$specificData,$table)
  {
    $this->db->insert('logbooks',$dataGen);
    
    $gen = $this->db->affected_rows();

    // echo '<pre>'; print_r($this->db->last_query()); echo '</pre>';
    
    $specificData['id_logbooks'] = $this->db->insert_id();
    
    $this->db->insert($table,$specificData);
    // echo '<pre>'; print_r($this->db->last_query()); echo '</pre>';

    $spe = $this->db->affected_rows();

    return $gen + $spe;
  }

}

/* End of file Dao_bitacoras_model.php */

?>