<?php
namespace wstmart\admin\controller;
use wstmart\admin\model\SpecCats as M;
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
 * 规格类别控制器
 */
class Speccats extends Base{

    public function index(){
    	return $this->fetch("list");
    }

    /**
     * 获取分页
     */
    public function pageQuery(){
        $m = new M();
        return $m->pageQuery();
    }

    /**
     * 跳去编辑页面
     */
    public function toEdit(){
        //获取该记录信息
        $this->assign('data', $this->get());
        return $this->fetch("edit");
    }
    /**
     * 获取数据
     */
    public function get(){
        $m = new M();
        return $m->getById(input("catId/d"));
    }
    /**
     * 新增
     */
    public function add(){
        $m = new M();
        return $m->add();
    }
    /**
    * 修改
    */
    public function edit(){
        $m = new M();
        return $m->edit();
    }
    /**
     * 删除
     */
    public function del(){
        $m = new M();
        return $m->del();
    }
    /**
    * 显示隐藏
    */
    public function setToggle(){
        $m = new M();
        return $m->setToggle();
    }

    public function checkCatName(){
    	$m = new M();
    	$rs = $m->checkCatName();
   	 	if($rs["status"]==1){
			return array("ok"=>"");
		}else{
			return array("error"=>$rs["msg"]);
		}
    }
    
}
