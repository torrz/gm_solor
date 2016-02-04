/**
 * Created by Torrz on 2016/1/30.
 */
var app = angular.module('OrderAddApp', []);
app.controller('AddController', function ($scope, $http) {

    $scope.init= function () {
        $scope.order={
            CustomerNum:0,
            Type:"购买新机",
            WarrantyPeriod:"1年",
            AlreadyCollection:0,
            Num:1,
            CustomerAddress:"荷城街道",
            Industrys:"家庭使用",
        };
        }();
    $scope.search= function (phone) {
        $http.get("search?phone="+phone).success(function (response) {
            if(response!='null'){
            $scope.order.CustomerNum=parseInt(response.id);
            $scope.order.CustomerName=response.customername;
            $scope.order.CustomerAddress=response.customeraddress;
            $scope.order.CustomerAddressDetail=response.customeraddressdetail;
            $scope.order.Industrys=response.customerindustry;
                $scope.order.SearchResult="匹配客户信息";
            }
            else {
            $scope.order.SearchResult="没有找到相关信息";
            }
        });
    };
    $scope.TypeTagChose=function(belong,value){
        switch (belong){
            case "address":
                $scope.order.CustomerAddressDetail=value;
                break;
            case "productType":
                $scope.order.ProductType=value;
                break;
            default:
                alert("赋值出错！请手动输入");
                break;
        }
    }
});
