<?php
require_once('YunpianAutoload.php');

// 获取用户信息（当前apikey的用户相关信息）
$userOperator = new UserOperator();
$result = $userOperator->get();
print_r($result);



// 模板
// $tplOperator = new TplOperator();
// $result = $tplOperator->get_default(array("tpl_id"=>'2'));
// print_r($result);
// $result = $tplOperator->get();
// print_r($result);
// $result = $tplOperator->add(array("tpl_content"=>"【bb】大倪#asdf#"));
// print_r($result);
// 

//个人发信息
$smsOperator = new SmsOperator();
$data['mobile'] = 'xxxxxxx';   //发送的电话号码
$data['text'] = '【云片网】您的验证码是123456';
$result = $smsOperator->single_send($data);
print_r($result);
