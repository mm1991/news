<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/css/1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="box">
	<div class="right3">欢迎您！<?php echo $username ?>&nbsp;&nbsp;
		<a href="/CI/index.php/home/loginout">注销</a>
	</div>
<?php	foreach($sel as $r){?>
	<a href="/CI/index.php/home/shouye">返回首页</a>	
	<ul><li> 
       <div class="title">
			<?php echo $r->title ?>
	   </div>
       <div class="date" >
			<?php echo $r->datetime ?>
       </div>
       <div class="content">
      		<?php echo $r->news ?>
       </div>
	</li></ul>
<?php }?>
</div>       
</body>
</html>