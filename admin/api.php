<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=7"/>
<title>『那片』资源采集平台...</title>
<link rel="stylesheet" type="text/css" href="http://zyapi.nepian.com/public/style.css?v201610x">
<script type="text/javascript"language="javascript">
/**
 *『那片』全网在线资源采集插件
 * 官方网站    www.nepian.com
 * QQ群        107028575(1群)，577200423(2群)
 * @author     朝阳<515233307@qq.com>
 * @version    3.0
 * @since      1.0
 */
function iFrameHeight(){
var ifm=document.getElementById("iframepage");
var subWeb=document.frames?document.frames("iframepage").document:ifm.contentDocument;
	if(ifm!=null&&subWeb!=null){
		ifm.height=subWeb.body.scrollHeight;
		ifm.width=subWeb.body.scrollWidth
	}
}
</script>
</head>
<body>
<div class="container">
  <div class="title">那片资源采集平台</div>
  <div class="wording">
    <div class="first-msg">版本 v11.5.s<script src="http://zyapi.nepian.com/public/update_sea.js?2016"></script></div>
    <iframe src="http://zyapi.nepian.com/public/notice.html" id="iframepage" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" onLoad="iFrameHeight()" width="630"></iframe>
  </div>
  <div id="select_wrap" class="select_wrap">
    <div class="charge_wrap spinningeffect"><a class="img_wrap" href="seacms_npvip.php"><img src="http://zyapi.nepian.com/public/vip.png"><br>收费资源</a></div>   
   <div class="free_wrap spinningeffect"><a class="img_wrap" href="seacms_npfree.php"><img src="http://zyapi.nepian.com/public/free.png"><br>免费资源</a></div>   
   <div class="free_wrap spinningeffect"><a class="img_wrap" target="_blank" href="http://www.mobanfun.com"><img src="http://zyapi.nepian.com/public/moban.png"><br>CMS模板</a></div>	
	<div class="free_wrap spinningeffect"><a class="img_wrap" target="_blank" href="http://www.ckparse.com"><img src="http://zyapi.nepian.com/public/ckparse.png"><br>云解析</a></div>	
  </div>
  <div class="copyright">
    <p><img src="http://zyapi.nepian.com/public/support.gif"></p>
  </div>
</div>
</body>
</html>
