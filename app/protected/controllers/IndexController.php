<?php

class IndexController extends Controller
{


	private $api = 'http://api.snappea.com/v1/video/';

	/*
	
	视频详情： http://api.snappea.com/v1/video/4701886

	分类列表： http://api.snappea.com/v1/video/categories?hl=id_GZ

	music 分类： http://api.snappea.com/v1/video?category=Music&region=IN&start=0&max=10

	popular： http://api.snappea.com/v1/video/starter?region=IN&start=0&max=5

	专题列表：http://api.snappea.com/v1/video/specials/rich?region=IN

	专题详情： http://api.snappea.com/v1/video/special/detail?id=13&region=IN&start=0&max=1

	MV专题列表：http://api.snappea.com/v1/video/MV/specials?region=IN

	MV专题详情: http://api.snappea.com/v1/video/MV/special/detail?id=1&region=IN&start=0&max=5


	*/


	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{


		$categoresString = file_get_contents($this->api . 'categories?hl=id_GZ');
		$categoresArray = json_decode($categoresString,true);
		var_dump($categoresArray);die;


		// renders the view file 'protected/views/index/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	} 
}