<?php
	require_once('StandardCtrl.php');

	class SubcategoriesCtrl extends StandardCtrl {
		private $model;
		public $table_name;
		public $url;
		public $modal;

		public function __construct() {
			parent::__construct();
			require_once('./models/SubcategoriesMdl.php');
			$this->model = new CategoriessMdl();
			$this->table_name = 'categories';
			$this->url = 'images/categories';
			$this->modal = 'modal-delete-category';
		}

		public function execute() {
			if(isset($_GET['action'])) {
				$action = $_GET['action'];

				switch ($action) {
					case '':
					case 'list':
						$this->showCategories();
						break;
					case 'view':
						if(isset($_GET['id']) && !empty($_GET['id']))
							$this->showCategory($_GET['id']);
						else
							$this->showErrorPage();
						break;
					case 'edit':
						if(isset($_GET['id']) && !empty($_GET['id']))
							$this->editCategory($_GET['id']);
						else
							$this->showErrorPage();
						break;
					
					default:
						$this->showErrorPage();
						break;
				} 
			}
			else {
					$this->showCategories();
				}
		}

		public function getRow($view) {
			$start = strrpos($view,'<!--row-->');
			$end = strrpos($view,'<!--.row-->') +11;
			$row = substr($view,$start,$end-$start);
			return $row;
		}

		public function showCategories() {
			$categories = $this->model->getAll();
			$view = $this->getView("categories", 'list', $this->modal);
			$area = $this->getRow($view);
			$table = "";

			foreach ($categories as $category) {
				$area = $row = $this->getRow($view);
				$diccionary = array(
					'{{id}}'=>$category['id'],
					'{{code}}'=>$category['code'],
					'{{name}}'=>$category['name'],
					'{{description}}'=>$category['description'],
					'{{category-view}}'=>"index.php?ctrl=categories&action=view&id=".$category['id'],
					'{{category-edit}}'=>"index.php?ctrl=categories&action=edit&id=".$category['id'],
				);
				$row = strtr($row,$diccionary);
				$table .= $row;
			}

			$view = str_replace($area, $table, $view);
			echo $view;
		}

		public function showCategory($id) {
			$category = $this->model->getOne($id);

			if($this->isInt($id)) {
				
				$view = $this->getView("category-view", 'view', $this->modal);

				$content = $view;
				$diccionary = array(
					'{{id}}'=>$category['id'],
					'{{code}}'=>$category['code'],
					'{{name}}'=>$category['name'],
					'{{description}}'=>$category['description'],
					'{{image}}'=>$category['image'],
					'{{category-view}}'=>"index.php?ctrl=categories&action=view&id=".$category['id'],
					'{{category-edit}}'=>"index.php?ctrl=categories&action=edit&id=".$category['id'],
				);
				$content = strtr($view,$diccionary);
				$view = str_replace($view, $table, $content);

				echo $view;
			} else {
				$this->showErrorPage();
				
			}
		}

		public function editCategory($id) {
			$category = $this->model->getOne($id);
			$image = $category['image'];

			if(empty($_POST)) {
				$this->showFormEdit($id,$category);
			} else {
				$code = $_POST['code'];
				$name = $_POST['name'];
				$description = $_POST['description'];

				if($_FILES['image']['tmp_name'] != '')
					$image = $this->uploadImage($id, $this->table_name, $_FILES['image'],$this->url);

				$this->model->update($id,$code,$name,$description,$image);

				$this->showCategory($id);
			}
		}

		public function showFormEdit($id,$category) {

			if($this->isInt($id) && $this->isResponse($category)) {
				$view = $this->getView("category-edit", 'edit', $this->modal);

				$content = $view;
				$diccionary = array(
					'{{id}}'=>$category['id'],
					'{{code}}'=>$category['code'],
					'{{name}}'=>$category['name'],
					'{{description}}'=>$category['description'],
					'{{image}}'=>$category['image'],
					'{{category-view}}'=>"index.php?ctrl=categories&action=view&id=".$category['id'],
					'{{category-edit}}'=>"index.php?ctrl=categories&action=edit&id=".$category['id'],
					'{{action}}'=>"index.php?ctrl=categories&action=edit&id=".$category['id']
				);
				$content = strtr($view,$diccionary);
				$view = str_replace($view, $table, $content);

				echo $view;
			} else {
				$this->showErrorPage();
				
			}
		}
	}
?>