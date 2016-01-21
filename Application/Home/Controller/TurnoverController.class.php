<?php
/**
 * Created by PhpStorm.
 * User: Torrz
 * Date: 2016/1/20
 * Time: 22:36
 */
namespace Home\Controller;
use Think\Controller;
class TurnoverController extends Controller {
    Public function _initialize(){
        $this->assign('category','turnoverCategory');
    }
    public function index(){
        $this->display('index');
    }
}