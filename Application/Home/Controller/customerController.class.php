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
    public function index(){
        $this->display('customerShow');
    }
    public function add(){
        echo 'hello,thinkphp!';
    }
}