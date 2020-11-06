<?php

setcookie('edit_profile', 'true', time()+3600, '/');

header('location: edit_profile.php');

?>