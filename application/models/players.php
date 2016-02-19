<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Contacts table.
 */
class Players extends CI_Model {
    // Constructor
    function __construct()
    {
	parent::__construct();
    }
    
    // return all images desc order by post date
    function all()
    {
        $this->db->order_by("Player", "asc");
        $query = $this->db->get('players');
        return $query->result_array();
    }
    
    	public function get($which)
	{

            $sql = "SELECT * FROM players WHERE Player = ?"; 

            $query = $this->db->query($sql, array($which));
            $row = $query->row_array();

            return $row;
		//return null;
	}
        
       
}
/* End of file Contacts.php */
/* Location: application/models/Contacts.php */