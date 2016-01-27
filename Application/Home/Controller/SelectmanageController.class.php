<?php
/**
 * Created by PhpStorm.
 * User: Torrz
 * Date: 2016/1/24
 * Time: 13:30
 */
namespace Home\Controller;
use Think\Controller;
class SelectmanageController extends Controller {
    public function _initialize(){
    }

    public function add(){
        $action=I('post.action');
        $option=I('post.option');
        switch ($action){
            case "producttype":
                $producttype = M("producttype");// 实例化User对象
                $data['productType'] = 'productType';
                $producttype->add($data);
                break;
            case "industry":

                break;
            default:
                break;
        }
    }
}