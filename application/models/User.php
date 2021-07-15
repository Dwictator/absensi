<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_model
{

   // Simpan $data register
   public function register($data)
   {
      return $this->db->insert("users", $data);
   }
   public function login($email, $password)
   {
      $this->db->select("*");
      $this->db->from("users");
      $this->db->where("email", $email);
      $query = $this->db->get();
      $user = $query->row();

      /**
       * Check password
       */
      if (!empty($user)) {

         if (password_verify($password, $user->password)) {

            return $query->result();
         } else {

            return FALSE;
         }
      } else {

         return FALSE;
      }
   }
}
