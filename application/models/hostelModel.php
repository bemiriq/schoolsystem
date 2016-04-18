<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class hostelModel extends CI_Model 
{
  var $table = "hostel";
  // var $table = "postmenu";

  function __construct()
  {
    parent::__construct();
    // $this->table = 'postmenu';
  }

  function getAll($limit = null)
  {
    if($limit != null)
    {
      $this->db->limit($limit['limit'],$limit['offset']);
    }
    $q = $this->db->get($this->table);
    if($q->num_rows() > 0)
    {
      return $q->result();
    }
    return array();
  }

  function countAll()
  {
    return $this->db->count_all($this->table);
  }


  function add($data)
  {
    $this->db->insert($this->table,$data);
  }

  function update($data,$id)
  {
    $this->db->where("hostel_id",$id);
    $this->db->update($this->table,$data);
  }


  function delete($id)
  {
    $this->db->where("hostel_id",$id);
    $this->db->delete($this->table);
  }

  /** Fetch data to update **/
  function getById($id)
  {
    $this->db->where("hostel_id",$id);
    $q = $this->db->get($this->table);
    if($q->num_rows() > 0)
    {
      return $q->row();
    }
    return false;
  }
  
  function get_fichas() {
    $this->db->select('*')->from('hostel');
    $query=$this->db->get();
    return $query->result_array();
  }

  public function harvest(){

      $query = $this->db->query("SELECT name,priority,building,class,description,assigned_to,status,date_posted FROM hostel WHERE status = 'Pending'");

      if($query->num_rows()){
          foreach ($query->result() as $row)
         {
            echo '<hr>' . $row->name .' hostel assigned to '. $row->assigned_to  .'<br>';
         }
         
        }
      }



  // public function harvest(){

  //     $query = $this->db->query("SELECT name,category_name,stock_remain FROM stock WHERE stock_remain < 10");

  //     if($query->num_rows()){
  //         foreach ($query->result() as $row)
  //        {
  //           echo '<hr>' . $row->name .' '. $row->category_name  .' stock remain only ' . $row->stock_remain .'<br>';
  //        }
         
  //       }
  //     }

}


