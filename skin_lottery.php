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

include "skin_content/skin_config.php";//读取预设配置（不涉及安全设置）
include "skin_content/skin_safe_config.php";//读取预设安全设置

$loadMysql=new mysql();//加载预设类 - MySQL预设类

$connectMysql=$loadMysql->connect(constant("SQL_SERVER_ADDRESS").':'.constant("SQL_SERVER_PORT"),constant("SQL_SERVER_USERNAME"),constant("SQL_SERVER_PASSWORD"),constant("SQL_SERVER_DATABASE"));
$queryMysql=$loadMysql->variable("SELECT box_name,box_inf.box_order_id,box_price,box_hot,image_preview_link FROM skin_boxes_informations box_inf INNER JOIN skin_boxes_images box_img ON box_inf.box_order_id = box_img.box_order_id");
$consultMysql=$loadMysql->choice(1);
/*
 * connectMysql代表连接数据库，其使用了MySQL预设类
 * queryMysql代表执行SQL语句
 * consultMysql代表执行结果展示的方式，1为全体，2为只有一条*/

$getCopiesMod = constant("website_copies_mod"); // 获取版权显示值，1为显示，0为隐藏
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? echo constant("website_name"); ?>&nbsp;-&nbsp;开箱</title>
    <link rel="stylesheet" href="skin_style/skin_frame.css">
    <link rel="stylesheet" href="skin_style/skin_roof.css">
    <link rel="stylesheet" href="skin_style/skin_middle.css">
    <link rel="stylesheet" href="skin_style/skin_feet.css">
    <link rel="stylesheet" href="skin_style/market/skin_notice.css">
    <link rel="stylesheet" href="skin_style/lottery/skin_lottery.css">
</head>
<body>
    <? include "skin_content/roof.php"; ?>

    <div class="lottery_middle">

        <div class="core_middle_notice">
            <img src="skin_images/smallpic/notice.png" alt="">
            <a href="javascript:void(0)" onclick="notice()">测试测试</a>
        </div>

        <div class="core_middle_ads">
            <img style="display: none;" src="" alt="">
            <div style="color: white;">广告位招商，联系：CS2D中文站站长</div>
        </div>

        <div class="lottery_middle_hot">
            <div class="lottery_middle_hot_inf" style="background: linear-gradient(#E30032,#72001D);"><p>火力全开</p></div>
        </div>
        <div class="lottery_middle_market">

            <? foreach ($consultMysql as $consequence){ ?>
                <div style="/*border: 1px solid gold*/">
                    <div class="lottery_middle_market_item">
                        <div class="lottery_middle_market_item_pic" style="background: radial-gradient(#ffffff 10%, #4b69ff 45%, #101822 95%)"><img src="skin_images/box/<? echo $consequence['image_preview_link'] ?>" alt="" style="width: 200px;"></div>
                        <div style="display: grid;grid-template-rows: repeat(2,50%);background-color: white;">
                            <div class="lottery_middle_market_item_inf">
                                <div class="lottery_middle_market_item_inf_name"><a href="skin_openbox.php"><p><? echo $consequence['box_name'] ?></p></a></div>
                                <div class="lottery_middle_market_item_inf_price">
                                    <img src="skin_images/smallpic/power.png" alt="">
                                    <p><strong><? echo $consequence['box_price'] ?></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>

        </div>

        <div class="lottery_middle_hot">
            <div class="lottery_middle_hot_inf"><p>太常规了</p></div>
        </div>
        <div class="lottery_middle_market">
            <? foreach ($consultMysql as $consequence){ ?>
                <div style="/*border: 1px solid gold*/">
                    <div class="lottery_middle_market_item">
                        <div class="lottery_middle_market_item_pic" style="background: radial-gradient(#ffffff 10%, #4b69ff 45%, #101822 95%)"><img src="skin_images/box/<? echo $consequence['image_preview_link'] ?>" alt="" style="width: 200px;"></div>
                        <div style="display: grid;grid-template-rows: repeat(2,50%);background-color: white;">
                            <div class="lottery_middle_market_item_inf">
                                <div class="lottery_middle_market_item_inf_name"><a href="skin_openbox.php"><p><? echo $consequence['box_name'] ?></p></a></div>
                                <div class="lottery_middle_market_item_inf_price">
                                    <img src="skin_images/smallpic/power.png" alt="">
                                    <p><strong><? echo $consequence['box_price'] ?></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>

    </div>

    <? include "skin_content/feet.php"; ?>

    <? include "skin_content/notice.html"?>

</body>
<script src="https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js"></script>
<script src="skin_content/javascripts/roof.js"></script>
<script src="skin_content/javascripts/notice.js"></script>
</html>
