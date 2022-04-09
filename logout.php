<?php

setcookie('login' , false , time() - 3600);
header('location: login.php');