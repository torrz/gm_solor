<?php
/**
 * Created by PhpStorm.
 * User: Torrz
 * Date: 2016/1/26
 * Time: 20:46
 */
namespace Home\Model;
use Think\Model\RelationModel;
class TurnoverModel extends RelationModel {
    protected $_link = array(
        'Customer'=>array(
            'mapping_type'=> self::HAS_ONE,
            'mapping_name'=>'class',
            'foreign_key'=>'id',
            'as_fields' => 'customername,customeraddress,customerphone,customeraddressdetail',
            ),
        );
}