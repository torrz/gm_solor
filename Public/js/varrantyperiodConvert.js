/**
 * Created by Torrz on 2016/1/26.
 */
$(document).ready(function () {
    var Convertedperiod;
    $('.warrantyperiod').click(function () {
        var period=$(this).data("period");
        if(period%12==0){
            Convertedperiod=period/12+"年";
        }else{
            Convertedperiod=period+"个月";
        }
        $(this).html(Convertedperiod);
    });
    $(".warrantyperiod").trigger("click");

});