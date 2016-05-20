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
    public function _initialize(){
        $value = session('user');
        if(session('?user')){
        }
        else{
            $this->error("请先登录",__ROOT__,1);
        }
        $this->assign('category','turnoverCategory');
    }
    public function index(){
        $Turnover=D('Turnover');
        $list=$Turnover->relation('class')->order('id desc')->select();
        $this->assign('turnovers',$list);
        $this->display('index');
    }
    public function addIndex(){
        $industry=M('industry');
        $industryList=$industry->order('id desc')->select();
        $tags=M('tag');
        $addTagList=$tags->where("belong='address'")->select();
        $productTypeTagList=$tags->where("belong='productType'")->select();
        $this->assign('oddNum',date("YmdHis"));
        $add=M('address');
        $addList=$add->select();
        $this->assign('addtags',$addTagList);
        $this->assign('adds',$addList);
        $this->assign('industrys',$industryList);
        $this->assign('producttypes',$productTypeTagList);

        $db=M("customer");
        $list=$db->limit(10)->select();
        $this->assign('customers',$list);
        $this->display('add');
    }

    public function curd(){
        function warrantyPeriodConvert($value){
            switch($value) {
                case "1年":
                    return 12;
                case "3年":
                    return 36;
                case "1个月":
                    return 1;
                case "3个月":
                    return 3;
                default:
                    return 12;
            }
        }
        $action=I('get.action');

        $orderData['customerNum']=$customerNum=I('post.customerNum');//客户id
        $customerData['customerName']=I('post.customerName');//客户姓名
        $customerData['customerProductType']=I('post.productType');//拥有机型
        $customerData['customerPhone']=I('post.customerPhone');//客户电话
        $customerData['customerAddress']=I('post.customerAddress');//客户地址
        $customerData['customerAddressDetail']=I('post.customerAddressDetail');//客户详细地址
        $customerData['customerIndustry']=I('post.customerIndustry');//客户行业
        $customerData['creatTime']=date('Y-m-d H:i:s');
        $orderData['oddNum']=I('oddNum');//交易单号
        $orderData['transactionType']=I('post.transactionType');//购买类型
        $orderData['productType']=I('post.productType');//购买机型
        $orderData['transactionNum']=I('post.transactionNum');//购买数量
        $orderData['total']=I('post.total');//应付款
        $orderData['alreadyCollection']=I('post.alreadyCollection');//已付款
        $orderData['warrantyPeriod']=warrantyPeriodConvert(I('post.warrantyPeriod'));//保修期
        $orderData['status_code']="danger";
        $orderData['remark']=I('post.remark');//备注
        switch($action){
            case "add":
                if($orderData['customerNum']==0){
                    $User = M('customer');
                    $User->add($customerData);
                    $customer=$User->where('customerPhone='.$customerData['customerPhone'])->select();
                    $orderData['customerNum']=$customer[0]['id'];
                }if($orderData['customerNum']<0){
                    $this->error("添加失败");
                    break;
                }
                $orderData['period']=date("Y-m-d H:i:s", strtotime("+".$orderData['warrantyPeriod']." months"));//保修期限
                $orderData['creatTime']=$customerData['creatTime']=date('Y-m-d H:i:s');
                $Order=M('turnover');
                $Order->add($orderData);
                $this->success('增加成功','../Turnover/index');
                break;
            case "edit":
                $creatTime=I('creatTime');
                $orderData['period']=date("Y-m-d H:i:s", strtotime("+".$orderData['warrantyPeriod']." months" ,strtotime($creatTime)));//修改保修期限
//                echo date($orderData['period'])."".$orderData['warrantyPeriod'];
                //先update客户信息
                $User = M('customer');
                $User->where('id='.$orderData['customerNum'])->save($customerData);
                $Order=M('turnover');
                $Order->where('oddNum='.$orderData['oddNum'])->save($orderData);
                $this->success('修改成功','../Turnover/index');
                break;
            case "del":
                $Order=M('turnover');
                $Order->where('oddNum='.$orderData['oddNum'])->delete();
                $this->success('删除成功','../Turnover/index');
                break;
            default:
                echo "出错";
                break;
        }
    }
    public function search(){
        $phone=I('get.phone');
        $customer=M('customer');
        $result=$customer->where("customerPhone=".$phone)->find();
        echo json_encode($result);
    }

    public function edit(){
        $add=M('address');
        $addList=$add->select();
        $oddNum=I('get.oddNum');
        $turnover=D('Turnover');
        $result=$turnover->relation('class')->where("oddNum=".$oddNum)->find();
        $this->assign("adds",$addList);
        $this->assign('result',$result);
//        dump($result);
        $this->display("edit");
    }
}