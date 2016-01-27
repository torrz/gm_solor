/**
 * Created by Torrz on 2016/1/24.
 */

$(document).ready(function () {
   $("div.tagInput span").click(function () {
       var target=$(this).parent('div.tagInput').data('target');
       var tag=$(this).html();
       $("#"+target).val(tag);
   });
});