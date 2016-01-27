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
    public function _initialize(){
        date_default_timezone_set('Asia/Shanghai');
        $this->assign('category','customerCategory');
    }
    public function index(){
        $db=M("customer");
        $list=$db->limit(10)->select();
        $this->assign('customers',$list);
        $this->display('index');
    }
    public function edit(){
        $db = M("customer"); // 实例化对象
        $id=I('get.id');
        $data = $db->where("id=".$id)->select();//读取一条数据
        $this->assign('data',$data[0]);
//        dump($data[0]);
        $this->display('edit');
    }
    public function  addIndex(){
        $productType=M('producttype');
        $productTypeList=$productType->order('id desc')->select();
        $industry=M('industry');
        $industryList=$industry->order('id desc')->select();
        $addtag=M('tag');
        $addTagList=$addtag->where("belong='address'")->select();
        $add=M('address');
        $addList=$add->select();
        $this->assign('addtags',$addTagList);
        $this->assign('adds',$addList);
        $this->assign('industrys',$industryList);
        $this->assign('producttypes',$productTypeList);
//        dump($productTypeList);
        $this->display('add');
    }

    public function  add(){
        $data['customerName'] = $_POST['customerName'];
        $data['customerPhone'] = $_POST['customerPhone'];
        $data['customerAddress'] = $_POST['customerAddress'];
        $data['customerAddressDetail'] = $_POST['customerAddressDetail'];
        $data['customerProductType'] = $_POST['customerProductType'];
        $data['customerIndustry'] = $_POST['customerIndustry'];
        $data['creatTime']=date('Y-m-d H:i:s');
        $User = M('customer');
        $User->add($data);
        $this->success('增加成功','../Customer/index');
    }

    public function  del(){
        $id= $_GET['id'];
        $User = M('customer');
        $User->where('id='.$id)->delete();
        $this->success('删除成功','../Customer/index');
    }
}
