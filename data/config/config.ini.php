<?php


$config = array();
$config['base_site_url'] 		= 'http://localhost';
$config['shop_site_url'] 		= 'http://localhost/shop';
$config['cms_site_url'] 		= 'http://localhost/cms';
$config['microshop_site_url'] 	= 'http://localhost/microshop';
$config['circle_site_url'] 		= 'http://localhost/circle';
$config['admin_site_url'] 		= 'http://localhost/admin';
$config['mobile_site_url'] 		= 'http://localhost/mobile';
$config['wap_site_url'] 		= 'http://localhost/wap';
$config['chat_site_url'] 		= 'http://localhost/chat';
$config['node_site_url'] 		= 'http://::1:8090';
$config['delivery_site_url']    = 'http://localhost/delivery';
$config['upload_site_url']		= 'http://localhost/data/upload';
$config['resource_site_url']	= 'http://localhost/data/resource';
$config['version'] 		= '201601130001';
$config['setup_date'] 	= '2017-05-18 11:31:15';
$config['gip'] 			= 0;
$config['dbdriver'] 	= 'mysqli';
$config['tablepre']		= 'shopnc_';
$config['db']['1']['dbhost']       = 'localhost';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 'zjh';
$config['db']['1']['dbpwd']        = 'asdasd123';
$config['db']['1']['dbname']       = 'zjh';
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
$config['cookie_pre'] 		= '27EA_';
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
$config['redis']['prefix']      	= 'shopnc_';
$config['redis']['master']['port']     	= 6379;
$config['redis']['master']['host']     	= '127.0.0.1';
$config['redis']['master']['pconnect'] 	= 0;
$config['redis']['slave']      	    = array();
$config['fullindexer']['open']      = true;
$config['fullindexer']['appname']   = 'shopnc';
$config['debug'] 			= false;
$config['default_store_id'] = '1';
$config['url_model'] = false;
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = true;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = true;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
$config['cache_open'] = true;
$config['delivery_site_url']    = 'http://localhost/delivery';
return $config;