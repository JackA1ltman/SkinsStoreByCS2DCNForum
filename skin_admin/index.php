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

$loadMysql=new mysql();//加载预设类 - MySQL预设类

include "../skin_content/skin_config.php";//读取预设配置（不涉及安全设置）
include "../skin_content/skin_safe_config.php";//读取预设安全设置
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? echo constant("website_name"); ?>&nbsp;-&nbsp;后台管理</title>
    <link rel="stylesheet" href="admin_style/admin_frame.css">
</head>
<body>
    <div class="admin_core">

        <div class="admin_title">
            <div style="display: grid;justify-content: center;align-content: center;">
                <img style="width: 45px;" src="../../Testproject/logo1.png">
            </div>
            <div style="display: grid;align-content: center;">
                <span style="color: white;">皮肤站程序后台管理中心</span>
            </div>
        </div>

        <div class="admin_middle">

            <div class="admin_middle_menu">
                <ul>
                    <span>==皮肤管理</span>
                    <li><a href="#">皮肤列表</a></li>
                    <li><a href="#">皮肤添加</a></li>
                    <li><a href="#">皮肤审核</a></li>
                </ul>
                <hr>
                <ul>
                    <span>==箱子管理</span>
                    <li><a href="#">箱子列表</a></li>
                    <li><a href="#">箱子添加</a></li>
                    <li><a href="#">开箱活动设定</a></li>
                </ul>
                <hr>
                <ul>
                    <span>==人员管理</span>
                    <ul>
                        <span>-管理员</span>
                        <li><a href="#">管理员列表</a></li>
                        <li><a href="#">添加管理员</a></li>
                    </ul>
                    <ul>
                        <span>-普通玩家</span>
                        <li><a href="#">玩家列表</a></li>
                        <li><a href="#">添加玩家</a></li>
                    </ul>
                </ul>
                <hr>
                <ul>
                    <span>==公告管理</span>
                    <li><a href="#">公告修改</a></li>
                </ul>
                <hr>
                <ul>
                    <span>==Key管理</span>
                    <li><a href="#">Key列表</a></li>
                    <li><a href="#">添加Key</a></li>
                </ul>
                <hr>
                <ul>
                    <span>==帮助管理</span>
                    <li><a href="#">帮助列表</a></li>
                    <li><a href="#">添加帮助</a></li>
                </ul>
                <hr>
                <ul>
                    <span>==网站设置</span>
                    <li><a href="#">主体设置</a></li>
                    <li><a href="#">安全设置</a></li>
                </ul>
                <hr>
                <ul>
                    <span>==网络流量分析</span>
                    <li><a href="#">访问情况</a></li>
                </ul>
            </div>

            <div class="admin_middle_frame">
                <iframe src="admin_content/admins/admin_manage.php" frameborder="0" width="100%" height="100%"></iframe>
            </div>

        </div>

    </div>
</body>
</html>
