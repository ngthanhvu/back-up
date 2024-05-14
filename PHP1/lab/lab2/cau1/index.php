<?php

include('user.php');

use model\User as ModelUser;
use controller\User as ControllerUser;
use view\User as ViewUser;

$modelUser = new ModelUser();
$modelUser->hello();

$controllerUser = new ControllerUser();
$controllerUser->hello();

$viewUser = new ViewUser();
$viewUser->hello();
