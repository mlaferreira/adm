<?php 
require 'config.php';
$_SESSION['token'] = '';
header("Location: ". URL_BASE);
exit;