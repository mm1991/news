<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/css/1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="box">
	<div class="title">编辑新闻</div>
		<div class="right3">欢迎您！<?php echo $username ?>&nbsp;&nbsp;
		<a href="/CI/index.php/home/loginout">注销</a>
	</div>
<?php foreach($sel as $r){?>
	<form action="/CI/index.php/home/edit" method="post">
		<table border="0" cellspacing="10" cellpadding="0" width="90%">
			<tr>
				<td width="15%" valign="top" style="font-size:20px">新闻主题</td>
				<td valign="top"><input type="text" name="title" maxlength="50" height="20px" value=<?php echo $r->title ?>></td>
			</tr>
			<tr>
				<td width="15%" valign="top" style="font-size:20px">新闻内容</td>
				<td valign="top"><textarea name="news" rows="30" cols="100"><?php echo $r->news ?></textarea></td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="center">
						<input type="hidden" name="id" value=<?php echo $r->id ?>>
<?php	}?>
						<input type="submit" value="发布"> | 
						<input type="reset" value="重置">
					</div>
				</td>
			</tr>
		</table>
	</form>

</div>
</body>
</html>