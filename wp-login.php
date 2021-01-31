<!DOCTYPE html>
<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="zh-CN">
	<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>登录 &lsaquo; 有坂ましろ &#8212; WordPress</title>
<script src="/cdn-cgi/apps/head/eDbIdBJQI29qe-B7ITin8GrDICU.js"></script><link rel='dns-prefetch' href='//s.w.org' />
<script>
			/* <![CDATA[ */
			var rcewpp = {
				"ajax_url":"https://jioushan.xyz/wp-admin/admin-ajax.php",
				"nonce": "102736628f",
				"home_url": "https://jioushan.xyz"
			};
			/* ]]\> */
		</script>
<link rel='stylesheet' id='dashicons-css' href='/wp-includes/css/dashicons.min.css?ver=5.4.4' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css' href='/wp-includes/css/buttons.min.css?ver=5.4.4' type='text/css' media='all' />
<link rel='stylesheet' id='forms-css' href='/wp-admin/css/forms.min.css?ver=5.4.4' type='text/css' media='all' />
<link rel='stylesheet' id='l10n-css' href='/wp-admin/css/l10n.min.css?ver=5.4.4' type='text/css' media='all' />
<link rel='stylesheet' id='login-css' href='/wp-admin/css/login.min.css?ver=5.4.4' type='text/css' media='all' />
<meta name="generator" content="Site Kit by Google 1.23.0" /><link rel="stylesheet" type="text/css" href="/wp-content/themes/Sakura/inc/login.css?3.3.6" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/jquery/jquery@1.8.2/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+SC&display=swap" rel="stylesheet">
<style>body{font-family:"Noto Serif SC","Source Han Serif SC","Source Han Serif","source-han-serif-sc","PT Serif","SongTi SC","MicroSoft Yahei",Georgia,serif !important;}</style>
<meta name='robots' content='noindex,noarchive' />
<meta name='referrer' content='strict-origin-when-cross-origin' />
<meta name="viewport" content="width=device-width" />
</head>
<body class="login no-js login-action-login wp-core-ui  locale-zh-cn">
<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
<div id="login">
<h1><a href="/">有坂ましろ</a></h1>
<form name="loginform" id="loginform" action="/wp-login.php" method="post">
<p>
<label for="user_login">用户名或电子邮件地址</label>
<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" />
</p>
<div class="user-pass-wrap">
<label for="user_pass">密码</label>
<div class="wp-pwd">
<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" />
<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="显示密码">
<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
</button>
</div>
</div>
<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <label for="rememberme">记住我的登录信息</label></p>
<p class="submit">
<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录" />
<input type="hidden" name="redirect_to" value="https://jioushan.xyz/wp-admin/" />
<input type="hidden" name="testcookie" value="1" />
</p>
</form>
<p id="nav">
<a href="/wp-login.php?action=lostpassword">忘记密码？</a>
</p>
<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
<p id="backtoblog"><a href="/">
&larr; 返回到有坂ましろ </a></p>
</div>
<script type="text/javascript" src="/wp-content/themes/Sakura/js/login.js"></script>
<script type="text/javascript">
jQuery("body").prepend("<div class=\"loading\"><img src=\"https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/login_loading.gif\" width=\"58\" height=\"10\"></div><div id=\"bg\"><img /></div>");
jQuery('#bg').children('img').attr('src', 'https://jioushan.xyz/wp-content/uploads/2019/11/1-1Z10H24408-51.jpg').load(function(){
	resizeImage('bg');
	jQuery(window).bind("resize", function() { resizeImage('bg'); });
	jQuery('.loading').fadeOut();
});</script>
<script>
	function verificationOK(){
		var x, y, z = "verification";
		var x=$('#loginform').find('input[name="verification"]').val();
		//var x=document.forms["loginform"]["verification"].value; //原生js实现
		var y=$('#registerform').find('input[name="verification"]').val();
		var z=$('#lostpasswordform').find('input[name="verification"]').val();
		if (x=="verification" || y=="verification" || z=="verification"){
		  alert("Please slide the block to verificate!");
		  return false;
	  }
	}
	$(document).ready(function(){
		$( '<p><div id="verification-slider"><div id="slider"><div id="slider_bg"></div><span id="label">»</span><span id="labelTip">Slide to Verificate</span></div><input type="hidden" name="verification" value="verification" /></div><p>' ).insertBefore( $( ".submit" ) );
		$('form').attr('onsubmit','return verificationOK();');
        $('h1 a').attr('style','background-image: url(https://jioushan.xyz/wp-content/themes/Sakura/images/mashiro-logo-s.png); ');
		$(".forgetmenot").replaceWith('<p class="forgetmenot">Remember Me<input name="rememberme" id="rememberme" value="forever" type="checkbox"><label for="rememberme" style="float: right;margin-top: 5px;transform: scale(2);margin-right: -10px;"></label></p>');
	});
	</script><script type="text/javascript">
		var startTime = 0;
		var endTime = 0;
		var numTime = 0;
		$(function () {
			var slider = new SliderUnlock("#slider",{
			successLabelTip : "OK"
		},function(){
			var sli_width = $("#slider_bg").width();
			$('#verification-slider').html('').append('<input id="verification-ok" class="input" type="text" size="25" value="OK!" name="verification" disabled="true" />');

			endTime = nowTime();
			numTime = endTime-startTime;
			endTime = 0;
			startTime = 0;
			// 获取到滑动使用的时间 滑动的宽度
			// alert( numTime );
			// alert( sli_width );
		});
			slider.init();
		})

		/**
		* 获取时间精确到毫秒
		* @type
		*/
		function nowTime(){
			var myDate = new Date();
			var H = myDate.getHours();//获取小时
			var M = myDate.getMinutes(); //获取分钟
			var S = myDate.getSeconds();//获取秒
			var MS = myDate.getMilliseconds();//获取毫秒
			var milliSeconds = H * 3600 * 1000 + M * 60 * 1000 + S * 1000 + MS;
			return milliSeconds;
		}
	</script>
<script type="text/javascript" src="/wp-content/themes/Sakura/user/verification.js"></script><script type='text/javascript' src='/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/jioushan.xyz\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='/wp-includes/js/zxcvbn-async.min.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"\u5bc6\u7801\u5f3a\u5ea6\u672a\u77e5","short":"\u975e\u5e38\u5f31","bad":"\u5f31","good":"\u4e2d\u7b49","strong":"\u5f3a","mismatch":"\u4e0d\u5339\u914d"};
/* ]]> */
</script>
<script type='text/javascript' src='/wp-admin/js/password-strength-meter.min.js?ver=5.4.4'></script>
<script type='text/javascript' src='/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='/wp-includes/js/wp-util.min.js?ver=5.4.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var userProfileL10n = {"warn":"\u60a8\u7684\u65b0\u5bc6\u7801\u672a\u88ab\u4fdd\u5b58\u3002","warnWeak":"\u786e\u8ba4\u4f7f\u7528\u5f31\u5bc6\u7801","show":"\u663e\u793a","hide":"\u9690\u85cf","cancel":"\u53d6\u6d88","ariaShow":"\u663e\u793a\u5bc6\u7801","ariaHide":"\u9690\u85cf\u5bc6\u7801"};
/* ]]> */
</script>
<script type='text/javascript' src='/wp-admin/js/user-profile.min.js?ver=5.4.4'></script>
<div class="clear"></div>
</body>
</html>