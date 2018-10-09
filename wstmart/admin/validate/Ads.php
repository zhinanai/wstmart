<?php 
namespace wstmart\admin\validate;
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
 * 广告验证器
 */
class Ads extends Validate{
	protected $rule = [
        ['adName'  ,'require|max:30','请输入广告标题|广告标题不能超过10个字符'],
        ['adFile'   ,'require','请上传广告图片'],
        ['adStartDate' , 'require', '请输入广告开始时间' ],
        ['adEndDate'   , 'require|lt:adStartDate|checkDate:1', '请输入广告结束时间|广告结束时间必须大于开始时间'],
    ];

    protected $scene = [
        'add'   =>  ['adName','adURL','adStartDate','adEndDate'],
        'edit'  =>  ['adName','adURL','adStartDate','adEndDate'],
    ]; 

    // 自定义验证规则
    /*
    * $value:该字段的值
    * $rule:自定义规则:后面的值
    * $data:所有数据
    */
    protected function checkDate($value,$rule,$data)
    {
         try{
            // 使用DateTime是防止当用户设置超过2038年时,strtotime()函数无法正确返回时间戳
            $endTime = new \DateTime($value);
            $startTime = new \DateTime($data['adStartDate']);
            $end = $endTime->format('U');
            $start = $startTime->format('U');
            return ($end > $start)? true : '广告开始时间不能大于结束时间';
        }catch(\Execption $e){
            return '广告开始时间不能大于结束时间~';            
        }
    }
}