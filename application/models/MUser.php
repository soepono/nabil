<?php
class MUser extends CI_Model
{
    public $table = 'user';

    // meccocokan username dan password di tabel
    function get_validasi($user, $pass)
    {
      $this->db->where('username', $user);
      $this->db->where('password', $pass);
      $total = $this->db->count_all_results($this->table);
      // SELECT COUNT(*) FROM user WHERE username = $user AND password = $pass
      // echo $this->db->last_query(); exit;
      if ($total > 0){
        return true;
      } else {
        return false;
      }
    }
}