<?php

//定义个常量，用来授权调用includes里面的文件
define('IN_TG',true);
//定义个常量，用来指定本页的内容
define('SCRIPT','index');
//引入公共文件
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径，速度更快

//读取XML文件
$_html= _html(_get_xml('new.xml'));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>多用户留言系统--首页</title>
<?php 
	require ROOT_PATH.'includes/title.inc.php';
?>
<script type="text/javascript" src="js/blog.js"></script>
</head>
<body>

<?php 
	require ROOT_PATH.'includes/header.inc.php';
?>

<div id="list">
	<h2>帖子列表</h2>
	<a href="post.php" class="post">发表帖子</a>
	<ul class="article">
	<li><em>阅读数(<strong>89</strong>)评论数(<strong>59</strong>)</em><a href="###">小胖时代：解密胖胖的终极秘密</a></li>
	<li><em>阅读数(<strong>34</strong>)评论数(<strong>2</strong>)</em><a href="###">天上掉下个小明，请问重力加速度是多少？</a></li>
	<li><em>阅读数(<strong>65</strong>)评论数(<strong>13</strong>)</em><a href="###">格斗大作《龙珠大战奥特曼》PC版即将发布</a></li>
	<li><em>阅读数(<strong>19</strong>)评论数(<strong>45</strong>)</em><a href="###">暗黑破坏神3，2302年正式开放！</a></li>
	<li><em>阅读数(<strong>185</strong>)评论数(<strong>4</strong>)</em><a href="###">iPhone600，4300年正式发布！</a></li>
	<li><em>阅读数(<strong>19</strong>)评论数(<strong>23</strong>)</em><a href="###">飞车吧！加速少年！挑战心跳！挑战刺激！</a></li>
	<li><em>阅读数(<strong>56</strong>)评论数(<strong>12</strong>)</em><a href="###">Lol最新皮肤揭露，中国龙即将发布</a></li>
	<li><em>阅读数(<strong>15</strong>)评论数(<strong>53</strong>)</em><a href="###">新概念战车网游《胖胖的逆袭》24日圣诞夜与你相约！</a></li>
	<li><em>阅读数(<strong>19</strong>)评论数(<strong>123</strong>)</em><a href="###">有一种精神叫Hacker精神有一种信念叫永不言败！</a></li>
	<li><em>阅读数(<strong>645</strong>)评论数(<strong>633</strong>)</em><a href="###">Hacker必备4精神</a></li>
	</ul>
</div>

<div id="user">
	<h2>新进会员</h2>
	<dl>
	<dd class="user"><?php echo $_html['username']?>(<?php echo $_html['sex']?>)</dd>
	<dt><img src="<?php echo $_html['face']?>" alt="<?php echo $_html['username']?>" /></dt>
	<dd class="message"><a href="javascript:;" name="message" title="<?php echo $_html[id]?>">发消息</a></dd>
	<dd class="friend"><a href="javascript:;" name="friend" title="<?php echo $_html[id]?>">加为好友</a></dd>
	<dd class="guest">写留言</dd>
	<dd class="flower"><a href="javascript:;" name="flower" title="<?php echo $_html['id']?>">给他送花</a></dd>
	<dd class="email">邮件：<a href="mailto:<?php echo $_html['email']?>"><?php echo $_html['email']?></a></dd>
	<dd class="url">网址：<a href="<?php echo $_html['url']?>" target="_blank"><?php echo $_html['url']?></a></dd>
	</dl>
	
</div>

<div id="pics">
	<h2>最新图片</h2>
</div>

<?php 
	require ROOT_PATH.'includes/footer.inc.php';
?>

</body>
</html>
