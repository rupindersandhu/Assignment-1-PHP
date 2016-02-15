<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Contacts table.
 */
class Stocks extends CI_Model {
    // Constructor
    function __construct()
    {
	parent::__construct();
    }
    
    // return all images desc order by post date
    function all()
    {
        $this->db->order_by("Code", "asc");
        $query = $this->db->get('stocks');
        return $query->result_array();
    }
}
/* End of file Contacts.php */
/* Location: application/models/Contacts.php */