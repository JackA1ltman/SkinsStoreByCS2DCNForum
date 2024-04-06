<?php
require_once "../skin_content/skin_config.php";

$version="202102120001";
$path="../install";

if( constant("website_version") != $version ){
    echo "目前模式为：更新模式";
    echo "<br>";
    echo "最新版本号：".$version;
    echo "<br>";
    echo "您的版本号：".constant("website_version");
}
if ( $_GET['method'] == 2 ) {
    function delete_directory($dirPath){
        $dir = $dirPath;
        if(is_dir($dir)){
            $files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST
            );
            foreach($files as $file){
                if ($file->isDir()){
                    rmdir($file->getRealPath());
                }else{
                    unlink($file->getRealPath());
                }
            }
        }
    }
    delete_directory("../install");
}
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>安装程序 - Wizard</title>
    <link rel="stylesheet" href="content/css/style.css">
</head>
<body>
    <div class="install_middle">

        <div class="install_middle_top">
            皮肤站安装向导
        </div>

        <div <? if ($_GET['method'] == 1 or $_GET['method'] == 2) { echo "style='display: none;'"; } ?> class="install_middle_core">
            <div class="install_middle_title">
                欢迎安装皮肤站，在安装前请先同意一下内容：
            </div>
            <iframe src="content/protocol.php" frameborder="0" width="100%" height="100%" style="border: 1px solid black;"></iframe>
            <div style="display: grid;justify-content: center;margin-top: 10px;">
                <form action="index.php" method="get" name="first">
                    <input type="hidden" name="method" value="1">
                    <button style="width: 70px;height: 30px;" type="submit">下一步</button>
                </form>
            </div>
        </div>

        <div <? if ($_GET['method'] != 1 or $_GET['method'] == 2 ) { echo "style='display: none;'"; } ?> class="install_middle_core2">

            <div style="text-align: center;background-color: gainsboro;"><strong>配置检测</strong></div>

            <div class="install_middle_php_ver">

                <table border="0">
                    <tr>
                        <th>项目</th>
                        <th>要求</th>
                        <th>实际</th>
                        <th>备注</th>
                    </tr>
                    <tr>
                        <td>PHP</td>
                        <td>&lt;=7.1</td>
                        <td><? echo PHP_VERSION; ?></td>
                        <td><? if (PHP_VERSION <= '7') { echo "您的PHP版本过低，可能出现错误";} ?></td>
                    </tr>
                </table>

            </div>

            <div style="text-align: center;background-color: gainsboro;"><strong>安装数据库</strong></div>

            <form action="content/decide.php" method="get">
                <div class="install_middle_sql">
                    <table>
                        <tbody>
                        <tr>
                            <th>数据库地址</th>
                            <td>
                                <input type="text" name="database_link" value="localhost" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th>数据库账户</th>
                            <td>
                                <input type="text" name="database_username" value="root" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th>数据库密码</th>
                            <td>
                                <input type="password" name="database_password" value="123456" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th>数据库名称</th>
                            <td>
                                <input type="text" name="database_name" value="skin_database" autocomplete="off">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            <div style="text-align: center;background-color: gainsboro;"><strong>创建管理员账户</strong></div>
                <div class="install_middle_sql">
                    <table>
                        <tbody>
                        <tr>
                            <th>管理员账户</th>
                            <td>
                                <input type="text" name="admin_username" value="admin" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th>管理员密码</th>
                            <td>
                                <input type="password" name="admin_password" value="123456" autocomplete="off">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div style="display: grid;justify-content: center;">
                    <button>确定</button>
                </div>
            </form>

        </div>

        <div <? if ($_GET['method'] == 1 or $_GET['method'] != 2 ) { echo "style='display: none;'"; } ?> class="install_middle_core3">
            <div>
                <h1>感谢您的安装，欢迎您使用皮肤站程序</h1>
                <h3>请检查根目录下是否存有install目录，如果存有请删除，防止数据泄露</h3>
            </div>
            <div>
                <button><a href="../index.php">进入网站</a></button>
            </div>
        </div>

    </div>
</body>
</html>
