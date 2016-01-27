<?php
/**
 * Created by PhpStorm.
 * User: Torrz
 * Date: 2016/1/24
 * Time: 13:43
 */
namespace Home\Controller;
use Think\Controller;
class SettingController extends Controller {
    public function _initialize(){
        date_default_timezone_set('Asia/Shanghai');
        $this->assign('category','settingCategory');
    }
    public function index(){
        $this->display('index');
    }

}