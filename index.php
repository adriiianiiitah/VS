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
      
        default:
        http_response_code(404);
    }
  } else {
    require_once('controllers/HomeCtrl.php');
    $controller = new HomeCtrl();
  }
  $controller->execute();
?>