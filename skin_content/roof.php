<div class="roof_entire">
    <div class="roof_logo"><a href="<? echo constant("website_url"); ?>"><img style="width: 45px;" src="skin_images/logo.png"></a></div>
    <div class="roof_nav">
        <a href="./index.php"><strong id="site_1" >首页</strong></a>
        <a href="./skin_market.php?page=1"><strong id="site_2">市场</strong></a>
        <a href="./skin_bag.php"><strong id="site_3">背包</strong></a>
        <a href="./skin_help.php"><strong id="site_4">帮助</strong></a>
        <a href="./skin_lottery.php"><strong id="site_5">开箱</strong></a>
        <a href="./skin_exchange.php"><strong id="site_6">兑换</strong></a>
    </div>
    <!--下面是ID小页-->
    <div class="roof_login">
        <div style="<? if(empty($_SESSION['username'])) { echo 'display: none;'; } ?>">
            <p style="display: block;margin: 0px">您还没有登陆</p>
            <p style="display: block;text-align: center;margin: 0px">请<a href="#">登陆</a>！</p>
        </div>
        <div style="display: block;margin: 0px;<? if(!empty($_SESSION['username'])) { echo 'display: none;'; } ?>" id="user_account"><p>JackAltman</p></div>
        <div class="roof_user" id="user_account_information" style="display: none;">
            <div class="roof_user_pic"><img style="width: 50px;" src="skin_images/logo.png" alt=""></div>
            <div class="roof_user_id">
                <p style="margin-top: 10px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">JackAltman</p>
                <a href="#"><p>查看你的个人资料</p></a>
            </div>
            <div class="roof_user_power_pic">
                <img src="skin_images/smallpic/power.png" alt="">
                <div class="roof_user_power_pic_inf">
                    <a href="#"><p>登出</p></a>
                </div>
            </div>
            <div class="roof_user_power_inf">
                <p>您有<strong style="font-size: 14px;color: red;">51</strong>节电池</p>
                <div style="max-width: 40px;width: 40px;">
                    <a href="#"><p>兑换硬币</p></a>
                </div>
            </div>
        </div>
    </div>
</div>