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
        $nowInfo = $goods ->fetchData();

        $info = $nowInfo['pageinfo'];
        $pagelist = $nowInfo['pagelist'];
        $this -> assign('info',$info);
        $this -> assign('pagelist',$pagelist);
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

        $goods = new \Model\GoodsModel();
        //展示和收集在一个方法
        if(IS_POST){
            $data = $goods -> create();
            if($goods -> save($data)){
                $this -> success('修改商品成功', U('showlist'), 2);
            }else{
                $this -> error('修改商品失败', U('upd',array('goods_id'=>$data['goods_id'])), 2);
            }
        }else{
            $goods_id = I('get.goods_id'); //接收被修改商品的goods_id
            $info = $goods->find($goods_id);//查询被修改商品的信息

            /*************获得相册信息*************/
            $picsinfo = D('GoodsPics')->where(array('goods_id'=>$goods_id))->select();
            if(!empty($picsinfo))
                $this -> assign('picsinfo',$picsinfo);
            /*************获得相册信息*************/


            $this -> assign('info',$info);
            $this -> display();
        }

    }

    //删除单个相册图片
    function delPics(){
        $pics_id = I('get.pics_id');
        //查询图片
        $info = D('GoodsPics')->find($pics_id);
        //①删除相册图片[物理删除]
        unlink($info['pics_big']);
        unlink($info['pics_small']);

        //②删除数据记录信息
        $z = D('GoodsPics')->delete($pics_id); //返回删除记录条数,1条
        if($z){
            echo "删除成功！";
        }
    }

}
