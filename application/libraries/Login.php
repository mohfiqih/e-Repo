<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules("email",'Email','required');
			$this->form_validation->set_rules("password",'Password','required');
			if($this->form_validation->run()==TRUE)
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$encrypPassword = sha1($password);
				$this->load->model('user_model');
				$status = $this->user_model->checkUser($email,$encrypPassword);
				if($status!=false)
				{
					$data = array(
						'username'=>$status->user_name,
						'email'=>$status->email,
						'id'=>$status->id,
					);
					$this->session->set_userdata('LoginSession',$data);
					redirect(base_url('admin/dashboard/index'));

				}
				else
				{
					$this->session->set_flashdata('error','Email Id or Password is Wrong');
					redirect(base_url('login/index'));
				}


			}
			else
			{
				$this->load->view('login');
			}
		}
		else
		{
			$this->load->view('login');
		}
		
	}

	function logout()
	{
		session_unset();
		session_destroy();
		redirect(base_url('login/index'));
	}

	
	function forgotPassword()
	{
		$this->load->model('user_model');
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email','Email','required');
			if($this->form_validation->run()==TRUE)
			{
				$email  = $this->input->post('email');
				$validateEmail = $this->user_model->validateEmail($email);
				if($validateEmail!=false)
				{
					$row = $validateEmail;
					$user_id = $row->id;

					$string = time().$user_id.$email;
					$hash_string = hash('sha256',$string);
					$currentDate = date('Y-m-d H:i');
					$hash_expiry = date('Y-m-d H:i',strtotime($currentDate. ' + 1 days'));
					$data = array(
						'hash_key'=>$hash_string,
						'hash_expiry'=>$hash_expiry,
					);

					
					$resetLink = base_url().'reset/password?hash='.$hash_string;
					$message = '<p>Your reset password Link is here:</p>'.$resetLink;
					$subject = "Password Reset link";
					$sentStatus = $this->sendEmail($email,$subject,$message);
					if($sentStatus==true)
					{
						$this->user_model->updatePasswordhash($data,$email);
						$this->session->set_flashdata('success','Reset password link successfully sent');
						redirect(base_url('login/forgotPassword'));
					}
					else
					{
						$this->session->set_flashdata('error','Email sending error');
						$this->load->view('forgot_password');	
					}

				}	
				else
				{
					$this->session->set_flashdata('error','invalid email id');
					$this->load->view('forgot_password');	
				}

			}
			else
			{
				$this->load->view('forgot_password');	
			}
		}
		else
		{
			$this->load->view('forgot_password');	
		}
		
	}


	/*user this email sending code */

	public function sendEmail($email,$subject,$message)
    {

    	/* use this on server */

    	/* $config = Array(
		      'mailtype' => 'html',
		      'charset' => 'iso-8859-1',
		      'wordwrap' => TRUE
	    	);
    	 */

    	
    	/*This email configuration for sending email by Google Email(Gmail Acccount) from localhost */
	    $config = Array(
	      'protocol' => 'smtp',
	      'smtp_host' => 'ssl://smtp.googlemail.com',
	     
	      'smtp_port' => 465,
	      'smtp_user' => 'exampleEmail@gmail.com',  //gmail id
	      'smtp_pass' => '@@password',   //gmail password
	      
	      'mailtype' => 'html',
	      'charset' => 'iso-8859-1',
	      'wordwrap' => TRUE
	    	);



          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('noreply');
          $this->email->to($email);
          $this->email->subject($subject);
          $this->email->message($message);
          
          if($this->email->send())
         {
           return true;
         }
         else
         {
         	return false;
         }
    }

	
}