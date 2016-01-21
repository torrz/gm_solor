<?php
/**
 * Created by PhpStorm.
 * User: Torrz
 * Date: 2016/1/20
 * Time: 22:40
 */
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    Public function _initialize(){
        $this->assign('category','productCategory');
    }
    public function index(){
        $this->display('index');
    }
}