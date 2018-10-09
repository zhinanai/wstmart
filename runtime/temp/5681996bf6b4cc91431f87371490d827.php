<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"C:\MyProgram\myWeb\wstmart/wstmart/admin\view\main.html";i:1533199912;s:55:"C:\MyProgram\myWeb\wstmart/wstmart/admin\view\base.html";i:1533200036;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>后台管理中心 - <?php echo WSTConf('CONF.mallName'); ?></title>
<meta name="Keywords" content=""/>
<meta name="Description" content=""/> 
<link href="__ADMIN__/js/ligerui/skins/Aqua/css/ligerui-all.css?v=<?php echo $v; ?>" rel="stylesheet" type="text/css" /> 
<link href="__STATIC__/plugins/validator/jquery.validator.css?v=<?php echo $v; ?>" rel="stylesheet">

<link href="__ADMIN__/css/style.css?v=<?php echo $v; ?>" rel="stylesheet" type="text/css" />   
<script src="__STATIC__/js/jquery.min.js?v=<?php echo $v; ?>"></script>  
<script src="__ADMIN__/js/ligerui/js/ligerui.all.js?v=<?php echo $v; ?>" type="text/javascript"></script> 
<script type='text/javascript' src='__STATIC__/plugins/layer/layer.js?v=<?php echo $v; ?>'></script> 
<script src="__STATIC__/js/common.js?v=<?php echo $v; ?>"></script>
<script>
window.conf = {"ROOT":"__ROOT__","APP":"__APP__","STATIC":"__STATIC__","SUFFIX":"<?php echo config('url_html_suffix'); ?>","GOODS_LOGO":"<?php echo WSTConf('CONF.goodsLogo'); ?>","SHOP_LOGO":"<?php echo WSTConf('CONF.shopLogo'); ?>","MALL_LOGO":"<?php echo WSTConf('CONF.mallLogo'); ?>","USER_LOGO":"<?php echo WSTConf('CONF.userLogo'); ?>",'GRANT':'<?php echo implode(",",session("WST_STAFF.privileges")); ?>'}
</script>
<script src="__ADMIN__/js/common.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="__STATIC__/plugins/validator/jquery.validator.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="__STATIC__/plugins/validator/local/zh-CN.js?v=<?php echo $v; ?>"></script>
</head>
<body>

<div class="wstmart-login-tips">
    <p>您好，<?php echo session('WST_STAFF.staffName'); ?>，欢迎使用 WSTMart。 您上次登录的时间是 <?php echo session('WST_STAFF.lastTime'); ?> ，IP 是 <?php echo session('WST_STAFF.lastIP'); ?></p>
</div>
<div id='wstmart-version-tips' class='wstmart-version-tips'>您有新的版本(<span id='wstmart_version'>0.0.0</span>)可以下载啦~，<a id='wstmart_down' href='' target='_blank'>点击</a>下载</div>
<div id='wstmart-accredit-tips' class='wstmart-accredit-tips' >系统检测到您未获取授权，点此<a target='_blank' href='http://www.wstmart.net/index.php?c=License&a=index'>获取系统授权码</a>，开源版仅提供部分功能体验，授权版功能请联系客服：<a href="tencent://message/?uin=153289970&Site=QQ交谈&Menu=yes">
					  <img border="0" style='vertical-align:middle' src="http://wpa.qq.com/pa?p=1:153289970:7" alt="QQ交谈" width="60" height="20" />
				  </a></div>                
