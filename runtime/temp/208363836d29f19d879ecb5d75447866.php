<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"C:\MyProgram\myWeb\wstmart/wstmart/admin\view\homemenus\list.html";i:1533199918;s:55:"C:\MyProgram\myWeb\wstmart/wstmart/admin\view\base.html";i:1533200036;}*/ ?>
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

<div class="l-loading" style="display: block" id="wst-loading"></div>
<div class="wst-toolbar">
   菜单类型：<select id='s_menuType' onchange='loadGrid()'>
      <option value='-1'>全部</option>
      <option value='0'>用户菜单</option>
      <option value='1'>商家菜单</option>
   </select>
   <?php if(WSTGrant('QTCD_01')): ?>
   <button class="btn btn-green f-right" onclick="javascript:toEdit(0)">新增</button>
   <?php endif; ?>
   <div style="clear:both"></div>
</div>
<div id="maingrid"></div>
<div id='menuBox' style='display:none'>
    <form id='menuForm'>
    <table class='wst-form wst-box-top'>
       <tr>
          <th>菜单名称<font color='red'>*</font>：</th>
          <td>
              <input type="text" id="menuName" name="menuName" class="ipt" maxLength='20' />
          </td>
       </tr>
       <tr>
          <th>菜单Url<font color='red'>*</font>：</th>
          <td>
              <input type="text" id="menuUrl" name="menuUrl" class="ipt" maxLength='200' style='width:300px'/>
          </td>
       </tr>
       <tr>
          <th>附加资源：</th>
          <td>
              <textarea id="menuOtherUrl" name="menuOtherUrl" class="ipt" style='width:80%'></textarea>
          </td>
       </tr>
       <tr id="menuTypes">
          <th>菜单类型<font color='red'>*</font>：</th>
            <td>
        <select id="menuType" class="ipt">
          <option value="0">用户菜单</option>
          <option value="1">商家菜单</option>
        </select>
            </td>
        </tr>
       <tr>
          <th>菜单排序<font color='red'>*</font>：</th>
          <td>
              <input type="text" id="menuSort" name="menuSort" class="ipt" maxLength='20' />
          </td>
       </tr>
       <tr>
          <th>是否显示<font color='red'>  </font>：</th>
          <td>
            <lable>
              <input type="radio" name="isShow" value="1" id="isShow" class="ipt" data-target="#verifyCodeTips"/>显示
            </lable>
            <lable>
              <input type="radio" name="isShow" value="0" id="isShow" class="ipt" />隐藏
            </lable><span id="isShowTips"></span>
          </td>
       </tr>
    </table>
    </form>
</div>


<script src="__ADMIN__/js/wstgridtree.js?v=<?php echo $v; ?>" type="text/javascript"></script>
<script src="__ADMIN__/homemenus/homemenus.js?v=<?php echo $v; ?>" type="text/javascript"></script>

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