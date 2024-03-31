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
$queryMysql=$loadMysql->variable("SELECT help_title,help_content_link FROM skin_help_informations;");
$consultMysql=$loadMysql->choice(1);

$getCopiesMod = constant("website_copies_mod"); // 获取版权显示值，1为显示，0为隐藏
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? echo constant("website_name"); ?>&nbsp;-&nbsp;帮助</title>
    <link rel="stylesheet" href="skin_style/skin_frame.css">
    <link rel="stylesheet" href="skin_style/skin_roof.css">
    <link rel="stylesheet" href="skin_style/skin_middle.css">
    <link rel="stylesheet" href="skin_style/skin_feet.css">
    <link rel="stylesheet" href="skin_style/market/skin_notice.css">
    <link rel="stylesheet" href="skin_style/help/skin_help.css">
</head>
<body>
    <? include "skin_content/roof.php"; ?>

    <div class="help_middle">

        <div class="core_middle_notice">
            <img src="skin_images/smallpic/notice.png" alt="">
            <a href="javascript:void(0)" onclick="notice()">测试测试</a>
        </div>

        <div class="help_middle_core">
            <div class="help_middle_left">
                <div class="help_middle_left_entire">
                    <? foreach ($consultMysql as $consequence){ ?>
                    <div style="display: grid;height: 20px;margin-bottom: 10px;">
                        <div class="help_middle_left_bar"><a href="skin_help.php?help_content_point=<? echo $consequence['help_content_link']; ?>"><? echo $consequence['help_title'] ?></a></div>
                    </div>
                    <? } ?>
                </div>
            </div>
            <div></div><!--空白区域-->
            <div class="help_middle_right">
                <iframe src="<? echo ('' != $_GET['help_content_point']) ? 'skin_content/help_html/'.$_GET['help_content_point'].'.html' : 'skin_content/help_html/' ; ?>" frameborder="0" height="100%" width="100%"></iframe>
            </div>
        </div>

    </div>

    <? include "skin_content/feet.php"; ?>

    <? include "skin_content/notice.html"?>

</body>
<script src="https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js"></script>
<script src="skin_content/javascripts/roof.js"></script>
<script src="skin_content/javascripts/notice.js"></script>
</html>
