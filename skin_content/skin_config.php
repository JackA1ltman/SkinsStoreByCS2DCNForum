<?php
    $version="202102120001";
    $name="CS2D皮肤站";
    $url="https://pifu.cs2dcn.com/";
    $start_year="2017";
    $latest_year=date('Y');
    $copies_code="蒙ICP备20001015号";
    $get_copies_mod = 0;
    $copies_website="http://www.beian.miit.gov.cn/";
    $website_location=$_SERVER['PHP_SELF'];

    /*有关定义的变量值，这里有部分数据将会在install/index.php中随着安装自动定义，且可以在网站后台修改，没有绝对的必要请不要自行修改定义值*/

    define("website_version",$version);
    define("website_name",$name);
    define("website_url",$url);
    define("website_start_year",$start_year);
    define("website_latest_year",$latest_year);
    define("website_copies_code",$copies_code);
    define("website_copies_mod",$get_copies_mod);
    define("website_copies",$copies_website);
    define("website_location",$website_location);

    /*Please don't modify their values,you can modify from website backstage*/
