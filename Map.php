<?php 
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/Http.php');

class Map
{
	static $appkey = 'your app key';// replace with your app key
	static $place_api = array(
		'url' => 'http://api.map.baidu.com/place/v2/search', 
		'params' => array(
			'query' => '',
			'scope' => '1',
			'region'=> '北京',
			'ak' 	=> '',
			'output' => 'json',
		),
	);

	static function place($query, $scope, $region='', $page_size=10, $page_num=0, $output='json') {
		$url = self::$place_api['url'];
		$params = self::$place_api['params'];
		foreach($params as $key => $default) {
			if(isset($$key)) {
				$params[$key] = $$key;
			}
		}
		$params['ak'] = self::$appkey;
		$query = http_build_query($params);
		$url .= '?' . $query;
		return self::callGet($url);
	}

	static function callGet($url) {
		return Http::get($url);		
	}
	//static function __call() {}
}
?>
