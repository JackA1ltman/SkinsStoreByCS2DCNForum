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

$getCopiesMod = constant("website_copies_mod"); // 获取版权显示值，1为显示，0为隐藏
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? echo constant("website_name"); ?>&nbsp;-&nbsp;背包</title>
    <link rel="stylesheet" href="skin_style/skin_frame.css">
    <link rel="stylesheet" href="skin_style/skin_roof.css">
    <link rel="stylesheet" href="skin_style/skin_middle.css">
    <link rel="stylesheet" href="skin_style/skin_feet.css">
    <link rel="stylesheet" href="skin_style/market/skin_market.css">
    <link rel="stylesheet" href="skin_style/market/skin_notice.css">
    <link rel="stylesheet" href="skin_style/bag/skin_bag.css">
</head>
<body>
    <? include "skin_content/roof.php"; ?>

    <div class="bag_middle">

        <div class="core_middle_notice">
            <img src="skin_images/smallpic/notice.png" alt="">
            <a href="javascript:void(0)" onclick="notice()">测试测试</a>
        </div>

        <div class="core_middle_ads">
            <img style="display: none;" src="" alt="">
            <div style="color: white;">广告位招商，联系：CS2D中文站站长</div>
        </div>

        <div></div><!--设置空白-->

        <div class="bag_middle_title">
            <p style="margin-left: 50px;">皮肤</p>
            <p>订单</p>
            <p>回收价格</p>
            <p>操作</p>
        </div>

        <div class="bag_middle_list">
            <? for ($i=1;$i<16;$i++){ ?>
            <div class="bag_middle_list_core">
                <div style="display: grid;align-content: center;justify-content: center;">
                    <img src="skin_images/weapon/30001_tiny.png" alt="">
                </div>
                <div class="bag_middle_list_name">
                    <a href="#" style="display: grid;align-content: flex-end;">渐变之色</a>
                    <div style="display: grid;align-content: flex-start;">AK47&nbsp;皮肤</div>
                </div>
                <div class="bag_middle_list_order">
                    <div style="display: grid;align-content: flex-end;">购买时间：2020/4/28下午7:03:30&nbsp;<b style="color: red;">一周交易受限</b></div>
                    <div style="display: grid;align-content: flex-start;">&nbsp;订&nbsp;单&nbsp;号：2020042882315</div>
                </div>
                <div class="bag_middle_list_power">
                    <img style="width: 19px;height: 25px;" src="skin_images/smallpic/power.png" alt="">
                    <div style="display: grid;align-content: center;font-size: 16px;">20</div>
                </div>
                <div class="bag_middle_list_button">
                    <div style="display: grid;align-content: flex-end;">
                        <button class="bag_middle_list_button_style" style="background-color: #4773C8;color: white;">出售</button>
                    </div>
                    <div style="display: grid;align-content: flex-start;">
                        <button class="bag_middle_list_button_style" style="background-color: #773535;color: white;">赠送</button>
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
