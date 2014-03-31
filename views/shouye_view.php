<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/css/1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="box">
	<div class="title">新闻管理系统</div>
	<div class="right3">欢迎您！<?php echo $username ?>&nbsp;&nbsp;
		<a href="/CI/index.php/home/loginout">注销</a>
	</div>
	<div class="dh">
     	<div class="c21"> <a href="/CI/index.php/home/addnews_view" >发布新闻 </a> </div>
   		<div class="right2">
    		<form action="/CI/index.php/home/shouye" method="get">
    			<table border="0" cellpadding="0" cellspacing="0">
    				<tr>
     					<td>站内搜索&nbsp;&nbsp;<input class="input_1" name="title" type="text" value="&nbsp;请输入关键字" size="30" onmouseover=this.focus();this.select(); onclick="if(value==defaultValue){value='';this.style.color='#000'}" onBlur="if(!value){value=defaultValue;this.style.color='#999'}"  style="color:#999" /></td>
            			<td><input class="input_sub" type="submit" value="" /></td>      
  					</tr>
  				</table>
    		</form>
    	</div> 	
    </div>
    <div class="clear"></div>
<?php foreach($sql as $r)
{?>	
	<div class="c523">
        <ul><li> 
            <div class="left">
				<a href="/CI/index.php/home/browse?id=<?php echo $r->id ?>" > <?php echo $r->title ?></a>
					</div>
                	<div class="right">
						<?php echo $r->datetime ?>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="/CI/index.php/home/edit_view?id=<?php echo $r->id ?>"><img src="/css/edit.jpg"></a>
						<a href="/CI/index.php/home/delete?id=<?php echo $r->id ?>"><img src="/css/del.jpg"></a>
					</div>
					<div class="clear"></div>
            	</li></ul>    
        	</div> 
			<div class="clear"></div>
<?php }?>


