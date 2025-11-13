<?php
    require_once __DIR__ . '/../controllers/UserControllers.php';

    $userController = new UserControllers();

    $userController->updateUser($_POST); 

?>
