<?php
function classLoad($className)
{
    $fileLoad = 'skin_include/class/'.$className.'.class.php';
    if (is_file($fileLoad)) {
        require_once ($fileLoad);
    }
}
spl_autoload_register('classLoad');
/*加载PHP自定义类*/

$loadMysql=new mysql();//加载预设类 - MySQL预设类

include "skin_content/skin_config.php";//读取预设配置（不涉及安全设置）
include "skin_content/skin_safe_config.php";//读取预设安全设置

$pageNum=(int)$_GET['page'];

$pageUp=0;//Limit基础数值，前部分数值为0
$pageChangeUp=$pageUp + 25 * $pageNum - 25;//叠加数值，前部分值
$pageDown=25;//Limit基础数值，后部分数值为0
$pageChangeDown=$pageDown + 25 * $pageNum - 25;//叠加数值，后部分值
/*Limit变量*/

$connectMysql=$loadMysql->connect(constant("SQL_SERVER_ADDRESS").':'.constant("SQL_SERVER_PORT"),constant("SQL_SERVER_USERNAME"),constant("SQL_SERVER_PASSWORD"),constant("SQL_SERVER_DATABASE"));
$queryMysql=$loadMysql->variable("SELECT item_name,item_type,wp_inf.item_order_id,item_price,image_big_link FROM skin_weapons_informations wp_inf INNER JOIN skin_weapons_images wp_img ON wp_inf.item_order_id = wp_img.item_order_id limit $pageChangeUp,$pageChangeDown");
$consultMysql=$loadMysql->choice(1);
$queryMysql_page=$loadMysql->variable("SELECT count(item_order_id) FROM skin_weapons_informations");
$consultMysql_page=$loadMysql->choice(2);
/*
 * connectMysql代表连接数据库，其使用了MySQL预设类
 * queryMysql代表执行SQL语句
 * consultMysql代表执行结果展示的方式，1为全体，2为只有一条
 * _page代表分页计算*/

$pageIndex="skin_market.php?page=";
$pageIndexReal=$pageIndex.$pageNum;
$pageIndexRealUp=$pageIndex.($pageNum + 1);
$pageIndexRealDown=$pageIndex.($pageNum - 1);
/*基础变量*/

$totalPage=ceil($consultMysql_page['count(item_order_id)'] / 25);//全部页数
$lastPage=$pageIndex.$totalPage;
/*计算变量*/

$getCopiesMod = constant("website_copies_mod"); // 获取版权显示值，1为显示，0为隐藏
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? echo constant("website_name"); ?>&nbsp;-&nbsp;市场</title>
    <link rel="stylesheet" href="skin_style/skin_frame.css">
    <link rel="stylesheet" href="skin_style/skin_roof.css">
    <link rel="stylesheet" href="skin_style/skin_middle.css">
    <link rel="stylesheet" href="skin_style/skin_feet.css">
    <link rel="stylesheet" href="skin_style/market/skin_market.css">
    <link rel="stylesheet" href="skin_style/market/skin_notice.css">
</head>
<body>

    <? include "skin_content/roof.php"; ?>

    <div class="market_middle">

        <div class="core_middle_notice">
            <img src="skin_images/smallpic/notice.png" alt="">
            <a href="javascript:void(0)" onclick="notice()">测试测试</a>
        </div>

        <div class="core_middle_ads">
            <img style="display: none;" src="" alt="">
            <div style="color: white;">广告位招商，联系：CS2D中文站站长</div>
        </div>

        <div></div><!--设置空白-->

        <div class="market_middle_option" style="background: transparent;">
            <!--<div class="market_middle_option_button">
                <button class="market_middle_option_menu">手枪</button>
                <div class="market_middle_option_entire">
                    <a href="#">USP</a>
                    <a href="#">Glock</a>
                    <a href="#">P250</a>
                    <a href="#"></a>
                </div>
            </div>-->
        </div>

        <div></div><!--设置空白-->

        <div class="market_middle_title">
            <div class="market_middle_title_button" id="title_1"><a href="">出售</a></div>
        </div>

        <div class="market_middle_basketry">

            <? foreach ($consultMysql as $consequence){ ?>
                <div style="/*border: 1px solid gold*/">
                    <div class="market_middle_basketry_item">
                        <div class="market_middle_basketry_item_pic" style="background: radial-gradient(#ffffff 10%, #4b69ff 45%, #101822 95%)"><img src="skin_images/weapon/<? echo $consequence['image_big_link']?>" alt="" style="width: 150px;"></div>
                        <div style="display: grid;grid-template-rows: repeat(2,50%);background-color: white;">
                            <div class="market_middle_basketry_item_inf">
                                <div class="market_middle_basketry_item_inf_name"><a href="skin_goods.php?cater_block_number=<? echo $consequence['item_order_id'] ?>"><p><? echo $consequence['item_type']; ?>&nbsp;|&nbsp;<? echo $consequence['item_name'] ?></p></a></div>
                                <div class="market_middle_basketry_item_inf_price">
                                    <img src="skin_images/smallpic/power.png" alt="">
                                    <p><strong><? echo $consequence['item_price']?></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>

        </div>

        <? include "skin_include/n_or_p.php"; ?>

    </div>

    <? include "skin_content/feet.php"; ?>

    <? include "skin_content/notice.html"?>

</body>
<script src="https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js"></script>
<script src="skin_content/javascripts/roof.js"></script>
<script src="skin_content/javascripts/notice.js"></script>
<script src="skin_content/javascripts/title.js"></script>
</html>
