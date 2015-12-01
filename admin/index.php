<?php 
  session_start();
  if(isset($_GET) && !empty($_GET['ctrl'])) {
    $controller = $_GET['ctrl'];

    switch ($controller) {
      case '':
      case 'index':
        require_once('controllers/IndexCtrl.php');
        $controller = new IndexCtrl();
      break;
      case 'categories':
        require_once('controllers/CategoriesCtrl.php');
        $controller = new CategoriesCtrl();
      break;
      case 'clothes':
        require_once('controllers/ClothesCtrl.php');
        $controller = new ClothesCtrl();
      break;
      
      default:
        $this->showErrorPage();
    }
  } else {
    require_once('controllers/IndexCtrl.php');
    $controller = new IndexCtrl();
  }
  $controller->execute();
?>