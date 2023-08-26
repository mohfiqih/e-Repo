<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
// 	public function validasi($username, $password)
// 	{
// 		$data = $this->db->get_where('user', array('email LIKE BINARY' => $username))->result();
// 		// $data_user = $this->db->get_where('user', array('username_id LIKE BINARY' => $username_user))->result();

// 		if (count($data) === 1) {
// 			if (password_verify($password, $data[0]->user_password)) {
// 				return array(
// 					'is_logged_in'		=> true,
// 					'email'		=> $username,
// 					'user_level'		=> $data[0]->user_level,
// 					'user_namalengkap'	=> $data[0]->user_namalengkap,
// 					'user_id'			=> $data[0]->user_id,
// 					'user_foto'		=> $data[0]->user_foto
// 				);
// 			} else {
// 				return 0;
// 			}
// 		} 
// 	}

    public function validasi($username, $password)
    {
        // Cek apakah kredensial yang diberikan adalah email
        $data = $this->db->get_where('user', array('email LIKE BINARY' => $username))->result();
    
        // Jika tidak ditemukan berdasarkan email, coba cari berdasarkan username_id
        if (count($data) === 0) {
            $data = $this->db->get_where('user', array('username_id LIKE BINARY' => $username))->result();
        }
    
        if (count($data) === 1) {
            if (password_verify($password, $data[0]->user_password)) {
                return array(
                    'is_logged_in'      => true,
                    'user_level'        => $data[0]->user_level,
                    'user_namalengkap'  => $data[0]->user_namalengkap,
                    'user_id'           => $data[0]->user_id,
                    'user_foto'         => $data[0]->user_foto
                );
            } else {
                // Password salah
                return null;
            }
        } else {
            // Pengguna tidak ditemukan
            return null;
        }
    }

	// Validasi Email
    public function validateEmail($email)
	{
		$query = $this->db->query("SELECT * FROM user WHERE email='$email'");
		if($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}

	public function updatePasswordhash($data,$email)
	{
		$this->db->where('email',$email);
		$this->db->update('user',$data);
	}

	public function getHahsDetails($hash)
	{
		$query =$this->db->query("SELECT * FROM user WHERE hash_key='$hash'");
		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}

	}

	public function validateCurrentPassword($newPassword,$hash)
	{
		$query = $this->db->query("SELECT * FROM user WHERE user_password='$newPassword' AND hash_key='$hash'");
		if($query->num_rows()==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function updateNewPassword($data,$hash)
	{
		
		$this->db->where('hash_key',$hash);
		$this->db->update('user',$data);
	}
}