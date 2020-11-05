<?php

setcookie('view_profile', 'true', time()+3600, '/');

header('location: view_profile.php');

?>