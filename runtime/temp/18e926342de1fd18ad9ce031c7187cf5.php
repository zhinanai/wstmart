<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\MyProgram\myWeb\wstmart_v2.0.6_180726/wstmart/admin\view\menus\list.html";i:1533200040;s:69:"C:\MyProgram\myWeb\wstmart_v2.0.6_180726/wstmart/admin\view\base.html";i:1533200036;}*/ ?>
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

<link href="__ADMIN__/js/ztree/css/zTreeStyle/zTreeStyle.css?v=<?php echo $v; ?>" rel="stylesheet" type="text/css" />
<style>
body{padding:5px;}
</style> 

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
<div id="layout">
    <div  position="left" title="菜单管理" showClose='true' style='overflow:auto'>
        <ul id="menuTree" class="ztree"></ul>
    </div>
    <div position="center" title="权限管理">
      <?php if(WSTGrant('QXGL_01')): ?>
      <div class="wst-toolbar" style='display:none'>
          <button class="btn btn-green f-right" onclick='javascript:toEdit(0)'>新增</button>
          <div style='clear:both'></div>
      </div>
      <?php endif; ?>
      <div id="maingrid"  style='display:none'></div>
    </div>
</div>
<div id='menuBox' style='display:none'>
<form id='menuForm'>
  <input type='hidden' id='parentId' class='ipt2' maxLength='20'/>
  <table class='wst-form wst-box-top'>
     <tr>
        <th width='100'>菜单名称<font color='red'>*</font>：</th>
        <td><input type='text' id='menuName' class='ipt2' maxLength='20' data-rule="菜单名称: required;"/></td>
     </tr>
     <tr>
        <th width='100'>菜单排序<font color='red'>*</font>：</th>
        <td><input type='text' id='menuSort' class='ipt2' maxLength='5'/></td>
     </tr>
  </table>
</form>
</div>
<div id='privilegeBox' style='display:none'>
  <form id='privilegeForm' autocomplete='off'>
  <table class='wst-form wst-box-top'>
     <tr>
        <th width='100'>权限名称<font color='red'>*</font>：</th>
        <td><input type='text' id='privilegeName' class='ipt' maxLength='20' data-rule="权限名称: required;"/></td>
     </tr>
     <tr>
        <th>权限代码<font color='red'>*</font>：</th>
        <td><input type='text' id='privilegeCode' class='ipt' maxLength='30' onblur='javascript:checkPrivilegeCode(this)' data-rule="权限代码: required;"/></td>
     </tr>
     <tr>
        <th>是否菜单权限<font color='red'>*</font>：</th>
        <td height='24'>
           <label>
              <input type="radio" id="isMenuPrivilege1" name="isMenuPrivilege" class="ipt" value="1">是
           </label>
           <label>
              <input type="radio" id="isMenuPrivilege1" name="isMenuPrivilege" class="ipt" value="0" checked>否
           </label>
        </td>
     </tr>
     <tr>
        <th>权限资源：</th>
        <td><input type='text' id='privilegeUrl' class='ipt' maxLength='100' style='width:90%'/></td>
     </tr>
     <tr>
        <th>关联资源：<br/>(以,号分隔)&nbsp;&nbsp;&nbsp;</th>
        <td>
        <textarea id='otherPrivilegeUrl' class='ipt' maxLength='100' style='width:90%;height:60px;'></textarea>
        </td>
     </tr>
     
  </table>
  </form>
</div>


<script src="__ADMIN__/js/ztree/jquery.ztree.all-3.5.js?v=<?php echo $v; ?>"></script>
<script src="__ADMIN__/menus/menu.js?v=<?php echo $v; ?>" type="text/javascript"></script>

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