/*------------------------------------
  FileName: proxy.php
	Author: Han Yi
	E-mail: ehanyi@gmail.com
	blog: http://www.eehan.net
	weibo: @magic_explore
	weichat: eehan
--------------------------------------*/

<?php
	$userAgent = $_SERVER['HTTP_USER_AGENT'];
	echo $userAgent;
	
	if(strpos($userAgent,"iPhone")||strpos($userAgent,"iPod")) 
	//if(strpos($userAgent,"iPhone")) 
	{
		//echo "iPhone";
		echo("<script type='text/javascript'> alert('进入iPhone下载');location.href='http://itunes.apple.com/CA/app/id331259725?mt=8';</script>");
		//header("Location:http://m.cntv.cn");

	}
	elseif (strpos($userAgent,"iPad"))
	{
		//echo "iPad";
		echo("<script type='text/javascript'> alert('进入iPad下载');location.href='http://itunes.apple.com/gr/app/id391071343?mt=8';</script>");
	}
	
		elseif (strpos($userAgent,"Windows Phone OS 7"))
	{
		echo "WP7";
	}

	elseif (strpos($userAgent,"Windows Phone 8.0"))
	{
		echo "WP8";
	}

	elseif (strpos($userAgent,"Android"))
	{
		//Android
		echo "Android";
		echo("<script type='text/javascript'> alert('进入Android下载');location.href='http://download.cntv.cn/CNTV-V3.3_androidguanwang.apk';</script>");
	}
	
		elseif (strpos($userAgent,"MSIE 10.0"))
	{
		echo "IE10.0";
	}
	
	elseif (strpos($userAgent,"MSIE 9.0"))
	{
		echo "IE9.0";
	}
	elseif (strpos($userAgent,"MSIE 6.0"))
	{
		echo "IE6.0";
	}
	elseif (strpos($userAgent,"MSIE 7.0"))
	{
		echo "IE 7.0";
	}
	elseif (strpos($userAgent,"MSIE 8.0"))
	{
		echo "IE 8.0";
	}
	elseif (strpos($userAgent,"Chrome"))
	{
		echo "Chrome";
	}
	elseif (strpos($userAgent,"Safari"))
	{
		echo "Safari";
	}
	elseif (strpos($userAgent,"Presto"))
	{
		echo "Opera";
	}
?>
