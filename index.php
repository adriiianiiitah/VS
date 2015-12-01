<?php 
  session_start();
  if(isset($_GET) && !empty($_GET['ctrl'])) {
    $controller = $_GET['ctrl'];

    switch ($controller) {
      case '':
      case 'home':
        require_once('controllers/HomeCtrl.php');
        $controller = new HomeCtrl();
      break;
      case 'clothes':
        require_once('controllers/ClothesCtrl.php');
        $controller = new ClothesCtrl();
      break;
      case 'contact':
        require_once('controllers/ContactCtrl.php');
        $controller = new ContactCtrl();
      break;
      case 'shopping-cart':
        require_once('controllers/ShoppingCartCtrl.php');
        $controller = new ShoppingCartCtrl();
      break;
      case 'UserCtrl':
      	require_once('controllers/UserCtrl.php');
      	$controller = new UserCtrl();
      break;
      
      default:
        $this->showError();
        break;
    }
  } else {
    require_once('controllers/HomeCtrl.php');
    $controller = new HomeCtrl();
  }
  $controller->execute();
?>