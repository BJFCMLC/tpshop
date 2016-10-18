<?php
/**
 * Created by PhpStorm.
 * User: wangchao
 * Date: 2016/10/4
 * Time: 9:05
 */

namespace Back\Controller;
use Think\Controller;

class GoodsController extends Controller {
    //列表展示
    public function showList(){
        $goods = new \Model\GoodsModel();
        $info = $goods -> select();

        $this -> assign('info',$info);
        $this -> display();
    }
    //添加商品
    public function addGood(){
//        $goods = D('Goods'); //实例化父类  model对象
//        $goods = M('Goods'); //实例化父类  model对象
        $goods = new \Model\GoodsModel(); //实例化GoodsModel对象

        //两个逻辑:展示,收集
        if(IS_POST){ //收集表单
            $data = $goods -> create();
            //对富文本编辑器原生内容进行过滤，方式xss攻击
            //htmlpurifier过滤
            $data['goods_introduce'] = \fanXSS($_POST['goods_introduce']);

            if($goods -> add($data)){
                $this ->success('添加商品成功',U('showList'),2);
            }else{
                $this ->error('添加商品失败',U('addGood'),2);
            }
        }else{ //展示表单
            $this -> display();
        }
    }
    //修改商品
    public function modifyGood(){
        $this -> display();
    }

}
