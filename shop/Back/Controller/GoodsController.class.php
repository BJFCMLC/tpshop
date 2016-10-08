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
        //数据库是否可以使用
        $goods = D('Goods');
        dump($goods);
//        $this -> display();
    }
    //添加商品
    public function addGood(){
        $this -> display();
    }
    //修改商品
    public function modifyGood(){
        $this -> display();
    }

}
