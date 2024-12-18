<?php

include "../classes/User.php";

//crreate an object
$user = new User;

//call the method
$user->store($_POST);


?>