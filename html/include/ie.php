<?php if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 9.0")) { ?>
    <link rel='stylesheet' id='cssie'  href='./styles/ie.css' type='text/css' media='screen' />
<?php } else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 8.0")) { ?>
	<script type="text/javascript" src="./js/ie.js"></script>
	<link rel='stylesheet' id='cssie8'  href='./styles/ie8.css' type='text/css' media='screen' />
<?php } else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 7.0")) { ?>
	<div style="width: 100%;" class="messagebox_orange">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your browser is obsolete and does not support this webpage. Please use newer version of your browser or visit <a href="http://www.ie6countdown.com/" target="_new">Internet Explorer 6 countdown page</a>  for more information. </div>
<?php } ?>
