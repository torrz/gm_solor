<?php
/**
 * Created by PhpStorm.
 * User: hemecity-W
 * Date: 2016/1/19
 * Time: 17:21
 */
namespace Home\Controller;
use Think\Controller;
class CustomerController extends Controller {
    Public function _initialize(){
        $this->assign('category','customerCategory');
    }
    public function index(){
        $this->display('index');
    }
    public function edit(){
        $this->display('edit');
    }
    public function  add(){
        $this->display('add');
    }
}
