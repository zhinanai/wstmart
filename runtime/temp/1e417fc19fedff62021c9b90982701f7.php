<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"C:\MyProgram\myWeb\wstmart_v2.0.6_180726/wstmart/admin\view\messages\list.html";i:1533199926;s:69:"C:\MyProgram\myWeb\wstmart_v2.0.6_180726/wstmart/admin\view\base.html";i:1533200036;}*/ ?>
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

<style>
body{overflow:hidden;}
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
<div id="wst-tabs" style="width:100%; height:100%;overflow: hidden; border: 1px solid #D3D3d3;" class="liger-tab">
   <div id="wst-tab-1" tabId="wst-tab-1"  title="发送消息" class='wst-tab'  style="height: 99%"> 
    <table class='wst-form wst-box-top'>
      <tr>
      <th width='150'>发送类型<font color='red'>*</font>：</th>
          <td style="text-align:left;">
            <label><input type="radio" name="sendType" id="sendType" value="users" class='ipt' onchange="sendToTheUser()" checked>会员</label>
            <label><input type="radio" name="sendType" id="sendType" value="shop" class='ipt'  onchange="sendToTheUser()">店铺</label>
            <label><input type="radio" name="sendType" id="theUser" value="theUser" class='ipt' onchange="sendToTheUser()">指定账号</label>
          </td>
       </tr>
       <tr id="user_query" style="display:none;">
          <th></th>
          <td>
            <input type='text' id='loginName' name="loginName" value=''  style="width:200px;" maxLength='20' placeholder="请输入要发送消息的账号"/>
            
          </td>
          <td><input type="button" class="btn btn-blue" value="查询" onclick="userQuery()"></td>
       </tr>
       <tr id="send_to" style="display:none;">
          <th>指定接收账号<font color='red'>*</font>：</th>
          <td width="200">
            <select ondblclick="WST.multSelect({left:'ltarget',right:'rtarget',vtarget:'rtarget',val:'htarget'})" size="12" id="ltarget" multiple="" style="width:200px;height:160px;">
             </select>
          </td>
         <td width="10">
         <input type='hidden' id='htarget' value='' class='ipt'/>
         <button onclick="javascript:WST.multSelect({left:'ltarget',right:'rtarget',vtarget:'rtarget',val:'htarget'})" class="btn btn-blue" type="button">&gt;&gt;</button>
         <br>
         <br>
         <button onclick="javascript:WST.multSelect({left:'rtarget',right:'ltarget',vtarget:'rtarget',val:'htarget'})" class="btn btn-blue" type="button">&lt;&lt;</button>
         </td>
         <td>
         <select ondblclick="WST.multSelect({left:'rtarget',right:'ltarget',vtarget:'rtarget',val:'htarget'})" size="12" id="rtarget" multiple="" style="width:200px;height:160px;">
        </select>
          </td>
       </tr>

       <tr>
          <th>消息内容<font color='red'>  </font>：</th>
          <td colspan="10">
            <textarea class='ipt' name="msgContent" id="msgContent" style="width:700px;height:150px;"></textarea>
          </td>
       </tr>
<?php if(WSTGrant('SCXX_01')): ?> 
  <tr>
     <td colspan='4' align='center'>
       <input type="button" value="发送" onclick="sendMsg()" class='btn btn-blue' />
       <input type="button" onclick="javascript:history.go(-1)" class='btn' value="返回" />
     </td>
  </tr>
<?php endif; ?>
 </table>

</div>

  <div title="消息列表" class='wst-tab-2'  style="height: 99%"> 

      <div id="query" style="float:left;">
        <p style="float:left;height:25px;line-height:25px;">消息类型:</p>
        <select style="float:left;" name="msgType" id="msgType" class="query">
          <option value="-1">全部</option>
          <option value="0">手工</option>
          <option value="1">系统</option>
        </select>
        系统内容:<input type="text" name="msgContent"  placeholder='系统内容' id="msgContent" class="query" />
        <input type="button" class="btn btn-blue" onclick="javascript:msgQuery()" value="查询">
      </div>
      <div style="clear:both"></div>
      <div id="maingrid"></div>
      
  </div>


</div>



<script src="__ADMIN__/messages/message.js?v=<?php echo $v; ?>" type="text/javascript"></script>
<script src="__STATIC__/plugins/kindeditor/kindeditor.js?v=<?php echo $v; ?>" type="text/javascript" ></script>

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