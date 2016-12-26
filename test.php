<?php
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/Map.php');

	$map = new Map();
	$place = '左安门';
	$scope = 1;
	$region = '北京';

	$ret = $map->place($place, $scope, $region);
	$ret = json_decode($ret, true);
	var_dump($ret);exit;
?>
