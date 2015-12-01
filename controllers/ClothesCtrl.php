<?php
	require_once('StandardCtrl.php');

	class ClothesCtrl extends StandardCtrl {
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
					case '':
					case 'list':
						$this->showClothing();
						break;
					
					default:
						$this->showError();
						break;
				} 
			}
			else {
					$this->showClothing();
				}
		}

		public function showClothing() {
			$header = file_get_contents("views/header.html");
			$menu =  file_get_contents("views/menu.html");
			$view =  file_get_contents("views/clothing.html");
			$footer = file_get_contents("views/footer.html");
			echo $header.$menu.$view.$footer;
		}

	}

?>