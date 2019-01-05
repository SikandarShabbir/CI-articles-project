<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author Ahmed Fakhr
 * @email webeasystep@gmail.com
 * @link http://www.webeasystep.com
 */
class Phpexcel_model extends CI_Model {

   public function get_users() {
   	// echo "PhpExcel Model";exit;
        $query = $this->db->get('articles');
        // echo "<pre>";
        // print_r($query->result_array());exit;
        return $query->result_array();
    }
}

/* End of file blog_model.php */
    /* Location: ./application/models/blog_model.php */    