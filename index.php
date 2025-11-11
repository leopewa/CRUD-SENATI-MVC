<script src='app/views/estilos/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="app/views/estilos/css/bootstrap.min.css">

<?php 


require_once 'app/controllers/UserControllers.php';

$userController = new UserControllers;

$userController->getAllUsers();



?>