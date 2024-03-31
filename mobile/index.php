<?php
function classLoad($className)
{
    $fileLoad = '../skin_include/class/'.$className.'.class.php';
    if (is_file($fileLoad)) {
        require_once ($fileLoad);
    }
}
spl_autoload_register('classLoad');
/*加载PHP自定义类*/

include "../skin_content/skin_config.php";//读取预设配置（不涉及安全设置）
include "../skin_content/skin_safe_config.php";//读取预设安全设置

$loadMysql=new mysql();//加载预设类 - MySQL预设类

$getCopiesMod = constant("website_copies_mod"); // 获取版权显示值，1为显示，0为隐藏
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? echo constant("website_name"); ?></title>
    <link rel="stylesheet" href="mb_style/mb_roof.css">
    <link rel="stylesheet" href="mb_style/index/mb_index.css">
</head>
<body>
    <div>

        <div class="mb_content">
            <? include_once "mb_content/mb_index.php" ?>
        </div>

        <div class="mb_roof">
            <a href="#"><div>首页</div></a>
            <a href="#"><div>市场</div></a>
            <a href="#"><div>开箱</div></a>
            <a href="#"><div>我</div></a>
        </div>

    </div>
</body>
</html>
