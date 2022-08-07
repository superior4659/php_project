<?php

session_start();

echo 'Logging out please wait.....';

session_destroy();

header('location:index.php')




?>