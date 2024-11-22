<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->library('session'); // Load the session library
		$this->load->database('miniblog');
		$this->load->view('adminpanel/loginview'); // Load the loginview file which will display the login page
	}

	function login_post() // Define a function to view the login posts for each user
	{
		print_r($_POST); // Post the data as an array
		// Store the email and the password 
		if(isset($_POST)) // Check if the array is empty
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			$query = $this->db->query("SELECT * From `backendusers` WHERE `username`= '$email' AND password='$password'");

			if($query->num_rows())
			{
				echo $this->db->last_query();
				// Credentials are valid
				$result = $query->result_array(); // Print the resulting query if the entered credentials match the saved ones 
				
			}

			else
			{
				// Invalid credentials
			}

		

		
		}

		
	}
}
