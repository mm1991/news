<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link href="/css/1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="all">
	<div id="form">
    	<div class="a">新闻管理系统</div>
	 	<form action="/CI/index.php/home/checklogin" method="post">
 			 <table border="0" cellpadding="8" width="350" align="center">
    			<tr class="t"><td colspan="1">用户名：</td> 
    		    	<td><input name="username" type="text" id="username" class="textinput" value=""/></td> 
				</tr>
				<tr class="t">
            		<td colspan="1">密码：</td> 
   					<td class="textinput"><input name="pwd" type="password" id="password" value=""/></td>
				</tr> 
				<tr class="t">      	
            		<td colspan="2" align="center">
                		<input type="checkbox" name="remember" />记住密码&nbsp;&nbsp;
                    	<input type="submit"  class="btn" name="sub" value="登录">&nbsp;&nbsp;
                    	<input type="reset" name="重置" value="重置" class="btn">    
            		</td>
				</tr> 
			</table>
    	</form>
     </div>
</div>
</body>
</html>