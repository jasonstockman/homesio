<?php 
if (!isset($_COOKIE['homesio'])) {
    exit;
}
require 'UserApp/Autoloader.php';
UserApp\Autoloader::register();
\UserApp\API::setGlobalOptions(
  array(
    "app_id" => "5283611bee23d"
  )
);
$api = new \UserApp\API();
?>