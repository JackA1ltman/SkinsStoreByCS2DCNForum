//个人资料简页显示，当鼠标悬停在ID部分时候自动显示
$(function () {
    $("#user_account_information").hide();
    $("#user_account").hover(
        function () {
            $("#user_account_information").show();
        }, function () {
            $("#user_account_information").hide();
        }
    )
    $("#user_account_information").hover(
        function () {
            $("#user_account_information").show();
        }, function () {
            $("#user_account_information").hide();
        }
    )
    //防止鼠标悬停离开ID但在小页时关闭
});
/*顶部栏选项*/
$(function () {
    var nowSite = window.location.pathname;
    if (nowSite.indexOf("skin_market.php") >=0 ) {
        $("#site_2").css("color","#fff");
    }
    if (nowSite.indexOf("skin_bag.php") >=0 ) {
        $("#site_3").css("color","#fff");
    }
    if (nowSite.indexOf("skin_help.php") >=0 ) {
        $("#site_4").css("color","#fff");
    }
    if (nowSite.indexOf("skin_lottery.php") >=0 ) {
        $("#site_5").css("color","#fff");
    }
    if (nowSite.indexOf("skin_exchange.php") >=0 ){
        $("#site_6").css("color","#fff");
    }
    if (nowSite.indexOf("index.php") >=0 ) {
        $("#site_1").css("color","#fff");
    }
});