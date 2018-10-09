<?php 
namespace wstmart\common\validate;
use think\Validate;
/**
 * ============================================================================
 * WSTMart多用户商城
 * 版权所有 2016-2066 广州商淘信息科技有限公司，并保留所有权利。
 * 官网地址:http://www.wstmart.net
 * 交流社区:http://bbs.shangtao.net
 * 联系QQ:153289970
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！未经本公司授权您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * 提现账号验证器
 */
class CashConfigs extends Validate{
	protected $rule = [
        ['accTargetId'  ,'require','请选择开卡银行'],
        ['accAreaId'  ,'require','请选择开卡地区'],
        ['accNo'  ,'require','请输入银行卡号'],
        ['accUser'  ,'require','请输入持卡人']
    ];

    protected $scene = [
        'add'   =>  ['accTargetId','accNo','accUser'],
        'edit'  =>  ['accTargetId','accNo','accUser']
    ]; 
}