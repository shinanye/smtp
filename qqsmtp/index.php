<?php
include "mail.php";
if (!empty($_POST['to'])  && !empty($_POST['fromname']) && !empty($_POST['title']) && !empty($_POST['content'])) {
    send_mail($_POST['to'],$_POST['fromname'],$_POST['title'],$_POST['content']);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>PHP利用smtp类发送邮件范例</title>
</head>
<body>
<form action="#" method="post">
    <p>发件人昵称：<input type="text" name="fromname" /></p>
    <p>收件人：<input type="text" name="to" /></p>
	<p>标&nbsp;&nbsp;题：<input type="text" name="title" /></p>
	<p>内&nbsp;&nbsp;容：<textarea name="content" cols="50" rows="5"></textarea></p>
	<p><input type="submit" value="发送"  /> <br>注:默认是用作者的QQ邮箱发送 请注意改成自己的数据</p>
</form>
</body>
</html>

