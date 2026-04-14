<?php
define("ROOT", dirname(__DIR__));
include_once ROOT . "/controllers/api.controller/api.controller.php";
include_once ROOT . "/controllers/views.controller/views.controller.php";
Api_controller::Api();
Views_controller::view();