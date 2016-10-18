<?php
/**
 * Created by PhpStorm.
 * User: wangchao
 * Date: 2016/10/18
 * Time: 15:04
 */

//商品goodsmodel模型

namespace Model;
use Think\Model;

class GoodsModel extends Model{
    //自动完成设置add_time和upd_time
    protected $_auto = array(
        array('add_time','time',1,'function'),
        array('upd_time','time',3,'function'),
    );
}