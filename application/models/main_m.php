<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_m extends CI_Model 
{
  function __construct()
  {
    parent::__construct();
    // $this->table = 'postmenu';
  }
  
  public function save($title, $url)
  {
    $this->db->set('title',$title);
    $this->db->set('image', $url);
    $this->db->insert('document');
  }

}


