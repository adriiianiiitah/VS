<?php 
	//session_start();
	require_once('StandardCtrl.php');
	class UserCtrl extends StandardCtrl {
		private $model;

		public function __construct() {
			parent::__construct();
			//require_once('./models/HomeMdl.php');
			//$this->model = new HomeMdl();
		}
		
		public function execute() {
			if(isset($_GET['action'])) {
				$action = $_GET['action'];

				switch ($action) {
					case 'register':
						$this->showRegister();
						break;
					case 'forgotpassword':
						$this->showForgotPassword();
						break;
					
					default:
						 $this->showError();
						break;
				}
			}
		}
		public function showRegister() {
			$header = file_get_contents("views/header.html");
			$menu =  file_get_contents("views/menu.html");
			$view =  file_get_contents("views/register.html");
			$footer = file_get_contents("views/footer.html");
			echo $header.$menu.$view.$footer;
		}
		public function showForgotPassword() {
			$header = file_get_contents("views/header.html");
			$menu =  file_get_contents("views/menu.html");
			$view =  file_get_contents("views/forgot-password.html");
			$footer = file_get_contents("views/footer.html");
			echo $header.$menu.$view.$footer;
		}
	}
	
?>