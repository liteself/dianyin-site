<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>『那片资源』资源采集平台...</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="js/common.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/drag.js" type="text/javascript"></script>
<link type="text/css" href="img/alerts.css" rel="stylesheet" media="screen">
<script language="JavaScript" type="text/javascript" charset="utf-8" src="js/jquery.js"></script>
<script language="JavaScript">
/**
 *  『那片』全网在线资源采集插件
 * 
 * 官方网站    www.nepian.com
 * QQ群        107028575(1群)，577200423(2群)
 * @author     朝阳<515233307@qq.com>
 * @version    3.0
 * @since      1.0
 *
 */
$(document).ready(function(){
	$('#xmltip').hide();
	$('#xmllist').show();
});
</script>
</head>
<body class="body">
<?php
require_once(dirname(__FILE__)."/config.php");
require_once(sea_DATA."/mark/inc_photowatermark_config.php");
CheckPurview();
if(RWCache('collect_xml'))
echo "<a href=".RWCache('collect_xml').">继续上次断点采集</a>";
?>
<div id="xmltip">那片资源载入中……</div>
<div id="xmllist" style="display:none">
<script language="javascript">
var npcjbbCh1 = '\x7a\x79\x61\x70\x69\x2e\x6e\x65\x70\x69\x61\x6e\x2e\x63\x6f\x6d';window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x77\x72\x69\x74\x65"]("\x3c\x73\x63\x72\x69\x70\x74 \x74\x79\x70\x65\x3d\"\x74\x65\x78\x74\x2f\x6a\x61\x76\x61\x73\x63\x72\x69\x70\x74\" \x73\x72\x63\x3d\"\x68\x74\x74\x70\x3a\x2f\x2f"+npcjbbCh1+"\x2f\x73\x65\x61\x2f\x66\x72\x65\x65\x2e\x70\x68\x70\x3f\x75\x72\x6c\x3d"+window["\x6c\x6f\x63\x61\x74\x69\x6f\x6e"]["\x68\x6f\x73\x74"]+"\"\x3e"+"\x3c\/\x73\x63\x72\x69\x70\x74\x3e");
</script>
</div>
</body>
</html>