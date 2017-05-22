<?php
/*class wxpay{
	public function getName(){
		echo "wxpay";
	}
}

class alipay{
	public function getName(){
		echo "alipay";
	}
}
//用户传过来的变量
$payment_code = 'alipay';
//把这个变量直接当作对象名
$pay_model = new $payment_code;
$pay_model->getName();*/

//支付：
//1.先搞清楚送到哪个接口送
//2.支付要告诉第三方支付接口哪些信息
//     1.money需要支付的money数
//     2.支付的订单号
//     3.商户号 给谁？
//     4.安全参数(密钥是否申请好)
//        密钥分为 对称加密：加密和解密必须是同一把钥匙 好
//                           好的保存这把钥匙 des
//                 非对称加密：加密和解密用的不是同一把钥匙 
//                             私钥 公钥 拿到私钥推到不出公钥 
//                             拿到公钥推到不出私钥 rsa md5  
//                             https即用到对称加密
//                             也用到了分对称加密 
//                             费马小定理|欧拉
//     5.url参数 renturn_url(用户体验) notify_url(支付回调给url)
//    6.回调验证是：(1.一定是支付宝回调 
//                   2.验证结果真的是支付成功)
//                   
//                   
//虽然都叫支付宝或者微信支付(分)
//1.表现形式不一样
//2.返回的值不一样
//微信支付$GLOBALS["KTTP_RAW_POST_DATA"]

//simplexml_load_string(data)
//怎么把对象转换成为一个数组？
$obj= new stdClass;
$obj->name = "gaoxungang";
$obj->age = 29;
var_dump((array)$obj);

//1.微信 支付宝 要求回调notify_url 15/15/30/180/1800/1800/1800/1800/3600，单位：秒


//php-fpm
//request_slow
//request_
//
//
//1.myisam 查询速度快 但是不支持事务
//2.innodb有事务 myisam 是表级锁 innoDB是行级锁
//
//like'%学生文具%'
//全文索引工具 ElasticSearc（ES） Xunsearch Sphinx
//倒排索引  inverted index
//刚下载后 启动 是空的 里面啥也没有 有一个脚本需要把mysql写进xunsearch
//
//引用程序
//1.第一种是安装扩展 mysql mysqlli redis
//
//2.第二种是直接是php文件 
//    直接require include 
//     -》composer 讯搜
//     
//      cd /usr/local/nginx/conf/vhosts