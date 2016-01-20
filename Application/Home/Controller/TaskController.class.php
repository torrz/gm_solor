<?php
/**
 * Created by PhpStorm.
 * User: Torrz
 * Date: 2016/1/20
 * Time: 22:30
 */
namespace Home\Controller;
use Think\Controller;
class TaskController extends Controller {
    public function index(){
        $this->display('index');
    }
}