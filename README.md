#smtp类的实例应用，主要是qq和163 二个邮箱的使用<br>
## 扩展（利用[云片](http://www.yunpian.com/)发送短信验证码）<br>
### SDK使用指南(php)<br>
<hr>

1. **添加依赖包**
>下载依赖包:<br>
_**在config.php 文件内填写你的 APIKEY、APISECRET**_<br>
在使用处添加以下引用<br>
require_once('path/to/YunpianAutoload.php');<br>

2. 使用
><?php<br>
/**<br>
 * Created by PhpStorm.<br>
 * User: bingone<br>
 * Date: 16/1/19<br>
 * Time: 下午4:10<br>
 */<br>
<br>
// 1. 首先在 conf/config.php   中配置自己的相关信息<br>
<br>
// 返回格式可参考官网:   www.yunpian.com<br>
// 2. require the file<br>
require_once '../YunpianAutoload.php';<br>
<br>
// 获取用户信息<br>
$userOperator = new UserOperator();<br>
$result = $userOperator->get();<br>
print_r($result);<br>
<br>
// 模板<br>
$tplOperator = new TplOperator();<br>
$result = $tplOperator->get_default(array("tpl_id"=>'2'));<br>
print_r($result);<br>
$result = $tplOperator->get();<br>
print_r($result);<br>
$result = $tplOperator->add(array("tpl_content"=>"【bb】大倪#asdf#"));<br>
print_r($result);<br>
<br>
// 发送单条短信<br>
$smsOperator = new SmsOperator();<br>
$data['mobile'] = '13300000000';<br>
$data['text'] = '【云片网】您的验证码是1234';<br>
$result = $smsOperator->single_send($data);<br>
print_r($result);<br>
<br>
//发送批量短信<br>
$data['mobile'] = '13100000000,13100000001,2,13100000003';<br>
$result = $smsOperator->batch_send($data);<br>
print_r($result);<br>
<br>
//发送个性化短信<br>
$data['mobile'] = '13000000000,13000000001,1,13000000003';<br>
$data['text'] = '【云片网】您的验证码是1234,【云片网】您的验证码是6414,【云片网】您的验证码是0099,【云片网】您的验证码是3451';<br>
$result = $smsOperator->multi_send($data);<br>
print_r($result);<br>
<br>
//发送指定模板短信(不推荐)<br>
// 模板为【#company#】您的验证码是#code#<br>
// 发送内容：【云片网】您的验证码是1234<br>
//$data['mobile'] = '13400000000,13400000001,1,13400000003';<br>
//$data['tpl_id'] = "1";<br>
//$data['tpl_value'] =<br>
//    urlencode("#code#") . "="<br>
//    . urlencode("1234") . "&"<br>
//    . urlencode("#company#") . "="<br>
//    . urlencode("云片网");<br>
//$result = $smsOperator->tpl_send($data);<br>
//print_r($result);<br>

<br>
// 流量<br>
$flowOperator = new FlowOperator();<br>
$result = $flowOperator->get_package();<br>
print_r($result);<br>
$result = $flowOperator->recharge(array("sn"=>"1008601","mobile"=>"18700000000"));<br>
print_r($result);<br>
<br>
// 语音<br>
$voiceOperator = new VoiceOperator();<br>
$result = $voiceOperator->send(array("mobile"=>"18700000000","code"=>"1234"));<br>
print_r($result);<br>
?><br>