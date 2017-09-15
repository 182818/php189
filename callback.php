<?php 

	require_once('./connect2.1/qqConnectAPI.php');

	//获取code
	// echo $_GET['code'];

	//获取accecc_token
	$oauth = new Oauth();

	//获取accecc_token
	$access_token = $oauth->qq_callback();

	$appid = $oauth->get_openid();


	// echo $res;

	echo $access_token;

	echo $appid;
