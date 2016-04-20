<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginmodel extends CI_Model
{
 function login($username,$password)
 {
     
   $this -> db -> select('username, password, user_category');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
   
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
     echo 'model1';
     //echo 'Now it consists the home page function';
   }
   else false;
   {
    return false;
    echo 'model2';
   }
 }


     public function cmsmodeltable(){

      if(@$_POST['user_category'])
    {
      $categoryname=$_POST['user_category'];
      // $SP=mysql_real_escape_string($categoryname);
      $query = $this->db->query("SELECT name,user_category,email,username,date_posted from users where user_category = '$categoryname'");

      if($query->num_rows()){
          foreach ($query->result() as $row)
         {
           echo '<tr><td>'. $row->name  .'</td>'.'<td>'. $row->email .'</td>'.'<td>'.  $row->username .'</td>'.'<td>'. $row->date_posted.'</td></tr>'; 
         }
         
        }
      else{
        echo '<hr><p style="color:#3fa9f5;">'. "Lately there are no information on this category." .'</p><hr>';
      }
  }
}


}

