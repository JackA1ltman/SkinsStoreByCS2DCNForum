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
    <title><? echo constant("website_name"); ?>&nbsp;-&nbsp;兑换</title>
    <link rel="stylesheet" href="skin_style/skin_frame.css">
    <link rel="stylesheet" href="skin_style/skin_roof.css">
    <link rel="stylesheet" href="skin_style/skin_middle.css">
    <link rel="stylesheet" href="skin_style/skin_feet.css">
    <link rel="stylesheet" href="skin_style/market/skin_notice.css">
    <style>
        body{
            display: grid;
            grid-template-rows: 90px 700px;
        }
        .exchange_middle{
            display: grid;
            grid-template-rows: 30px 100px 10px 400px;
        }
        .exchange_middle_core{
            display: grid;
            justify-content: center;
            align-content: center;
        }
    </style>
</head>
<body>
    <? include "skin_content/roof.php"; ?>
    <div class="exchange_middle">

        <div class="core_middle_notice">
            <img src="skin_images/smallpic/notice.png" alt="">
            <a href="javascript:void(0)" onclick="notice()">测试测试</a>
        </div>

        <div class="core_middle_ads">
            <img style="display: none;" src="" alt="">
            <div style="color: white;">广告位招商，联系：CS2D中文站站长</div>
        </div>

        <div></div><!--设置空白-->

        <div class="exchange_middle_core">
            <div style="text-align: center;">激活码兑换</div>
            <div><input type="text">-<input type="text">-<input type="text">-<input type="text"></div>
            <button>提交</button>
        </div>

    </div>
    <? include "skin_content/feet.php"; ?>

    <? include "skin_content/notice.html"?>

</body>
<script src="https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js"></script>
<script src="skin_content/javascripts/roof.js"></script>
<script src="skin_content/javascripts/notice.js"></script>
</html>
