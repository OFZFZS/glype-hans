<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>在线代理浏览器 -三和大神网</title>
<meta name="description" content="在线代理浏览器可以科学的访问如Google、twitter、Facebook等网站，让上网更流畅简便。">
<meta name="keywords" content="在线代理,在线代理浏览器,网页代理">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />
<style type="text/css">
	/* GLOBAL ELEMENTS */
	html,body {
		margin: 0; padding: 0;
		background: #444;
		font-size: 100%;
		font-family: "trebuchet ms", arial, verdana;
		color: #444;
		text-align: center;
	}
	a {
		color: #EF7B0A;
		text-decoration:none; 
	}
	a:hover {
		text-decoration: underline;
	}
	p {
		color: #444;
		line-height: 170%; margin: 5px 0;
	}
	p, td, th, ul {
		font-size: 80%;
	}
	
	/* LAYOUT */
	#wrapper {
		width: 60%;
		margin: 0 auto 0 auto;
		text-align: left;
	}
	
	#content {
		background: #fff;
		border-top: 3px solid #ce6c1c;
		border-bottom: 3px solid #ce6c1c;
		padding: 20px;
	}
	
	/* ELEMENTS */
	h1 {
		font: 250% "trebuchet ms";
		color: #fff;
		padding: 40px 0 10px 10px;
		margin: 0;
	}
	h1 span {
		color: #6BAD42;
	}
	h1 a {
		color: #FFFFFF;
	}
	h1 a:hover {
		color: #6BAD42;
		text-decoration: none;
	}
	h1 a:hover span {
		color: #FFFFFF;
	}
	h2 {
		font: bold 100% arial, verdana, sans-serif;
		color: #3B578B;
		border-bottom: 1px solid #ccc;
		padding-bottom: 3px;
		margin: 25px 0 10px 0;
	}
	p+p {
		padding-top: 1em;
	}
	form.form {
		font-size: 80%;
		background-color: #f5f5f5;
		padding: 10px;
	}
	#options {
		list-style-type: none;
		width: 500px;
		margin: 10px; padding: 0;
	}
	#options li { 
		float: left;
		width: 240px;
		border-left: 5px solid #ccc;
	}
	#footer {
		margin: 10px 0 0 0; 
		font-size: 80%;
		color: #ccc;
	}
	#nav {
		text-align: right;
		list-style-type: none;
		font-size: 80%;
		border-top: 1px solid #ccc;
		margin: 20px 0 0 0;
		padding: 0;
	}
	#nav li {
		padding: 0 5px 0 5px;
		display: inline;
		border-left: 1px solid #ccc;
	}
	.left {
		float: left;
	}
	
	/* STYLES */
	.first {
		margin-top: 0;
	}
	input.textbox {
		width: 500px;
		font: 120% arial, verdana, sans-serif;
	}
	input.button {
		margin-top: 10px;
		font-family: arial, verdana, sans-serif;
		font-size: 120%;
	}
	label {
		font-weight: light;
	}
	#error {
		border: 1px solid red;
		border-left: 5px solid red;
		padding: 2px;
		margin: 5px 0 15px 0;
		background: #eee;
	}
	
	/* TABLES USED IN COOKIE MANAGEMENT / EDIT BROWSER PAGES */
	table {
		border-color: #666;
		border-width: 0 0 1px 1px;
		border-style: solid;
		width: 50%;
	}
	th {
		font-size: normal;
		background: #ccc;
		border-width: 2px;
	}
	td, th {
		border-color: #666;
		border-width: 1px 1px 0 0;
		border-style: solid;
		padding: 2px 10px 2px 10px;
	}
	td {
		background-color: #EEEEEE;
	}
	.full-width {
		width: 98%;
	}
	.large-table { 
		width: 75%; 
		margin-top: 15px;
	}
	.large-table td, .large-table th {
		padding: 5px;
	}
	td.small-note {
		font-size: 60%;
		padding: 2px;
		text-align: right;
	}
	
	/* TOOLTIP HOVER EFFECT */
	label {
		font-weight: bold;
		line-height: 20px;
		cursor: help;
	}
	#tooltip {
		width: 20em;
		color: #fff;
		font-size: 12px;
		font-weight: normal;
		padding: 5px;
		border: 3px solid #333;
		text-align: left;
		background-color: #555555;
	}
</style>
<?=injectionJS();?>
<script type="text/javascript">
	window.addDomReadyFunc(function() {
		document.getElementById('options').style.display = 'none';
		document.getElementById('input').focus();
	});
	disableOverride();
</script>
  <style type="text/css"> 
@media(max-width:960px)
{
   body {width:100%;} 
   #wrapper{width:100%;} 
   input.textbox{width:70%;} 
   #options{width:100%;} 
   #options li{width:45%;} 
   h1{
     padding: 0px 0 0px 0px;
     font: 150% "trebuchet ms";
  } 
}
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1><a href="index.php">三和大神在线代理浏览器</a></h1>
	</div>
	<div id="content">

		<!-- CONTENT START -->

		<!--[error]-->

		<h2 class="first">使用说明</h2>

		<!--[description]-->

		<h2>输入网址</h2>

		<!--[index_above_form]-->

		<form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);" class="form">
			<input type="text" name="u" id="input" size="40" class="textbox">
			<input type="submit" value="Go" class="button"> &nbsp; [<a style="cursor:pointer;" onclick="document.getElementById('options').style.display=(document.getElementById('options').style.display=='none'?'':'none')">选项</a>]
			<ul id="options">
				<?php foreach ($toShow as $option) echo '<li><input type="checkbox" name="'.$option['name'].'" id="'.$option['name'].'"'.$option['checked'].'><label for="'.$option['name'].'" class="tooltip" onmouseover="tooltip(\''.$option['escaped_desc'].'\')" onmouseout="exit();">'.$option['title'].'</label></li>';?>
			</ul>
			<br style="clear: both;">
		</form>
	 
		<!--[index_below_form]-->

		<!-- CONTENT END -->
	 
		<ul id="nav">
			<li class="left"><a href="index.php">主页</a></li>
			<li class="left"><a href="edit-browser.php">编辑浏览器</a></li>
			<li class="left"><a href="cookies.php">管理Cookies</a></li>
			<li><a href="disclaimer.php">使用声明</a></li>            
		</ul>
	</div>
	<div id="footer">
		Powered by <a href="http://www.glype.com" rel="nofollow">Glype</a>&reg; <!--[version]-->. <a href="https://www.sanhe66.com">三和大神</a>修改汉化
	</div>
</div>
</body>
</html>