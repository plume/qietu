<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Download by http://www.jb51.net</title>
<script type="text/javascript" src="<?php echo get_skin_root() ?>js/jquery-1.3.2.min.js"></script>
<script type=text/javascript>
$(function(){
	$('#webmenu li').hover(function(){
		$(this).children('ul').stop(true,true).show('slow');
	},function(){
		$(this).children('ul').stop(true,true).hide('slow');
	});
	
	$('#webmenu li').hover(function(){
		$(this).children('div').stop(true,true).show('slow');
	},function(){
		$(this).children('div').stop(true,true).hide('slow');
	});
});
</script>
<style type="text/css">
* {
	margin:0;
	padding:0;
}
body {
	font-family:Arial, Verdana, Helvetica, sans-serif;
	font-family:"雅黑宋体", "微软雅黑", "新宋体", "宋体";
	font-size:1em;
	font-size:17px;
	color:#FFF;
	background:#050505;
	text-align:left;
}
a {
	color:#FFF;
	text-decoration:none;
}
ul {
	list-style:none;
}
#webmenu {
	height:37px;
	background:#333;
	font-size:1.3em;
	text-align:center;
}
#webmenu a {
	font-size:0.65em;
}
#webmenu li ul {
	display:none;
}
#webmenu li ul li {
	float:none;
}
*html #webmenu li ul li {
	display:inline;
}
#webmenu li ul a {
	float:none;
	height:32px;
	line-height:32px;
	padding:0 10px;
	text-transform:capitalize;
}
#webmenu .height-auto {
	line-height:15px;
	padding:5px 10px;
}
.second-menu, .third-menu, .fourth-menu {
	position:absolute;
}
.first-menu li {
	float:left;
	position:relative;
}
.first-menu a {
	float:left;
	display:block;
	padding:0 20px;
	height:35px;
	line-height:35px;
	background:#333;
	border-top:1px solid #4a4a4a;
	border-left:1px solid #4a4a4a;
	border-bottom:1px solid #242424;
	border-right:1px solid #242424;
	font-size:.7em;
}
.first-menu a:hover {
	background:#4698ca;
	border-top:1px solid #5db1e0;
	border-left:1px solid #5db1e0;
}
.second-menu {
	top:37px;
	right:0;
}
*html .second-menu {
	right:-1px;
}
.second-menu a {
	font-size:11px;
}
.second-menu a.arrow {
	background:#3a3a3a url(<?php echo get_skin_root() ?>image/arrow.gif) no-repeat right top;
}
.second-menu a.arrow:hover {
	background:#4698ca url(<?php echo get_skin_root() ?>image/arrow.gif) no-repeat right -32px;
}
.second-menu a.arrow-02 {
	background:#3a3a3a url(<?php echo get_skin_root() ?>image/arrow.gif) no-repeat right -64px;
}
.second-menu a.arrow-02:hover {
	background:#4698ca url(<?php echo get_skin_root() ?>image/arrow.gif) no-repeat right -110px;
}
.third-menu, .fourth-menu {
	width:177px;
	top:0;
	left:177px;
}
.third-menu a {
	background:#4c4c4c;
	font-weight:normal;
	border-top:1px solid #595959;
	border-left:1px solid #595959;
	border-bottom:1px solid #333;
	border-right:1px solid #333;
}
#subMgm {
	width:177px;
}
#subMgm .third-menu {
	left:177px;
}
#subMgm .fourth-menu {
	left:177px;
}
#subMusic, #subNews {
	width:177px;
}
.aaa a{ color:#FFCC00;}
</style>
</head>
<body>
<ul id="webmenu" class="first-menu">
  <li class="aaa" ><a href="./" target="_self">网站大全</a></li>
<?php echo pull_down_menu('class="aaa";','','class="arrow" target="_self"','style="display: none;" id="subMusic" class="second-menu"')?>
</ul>
</body>
</html>
