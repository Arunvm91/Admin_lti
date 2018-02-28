<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
			parent::__construct();
            $this->load->library('session');
			$this->_slag();
	}

	public function _slag(){

			$ChecMe= $this->router->fetch_method();
			$this->load->view('lib/header.php');
			$this->load->view('lib/menu.php');
  }




	public function index()
	{
				
				$this->load->view('index');
				$this->load->view('lib/footer.php');

	}

	
			public function sendmail()
				{
						 // print_r($_POST);
						 $name = $this->input->post('name');
						 $to = "arunvm91@gmail.com";
						 $subject = "Mail from Website";
						 $message = "<table width='600' style='margin:auto;'>";
						 $message .= "<tr><td>Name</td><td>" . $this->input->post('name') . "</td></tr>";
						 $message .= "<tr><td>Email</td><td>" . $this->input->post('email') . "</td></tr>";
						 $message .= "<tr><td>Phone Number</td><td>" . $this->input->post('phone') . "</td></tr>";
						 $message .= "<tr><td>Subject</td><td>" . $this->input->post('subject') . "</td></tr>";
						 $message .= "<tr><td>Message</td><td>" . $this->input->post('msg') . "</td></tr>";
						 $message .= "</table>";
						 $header = "From: Website<admin@ykh.com> \r\n";
						 $header .= "Reply-To: admin@ykh.com \r\n";
						 $header .= "MIME-Version: 1.0\r\n";
						 $header .= "Content-type: text/html\r\n";
						 $status = mail($to, $subject, $message, $header, "-fadmin@ykh.com");
						 if ($status == true) {
							 $message='We will get back to you shortly..';
						 } else {
							 $message='Mail Could Not Send..';
						 }
 	        echo json_encode($message);
				}










}
