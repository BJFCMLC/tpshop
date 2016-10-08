<?php
/**
 * Created by PhpStorm.
 * User: wangchao
 * Date: 2016/10/4
 * Time: 9:05
 */

namespace Back\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function head(){
        $this -> display();
    }
    public function left(){
        $this -> display();
    }
    public function right(){
        $this -> display();
    }
    public function index(){
        $this -> display();
    }
}
