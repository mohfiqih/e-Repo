<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reset extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
	   $this->load->library('form_validation');
	   $this->load->model('M_Universal');
    }

//     public function forgotPassword()
// 	{
// 		$this->load->model('M_Universal');
// 		if($_SERVER['REQUEST_METHOD']=='POST')
// 		{
// 			$this->form_validation->set_rules('email','Email','required');
// 			if($this->form_validation->run()==TRUE)
// 			{
// 				$email  = $this->input->post('email');
// 				$validateEmail = $this->M_Universal->validateEmail($email);
// 				if($validateEmail!=false)
// 				{
// 					$row = $validateEmail;
// 					$id = $row->user_id;

// 					$string = time().$id.$email;
// 					$hash_string = hash('sha256',$string);
// 					$currentDate = date('Y-m-d H:i');
// 					$hash_expiry = date('Y-m-d H:i',strtotime($currentDate. ' + 1 days'));
// 					$data = array(
// 						'hash_key'=>$hash_string,
// 						'hash_expiry'=>$hash_expiry,
// 					);

					
// 					$resetLink = base_url().'reset/password?hash='.$hash_string;
// 					$message = '<p>Your reset password Link is here:</p>'.$resetLink;
// 					$subject = "Password Reset link";
// 					$sentStatus = $this->sendEmail($email,$subject,$message);
// 					if($sentStatus==true) {
// 						$this->M_Universal->updatePasswordhash($data,$email);
// 						$this->session->set_flashdata('success','Reset password link successfully sent');
// 						redirect(base_url('reset/forgotPassword'));
// 					}
// 					else {
// 						$this->session->set_flashdata('error','Email sending error');
// 						$this->load->view('forgot_password');	
// 					}

// 				}	
// 				else {
// 					$this->session->set_flashdata('error','invalid email id');
// 					$this->load->view('forgot_password');	
// 				}

// 			} else {
// 				$this->load->view('forgot_password');	
// 			}
// 		} else {
// 			$this->load->view('forgot_password');	
// 		}
// 	}
    
//     public function sendEmail($email,$subject,$message)
//     {

//     	/* use this on server */

//     	/* $config = Array(
// 		      'mailtype' => 'html',
// 		      'charset' => 'iso-8859-1',
// 		      'wordwrap' => TRUE
// 	    	);
//     	 */

    	
//     	/*This email configuration for sending email by Google Email(Gmail Acccount) from localhost */
// 	    $config = Array(
// 	      'protocol' => 'smtp',
// 	      'smtp_host' => 'ssl://smtp.googlemail.com',
	     
// 	      'smtp_port' => 465,
// 	      'smtp_user' => 'exampleEmail@gmail.com',  //gmail id
// 	      'smtp_pass' => '@@password',   //gmail password
	      
// 	      'mailtype' => 'html',
// 	      'charset' => 'iso-8859-1',
// 	      'wordwrap' => TRUE
// 	    	);



//           $this->load->library('email', $config);
//           $this->email->set_newline("\r\n");
//           $this->email->from('noreply');
//           $this->email->to($email);
//           $this->email->subject($subject);
//           $this->email->message($message);
          
//           if($this->email->send())
//          {
//            return true;
//          }
//          else
//          {
//          	return false;
//          }
//     }

    // fungsi password
    public function password()
	{
		if($this->input->get('hash'))
		{
			$hash = $this->input->get('hash');
			$this->data['hash']=$hash;
			$getHashDetails = $this->M_Universal->getHahsDetails($hash);
			if($getHashDetails!=false)
			{
				$hash_expiry = $getHashDetails->hash_expiry;
				$currentDate = date('Y-m-d H:i');
				if($currentDate < $hash_expiry)
				{
					if($_SERVER['REQUEST_METHOD']=='POST')
					{
						$this->form_validation->set_rules('currentPassword','Current Password','required');
						$this->form_validation->set_rules('user_password','New Password','required');
						$this->form_validation->set_rules('cpassword','Confirm New Password','required|matches[password]');
						if($this->form_validation->run()==TRUE)
						{
							$currentPassword = sha1($this->input->post('currentPassword'));
							$newPassword = $this->input->post('user_password');

							$validateCurrentPassword = $this->M_Universal->validateCurrentPassword($currentPassword,$hash);
							if($validateCurrentPassword!=false)
							{
								 $newPassword =sha1($newPassword);
								 $data = array(
								 	'user_password'=>$newPassword,
								 	'hash_key'=>null,
								 	'hash_expiry'=>null
								);
								 $this->M_Universal->updateNewPassword($data,$hash);
								 $this->session->set_flashdata('success','Successfully changed Password');
								 redirect(base_url('auth/forgotPassword'));
							}
							else
							{
								$this->session->set_flashdata('error','Current Password is wrong');
								$this->load->view('reset_password',$this->data);	
							}

						}
						else
						{
							$this->load->view('reset_password',$this->data);	
						}
					}
					else
					{
						$this->load->view('reset_password',$this->data);
					}
				}
				else
				{
					$this->session->set_flashdata('error','link is expired');
					redirect(base_url('auth/forgotPassword'));
				}
			}
			else
			{
				echo 'invalid link';exit;
			}
		}
		else
		{
			redirect(base_url('auth/forgotPassword'));
		}
	}
}