<table width='100%' border='0'>
   <tr>
     <td>
		<table class="wst-form wst-summary">
		  <tr>
		     <td class='wst-summary-head' colspan='4'>今日统计</td>
		  </tr>
		  <tr>
			 <td width="25%" align='right'>新增会员：</td>
			 <td width="25%"><?php echo $object['tody']['userType0']; ?></td>
			 <td width="25%" align='right'>新增商家：</td>
			 <td><?php echo $object['tody']['userType1']; ?></td>
		  </tr>
		  <tr>
		     <td align='right'>开店申请：</td>
			 <td><?php echo $object['tody']['shopApplys']; ?></td>
			 <td align='right'>新增投诉：</td>
		     <td><?php echo $object['tody']['compalins']; ?></td>
		  </tr>
		  <tr>
		     <td align='right'>上架商品：</td>
			 <td><?php echo $object['tody']['saleGoods']; ?><span style='margin-left:25px;'>（待审核：<?php echo $object['tody']['auditGoods']; ?>）</span></td>
			 <td align='right'>新增订单：</td>
		     <td><?php echo $object['tody']['order']; ?></td>
		  </tr>
		</table>
		<table class="wst-form wst-summary">
		  <tr>
		     <td class='wst-summary-head' colspan='4'>商城统计</td>
		  </tr>
		  <tr>
			 <td width="25%" align='right'>会员总数：</td>
			 <td width="25%"><?php echo $object['mall']['userType0']; ?></td>
			 <td width="25%" align='right'>商家总数：</td>
			 <td><?php echo $object['mall']['userType1']; ?></td>
		  </tr>
		  <tr>
		     <td align='right'>上架商品总数：</td>
			 <td><?php echo $object['mall']['saleGoods']; ?><span style='margin-left:25px;'>（待审核：<?php echo $object['mall']['auditGoods']; ?>）</span></td>
			 <td align='right'>订单总数：</td>
		     <td>0</td>
		  </tr>
		  <tr>
		     <td align='right'>品牌总数：</td>
			 <td><?php echo $object['mall']['brands']; ?></td>
			 <td align='right'>评价总数：</td>
		     <td><?php echo $object['mall']['appraise']; ?></td>
		  </tr>
		</table>
		<table class="wst-form wst-summary">
		  <tr>
		     <td class='wst-summary-head' colspan='4'>系统信息</td>
		  </tr>
		  <tr>
			 <td width="25%" align='right'>软件版本号：</td>
			 <td width="25%">【开源版】<?php echo WSTConf("CONF.wstVersion"); ?></td>
			 <td width="25%" align='right'>授权类型：</td>
			 <td><div id='licenseStatus'></div></td>
		  </tr>
		  <tr>
		     <td align='right'>问题反馈：</td>
			 <td id='webUrl'><a href="http://bbs.shangtaosoft.com" target='_blank'>点击反馈</a></td>
			 <td align='right'>授权码：</td>
		     <td><?php echo WSTConf("CONF.mallLicense"); ?></td>
		  </tr>
		  <tr>
		     <td align='right'>服务器操作系统：</td>
			 <td><?php echo PHP_OS; ?></td>
			 <td align='right'>WEB服务器：</td>
		     <td ><?php echo \think\Request::instance()->server('SERVER_SOFTWARE'); ?></td>
		  </tr>
		  <tr>
		     <td align='right'>PHP版本：</td>
		     <td ><?php echo PHP_VERSION; ?></td>
			 <td align='right'>MYSQL版本：</td>
		     <td ><?php echo $object['MySQL_Version']; ?></td>
		  </tr>
		</table>
	</td>
	<td width='260' valign='top'>  
		<div class='wst-desc-head'>走进我们</div>
		<div class='wst-desc-body'>官网：<a href='http://www.wstmart.net' target='_blank'>http://www.wstmart.net</a></div>
		<div class='wst-desc-head' style='margin-top:20px;'>开发团队：</div>
		<div class='wst-desc-body'>广州商淘信息科技有限公司</div>
		<div class='wst-desc-head' style='margin-top:20px;'>我们的理念</div>
		<div class='wst-desc-body'>我们愿与更多中小企业一起努力，一起成功!</div>
		<div class='wst-desc-body'>We Success together!</div>
		<div class='wst-desc-head' style='margin-top:20px;'>使用交流</div>
		<div class='wst-desc-body'>交流社区：<a href='http://bbs.shangtaosoft.com' target='_blank'>http://bbs.shangtaosoft.com</a></div>
		<div class='wst-desc-body'>用户QQ群：590755485</div>
		<div class='wst-desc-head' style='margin-top:20px;'>商城定制</div>
		<div class='wst-desc-body'>电话：020-85289921</div>
		<div class='wst-desc-body'>QQ：153289970</div>  
	</td>
	</tr>
</table>


<script src="__ADMIN__/js/main.js?v=<?php echo $v; ?>" type="text/javascript"></script>
<script>
function enterLicense(){
	location.href='<?php echo Url("admin/index/enterLicense"); ?>';
}
</script>

<script>
function showImg(opt){
	layer.photos(opt);
}
function showBox(opts){
	return WST.open(opts);
}
</script>
</body>
</html>