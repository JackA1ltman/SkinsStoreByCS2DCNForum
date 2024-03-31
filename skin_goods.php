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

$itemID=$_GET['cater_block_number'];

$connectMysql=$loadMysql->connect(constant("SQL_SERVER_ADDRESS").':'.constant("SQL_SERVER_PORT"),constant("SQL_SERVER_USERNAME"),constant("SQL_SERVER_PASSWORD"),constant("SQL_SERVER_DATABASE"));
$queryMysql=$loadMysql->variable("SELECT item_name,item_maker_name,item_describe,item_level,item_type,item_price,image_big_link,trade_total_number,trade_sold_number,trade_bought_number FROM skin_weapons_informations wp_inf INNER JOIN skin_weapons_images wp_img ON wp_inf.item_order_id = wp_img.item_order_id  INNER JOIN skin_weapons_trade wp_tra ON wp_inf.item_order_id = wp_tra.item_order_id where wp_inf.item_order_id=".$itemID);
$consultMysql=$loadMysql->choice(2);
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
    <title><? echo constant("website_name"); ?>&nbsp;-&nbsp;皮肤&nbsp;-&nbsp;<? echo $consultMysql['item_type']; ?>&nbsp;|&nbsp;<? echo $consultMysql['item_name']; ?></title>
    <link rel="stylesheet" href="skin_style/skin_frame.css">
    <link rel="stylesheet" href="skin_style/skin_roof.css">
    <link rel="stylesheet" href="skin_style/skin_middle.css">
    <link rel="stylesheet" href="skin_style/skin_feet.css">
    <link rel="stylesheet" href="skin_style/market/skin_notice.css">
    <link rel="stylesheet" href="skin_style/goods/skin_goods.css">
</head>
<body>

    <? include "skin_content/roof.php"; ?>

    <div class="goods_middle">

        <div class="core_middle_notice">
            <img src="skin_images/smallpic/notice.png" alt="">
            <a href="javascript:void(0)" onclick="notice()">测试测试</a>
        </div>

        <div class="goods_middle_inf">

            <div class="goods_middle_inf_blocks">

                <div class="goods_middle_inf_blocks_pic">
                    <div style="display: grid;background: radial-gradient(#ffffff 10%, #4b69ff 45%, #101822 95%);justify-content: center;align-content: center;">
                        <img src="skin_images/weapon/30006_big.png" alt="">
                    </div>
                </div>

                <div class="goods_middle_inf_blocks_core">

                    <div></div><!--设置空白-->
                    <div style="font-size: 30px;"><? echo $consultMysql['item_type']; ?>&nbsp;|&nbsp;<? echo $consultMysql['item_name']; ?></div>
                    <div></div><!--设置空白-->
                    <div class="goods_middle_inf_blocks_core_level">
                        <div>
                            <img style="width: 32px;height: 32px;" src="../Testproject/logo1.png" alt="">
                        </div>
                        <div style="display: grid;grid-template-rows: repeat(2,17px)">
                            <div style="font-size: 14px;"><? echo $consultMysql['item_type']; ?>&nbsp;皮肤</div>
                            <div style="color: #4b69ff;font-size: 14px;">军规级</div>
                        </div>
                    </div>
                    <div></div><!--设置空白-->
                    <div>简介：<? echo $consultMysql['item_describe']; ?></div>
                    <div></div><!--设置空白-->
                    <div>作者：<? echo $consultMysql['item_maker_name']; ?></div>
                    <div></div><!--设置空白-->
                    <div>售价：<span style="font-size: 20px;color: #FFD700;font-weight: bold;"><? echo $consultMysql['item_price']; ?></span><img style="width: 12px;margin-left: 4px;" src="skin_images/smallpic/power.png" alt=""></div>
                    <div></div><!--设置空白-->
                    <div>库存：<span style="font-size: 20px;color: red;font-weight: bold;"><? echo $consultMysql['trade_total_number']; ?></span>件</div>
                    <div></div><!--设置空白-->
                    <div>卖出：<span style="font-size: 20px;color: pink;font-weight: bold;"><? echo $consultMysql['trade_sold_number']; ?></span>件</div>

                </div>

                <div class="goods_middle_inf_blocks_require">
                    <div>个别上架物品的外表可能与上方所示略有差异。例如，物品可能有自定义名称、描述或颜色。</div>
                    <div></div><!--设置空白-->
                    <div>
                        <div>购买后，这件物品：</div>
                        <ul>
                            <li>一周内将不可交易</li>
                            <li>可在Mix/Match[Rank] 和 Mix/Match #2服使用</li>
                        </ul>
                    </div>
                </div>

                <div class="goods_middle_inf_blocks_button">
                    <div></div><!--设置空白-->
                    <div>
                        <button style="background-color: #773535;color: white;">赠送</button>
                    </div>
                    <div></div><!--设置空白-->
                    <div>
                        <button style="background-color: #4773C8;color: #D2D2D2">购买</button>
                    </div>
                    <div></div><!--设置空白-->
                </div>

            </div>

        </div>

        <div class="core_middle_hot">
            <div class="core_middle_hot_inf"><p>同类热销</p></div>
        </div>
        <div class="core_middle_market">
            <? for ($i=1;$i<11;$i++){ ?>
                <div style="/*border: 1px solid gold*/">
                    <div class="core_middle_market_item">
                        <div class="core_middle_market_item_pic" style="background: radial-gradient(#ffffff 10%, #4b69ff 45%, #101822 95%)"><img src="skin_images/box/cs2dcase.png" alt="" style="width: 200px;"></div>
                        <div style="display: grid;grid-template-rows: repeat(2,50%);background-color: white;">
                            <div class="core_middle_market_item_inf">
                                <div class="core_middle_market_item_inf_name"><a href="#"><p>CS2D武器箱</p></a></div>
                                <div class="core_middle_market_item_inf_price">
                                    <img src="skin_images/smallpic/power.png" alt="">
                                    <p><strong>20</strong></p>
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
<script src="skin_content/javascripts/title.js"></script>
</html>
