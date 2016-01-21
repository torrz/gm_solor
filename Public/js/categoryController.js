/**
 * Created by Torrz on 2016/1/21.
 */
$(document).ready(function () {
   var categoty= $(".sr-only").html();
    $("ul.ulCategory li").removeClass('active');
    switch (categoty){
        case "indexCategory":
            $("li.indexCategory").addClass('active');
            break;
        case "taskCategory":
            $("li.taskCategory").addClass('active');
            break;
        case "customerCategory":
            $("li.customerCategory").addClass('active');
            break;
        case "turnoverCategory":
            $("li.turnoverCategory").addClass('active');
            break;
        case "productCategory":
            $("li.productCategory").addClass('active');
            break;
        default:
            break;
    }
});